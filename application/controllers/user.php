<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');        
        $this->load->model('user_info_model');        
    }

    public function index()
    {
    	$this->user_list();
    }

    function user_list()
	{
		$data = array();

		$user_records = $this->user_model->list_user()->get_all();

		$data['user_records'] = $user_records;

	    $data['main'] = 'user/user_list';
	    $data['js_function'] = array('user_list');

		$this->load->view('base_template/base',$data);
	}
	
	function add_user()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', $this->lang->line('username'), 'trim|required|alpha_dash|is_unique[tb_users.username]');
		$this->form_validation->set_rules('email', $this->lang->line('email'), 'trim|valid_email|required|is_unique[tb_users.email]');
		$this->form_validation->set_rules('phone', $this->lang->line('phone'), 'trim|numeric|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('first_name', $this->lang->line('first_name'), 'trim|required');
		$this->form_validation->set_rules('password', $this->lang->line('password'), 'trim|required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
		$this->form_validation->set_rules('password_confirm', $this->lang->line('password_confirm'), 'trim|required');		
		$this->form_validation->set_rules('address', $this->lang->line('address'), 'trim');
		$this->form_validation->set_rules('state', $this->lang->line('state'), 'trim');
		$this->form_validation->set_rules('city', $this->lang->line('city'), 'trim');
		$this->form_validation->set_rules('office_no', $this->lang->line('office_no'), 'trim');
		$this->form_validation->set_rules('fax_no', $this->lang->line('fax_no'), 'trim');

		if($this->form_validation->run() == TRUE)
	    {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$email = $this->input->post('email');
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$company = $this->input->post('company');
			$phone = $this->input->post('phone');
			
			$address = $this->input->post('address');
			$state = $this->input->post('state');
			$city = $this->input->post('city');
			$office_no = $this->input->post('office_no');
			$fax_no = $this->input->post('fax_no');

			$group = array(USER_GROUP);

			$additional_data = array('first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'company' => $this->input->post('company'),
				'phone' => $this->input->post('phone')
			);

			if($user_id = $this->ion_auth->register($username, $password, $email, $additional_data, $group))
			{
				$user_info_data = array(
				    			'user_id'=>$user_id,				    			
				    			'address'=>$address,
				    			'state'=>$state,
				    			'city'=>$city,
				    			'office_no'=>$office_no,
				    			'fax_no'=>$fax_no,
				    			'site_language'=>'malay'
				    			);

				$this->user_info_model->insert($user_info_data);

				$this->session->set_flashdata('success', "User successfully add");
				redirect("user/add_user");
			}
			else
			{
				$this->session->set_flashdata('error', 'Error. Please try again.');
				redirect('user/add_user');
			}

	    }
	    else //if page initial load or form validation false
	    {
	    	$data = array();

	    	$data['main'] = 'user/add_user';

			$this->load->view('base_template/base',$data);
	    }
	}

	function edit_user()
	{
		$this->load->library('form_validation');

		//get id for checking username on update

		$unique_id = $this->input->post('user_id');
	    $unique_id = get_attr_id($unique_id);

		$this->form_validation->set_rules('username', 'Username', 'required|trim|alpha_dash|is_unique[tb_users.username.id.'.$unique_id.']');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|is_unique[tb_users.email.id.'.$unique_id.']');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|numeric|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');		
		$this->form_validation->set_rules('address', $this->lang->line('address'), 'trim');
		$this->form_validation->set_rules('state', $this->lang->line('state'), 'trim');
		$this->form_validation->set_rules('city', $this->lang->line('city'), 'trim');
		$this->form_validation->set_rules('office_no', $this->lang->line('office_no'), 'trim');
		$this->form_validation->set_rules('fax_no', $this->lang->line('fax_no'), 'trim');		

		if($this->input->post('new_password'))
		{
			$this->form_validation->set_rules('new_password', 'New Password', 'trim|required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
			$this->form_validation->set_rules('password_confirm', 'Confirm New Password', 'trim|required');
		}

		if($this->form_validation->run() == TRUE)
	    {
	    	$hash_user_id = $this->input->post('user_id');

	    	//check hash if the user edit it

	    	$user_id = get_attr_id($hash_user_id);
	    	$hash = get_attr_hash($hash_user_id);

	    	$this->permission->check_form_id_hash($user_id,$hash);

	    	$username = $this->input->post('username');
			$email = $this->input->post('email');
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$phone = $this->input->post('phone');
			$password = $this->input->post('new_password');			
			$address = $this->input->post('address');
			$state = $this->input->post('state');
			$city = $this->input->post('city');
			$office_no = $this->input->post('office_no');
			$fax_no = $this->input->post('fax_no');
			$active = 1;

			// set active to 0 if you want to deactivate the account

			$data = array(
						'username' => $username,
						'phone' => $phone,
						'email' => $email,
						'first_name' =>$first_name,
						'last_name' =>$last_name,
						'active' =>$active
						 );

			if($this->input->post('new_password'))
			{
				$data = $data + array('password'=>$password);
			}

	    	if($this->ion_auth->update($user_id,$data))
			{
				$user_info_data = array(				    			
				    			'address'=>$address,
				    			'state'=>$state,
				    			'city'=>$city,
				    			'office_no'=>$office_no,
				    			'fax_no'=>$fax_no
				    			);

				$this->user_info_model->update_by(array('user_id'=>$user_id),$user_info_data);

				$this->session->set_flashdata('success', "User successfully updated");				
				redirect('user/user_list');
			}
			else
			{
				$this->session->set_flashdata('error', 'Error. Please try again.');				
				redirect('user/user_list');
			}
	    }
	    else //if page initial load or form validation false
	    {
	    	$user_id = $this->uri->segment(3);

	    	//means come from staff_info list

	    	if($this->uri->segment(3))
	    	{
	    		$this->permission->check_id_hash($user_id);
	    	}

	    	//means come from validation error

	    	if($this->input->post('user_id'))
	    	{
	    		$hash_user_info_id = $this->input->post('user_id');

		    	//check hash if the user edit it

		    	$user_id = get_attr_id($hash_user_info_id);
		    	$hash = get_attr_hash($hash_user_info_id);

		    	$this->permission->check_form_id_hash($user_id,$hash);
	    	}

	    	$data = array();

	    	$user_info_records = $this->user_model->user_info()->get($user_id);

	    	$data['user_info_records'] = $user_info_records;

	    	$data['main'] = 'user/edit_user';

			$this->load->view('base_template/base',$data);
	    }
	}	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */