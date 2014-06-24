<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Permission {

	private $_ci;

	function __construct()
	{

		$this->_ci = &get_instance();

		// $this->_ci->load->model('staff_model');
		// $this->_ci->load->model('plan_monitoring_model');
		// $this->_ci->load->model('rmp_approval_model');

		// $this->class_user_id = $this->_ci->session->userdata('user_id');

		// $this->user_row = $this->_ci->staff_model->staff_info()->get_by('staff_id', $this->class_user_id);

		// if($this->user_row)
		// {
		// 	$this->_ci->load->model('project_model');

		// 	$this->project_row = $this->_ci->project_model->get($this->user_row->active_project);
		// }

		// $this->current_uri = $this->_ci->router->fetch_class().'/'.$this->_ci->router->fetch_method();
	}



	public function is_logged_in()
	{
		$is_logged_in = $this->_ci->ion_auth->logged_in();

		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			if($this->_ci->input->is_ajax_request())
			{
				echo 'session_expired';
				exit;
			}
			else
			{
				redirect('auth/login');
			}
		}

	}

	public function public_area()
	{
		$public = array(
						'project/add_project',
						'project/manage_add_project',
						'dashboard/index',
						'project/manage_project',
						'project/change_project',
						'project/add_project_role',
						'staff/ajax_project_role',
						'staff/profile'
						);

		return $public;
	}

	public function risk_area()
	{
		$risk = array(
						'risk_register/view_risk_register',
						'rmp/edit_rmp',
						'emerging_risk/view_risk_register',
						'report_status/view_risk_management',
						'report_status/view_report_status',
						'report_final/view_report_final'
						);

		return $risk;
	}

	public function report_status_area()
	{
		$risk = array(
						'report_status/index',
						'report_status/view_report_status',
						'report_status/edit_report_status',
						'report_status/submit_report_status',
						'report_status/view_risk_management',
						'report_status/update_risk_management',
						'report_status/add_report_status_approval',
						'report_status/ajax_add_report_status_approval',
						'report_status/ajax_add_report_status_approval'
						);

		return $risk;
	}

	public function final_report_area()
	{
		$risk = array(
						'report_final/index',
						'report_final/view_report_final',
						'report_final/save_project_info',
						'report_final/save_risk_info',
						'report_final/save_risk_summary',
						'report_final/save_report_info',
						'report_final/ajax_add_final_report_approval'
						);

		return $risk;
	}

	public function is_active_project_area()
	{

		if(!$this->_ci->ion_auth->is_admin())
		{

			//check if not in this area

			$public = array(
						'project/add_project',
						'project/manage_add_project',
						'dashboard/index',
						'dashboard/workshop',
						'project/manage_project',
						'project/change_project',
						'project/add_project_role',
						'workshop_risk_register/manage_workshop_risk',
						'staff/ajax_project_role',
						'staff/ajax_change_language',
						'staff/profile'
						);

			if(!in_array($this->current_uri,$public))
			{

				if(empty($this->user_row->active_project))
				{
					redirect(base_url());
				}
			}
		}

	}

	public function is_approved_project()
	{
		if(!$this->_ci->ion_auth->is_admin())
		{
			$approved = 'Y';

			$public = $this->public_area();

			//put exception to edit project, and project index

			$exception = array('project/edit_project','project/index');

			$public = array_merge($public, $exception);

			if(!in_array($this->current_uri,$public))
			{
				if($this->project_row)
				{
					if($this->project_row->status!='A')
					{
						$approved = 'N';
					}
				}

				if($approved=='N')
				{
					if($this->user_row)
					{
						$active_project = $this->user_row->active_project;
						$active_project_hash = encode_id($active_project);

						$this->_ci->lang->load('general', $this->user_row->site_language);

						if($this->project_row->status=='D')
						{
							$project_status_error = $this->_ci->lang->line('project_status_draft_error');
						}
						else if($this->project_row->status=='P')
						{
							$project_status_error = $this->_ci->lang->line('project_status_pending_error');
						}
						else if($this->project_row->status=='R')
						{
							$project_status_error = $this->_ci->lang->line('project_status_reject_error');
						}

						$this->_ci->session->set_flashdata('project_status_error', $project_status_error);

						redirect("project/edit_project/$active_project/$active_project_hash");
					}

				}
			}
		}
	}

	public function is_approved_planning()
	{
		if(!$this->_ci->ion_auth->is_admin())
		{
			$risk_area = $this->risk_area();

			$pass = 'Y';
			$project_id = $this->user_row->active_project;

			if(in_array($this->current_uri,$risk_area))
			{
				if($monitoring_row = $this->_ci->plan_monitoring_model->get_by('project_id',$project_id))
				{
					if($monitoring_row->approve_status!='A')
					{
						$pass = 'N';
					}
				}
				else
				{
					$pass = 'N';
				}

				if($pass=='N')
				{
					$this->_ci->session->set_flashdata('project_status_error', $this->_ci->lang->line('general_permission_error'));

					redirect("project/plan_monitoring");
				}
			}
		}
	}

	public function is_approved_rmp()
	{
		if(!$this->_ci->ion_auth->is_admin())
		{
			$report_status_area = $this->report_status_area();

			$pass = 'Y';
			$project_id = $this->user_row->active_project;

			if(in_array($this->current_uri,$report_status_area))
			{
				$rmp_approve_records = $this->_ci->rmp_approval_model->list_rmp_approval()->get_many_by(array('project_id'=>$project_id,'approve_status'=>'A'));

				if(!$rmp_approve_records)
				{
					$pass = 'N';
				}

				if($pass=='N')
				{
					$this->_ci->session->set_flashdata('project_status_error', $this->_ci->lang->line('general_permission_error'));
					$hash = encode_id(1);
					redirect("rmp/edit_rmp/1/$hash");
				}
			}
		}
	}

	public function final_report_permission()
	{
		if(!$this->_ci->ion_auth->is_admin())
		{
			$final_report_area = $this->final_report_area();

			$pass = 'Y';
			$project_id = $this->user_row->active_project;

			if(in_array($this->current_uri,$final_report_area))
			{
				$rmp_approve_records = $this->_ci->rmp_approval_model->list_rmp_approval()->get_many_by(array('project_id'=>$project_id,'approve_status'=>'A'));

				if(!$rmp_approve_records)
				{
					$pass = 'N';
				}

				if($pass=='N')
				{
					$this->_ci->session->set_flashdata('project_status_error', $this->_ci->lang->line('general_permission_error'));
					$hash = encode_id(1);
					redirect("rmp/edit_rmp/1/$hash");
				}
			}
		}
	}

	function is_disabled_edit($boolean=false)
	{
		$disabled_edit = '';

		$project_id = $this->user_row->active_project;

		//check project status

		if($this->project_row->status=='P')
		{
			$disabled_edit = 'disabled="disabled"';
		}

		//check project planning status

	    if($row = $this->_ci->plan_monitoring_approval_model->latest_plan_monitoring_approval()->get_by('project_id', $project_id))
	    {
	    	if($row->approve_status=='P')
	    	{
	    		$disabled_edit = 'disabled="disabled"';
	    	}
	    	else if($row->approve_status=='A')
	    	{
	    		$disabled_edit = 'disabled="disabled"';
	    	}
	    }

	    //check RMP approved

	    if($boolean) //if we need result in Y or No
	    {
	    	if(!empty($disabled_edit))
	    	{
	    		$disabled_edit = 'Y';
	    	}
	    	else
	    	{
	    		$disabled_edit = 'N';
	    	}
	    }

	    return $disabled_edit;
	}

	public function check_approved_planning_link()
	{

		$project_id = $this->user_row->active_project;

		$this->_ci->load->model('plan_monitoring_model');

		$plan_monitoring_records = $this->_ci->plan_monitoring_model->get_by('project_id',$project_id);

		if(!$plan_monitoring_records)
		{
			$class = 'disabled';
		}
		else
		{
			$class = '';
		}

		return $class;
	}



	public function not_allowed_function()
	{

		$controller = $this->_ci->router->fetch_class();

		//if cron no need to check

		if($controller=='cron')
		{
			return true;
		}

		$function = $this->_ci->router->fetch_method();

		if($this->_ci->ion_auth->is_admin())
		{
			//sms module

			$group['sms'] = array();

			//contact module

			$group['contact'] = array();

			//contact group module

			$group['contact_group'] = array();

			//schedule module

			$group['schedule'] = array();

			//pricing module

			$group['pricing'] = array('view_user_pricing');

			//personal template module

			$group['personal_template'] = array();

		}
		else if($this->_ci->ion_auth->in_group('general_admin'))
		{

			//admin module

			$group['admin'] = array('index','add_admin','edit_admin','ajax_delete_admin');

			//account module

			$group['account'] = array('profile');

			//subaccount module

			$group['subaccount'] = array('profile');

			//tnc module

			$group['tnc'] = array('manage_tnc');

			//report module

			$group['report'] = array('admin_campaign_report','admin_credit_report','admin_credit_action_report');

		}
		else if($this->_ci->ion_auth->in_group('account'))
		{
			//user module

			$group['user'] = array('fast_login');

			//admin module

			$group['admin'] = array();

			//account module

			$group['account'] = array('index','add_account','edit_account','ajax_delete_account');

			//subaccount module

			$group['subaccount'] = array('profile');

			//global template module

			$group['global_template'] = array();

			//tnc module

			$group['tnc'] = array('manage_tnc');

			//pricing module

			$group['pricing'] = array('global_pricing','add_pricing','user_pricing','edit_pricing','ajax_delete_pricing','add_user_pricing','edit_user_pricing','ajax_delete_user_pricing');

		}
		else
		{
			//user module

			$group['user'] = array();

			//admin module

			$group['admin'] = array();

			//account module

			$group['account'] = array();

			//subaccount module

			$group['subaccount'] = array('index','add_subaccount','edit_subaccount','ajax_delete_subaccount');

			//global tempalate module

			$group['global_template'] = array();

			//credit module

			$group['credit'] = array();

			//pricing module

			$group['pricing'] = array();

			//report module

			$group['report'] = array('admin_campaign_report','account_campaign_report','admin_credit_report','account_credit_report','subaccount_credit_report','admin_credit_action_report','account_credit_action_report');

			//tnc module

			$group['tnc'] = array('manage_tnc');

		}



		if(isset($group[$controller]))
		{

			$controller_function = $group[$controller];

			//exclude all function in controller

			if(empty($controller_function))

			{

				if($this->_ci->input->is_ajax_request())

				{

					echo 'session_expired';

					exit;

				}

				else

				{

					show_error('You dont have permission to access the page.', 500);

				}

			}

			else //means exclude some function only

			{

				if(in_array($function, $controller_function))

				{

					if($this->_ci->input->is_ajax_request())

					{

						echo 'session_expired';

						exit;

					}

					else

					{

						show_error('You dont have permission to access the page.', 500);

					}

				}

				else

				{

					return true;

				}

			}



		}

		else

		{

			return true;

		}



	}



	public function super_admin_only()

	{

		if (!$this->_ci->ion_auth->is_admin())

		{

			if($this->_ci->input->is_ajax_request())

			{

				echo 'session_expired';

				exit;

			}

			else

			{

				show_error('You dont have permission to access the page.', 500);

			}

		}

	}



	public function check_id_hash($id)
	{
		if(!$this->_ci->uri->segment(3))
	    {
	    	show_error('You dont have permission to access the page.', 500);
	    }

	    $gethash = $this->_ci->uri->segment(4);

		$hash = encode_id($id);

		if($gethash!=$hash)
		{
			show_error('You dont have permission to access the page.', 500);
		}

	}

	public function check_id_exist($id)
	{
		if (!$id) {
			show_error('You dont have permission to access the page.', 500);
		}
	}

	public function compare_id_hash($id,$idsegment,$hashsegment)
	{
		if(!$this->_ci->uri->segment($idsegment))
	    {
	    	show_error('You dont have permission to access the page.', 500);
	    }

	    $gethash = $this->_ci->uri->segment($hashsegment);

		$hash = encode_id($id);

		if($gethash!=$hash)
		{
			show_error('You dont have permission to access the page.', 500);
		}
	}

	public function check_ajax_id_hash($id,$gethash)
	{
		$hash = encode_id($id);

		if($gethash!=$hash)
		{
			echo 'error';
			exit;
		}
	}



	public function check_form_id_hash($id,$gethash)
	{

		$hash = encode_id($id);

		if($gethash!=$hash)

		{

			show_error('You dont have permission to access the page.', 500);

		}

	}



	public function is_ajax()

	{

		if(!$this->_ci->input->is_ajax_request())

		{

			show_error('You dont have permission to access the page.', 500);

			exit;

		}

	}





}



// END Permission Class



/* End of file Permission.php */

/* Location: ./application/libraries/Permission.php */