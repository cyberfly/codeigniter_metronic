<?php

class MY_Controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('user_id');
		$this->permission->is_logged_in();

		$data = new stdClass();
		
		$data->the_user = $this->user_data();
		$this->the_user = $data->the_user;
		$this->load->vars($data);
		$this->current_datetime = date("Y-m-d H:i:s");			
	}

	function load_language()
	{
        $this->lang->load('site', $this->the_user->site_language);
	}

	function custom_validation_language()
	{
		//set validation lang for malay

        $this->load->library('form_validation');

        if($this->the_user->site_language=='malay')
        {
        	$this->form_validation->set_message('required', 'Ruangan ini wajib di isi.');
        	$this->form_validation->set_message('is_unique', '%s ini telah digunakan di dalam sistem.');
        	$this->form_validation->set_message('valid_email', 'Ruangan ini mesti mengandungi emel yang betul.');
        	$this->form_validation->set_message('numeric', 'Ruangan ini mesti mengandungi nombor sahaja.');
        	$this->form_validation->set_message('matches', '%s tidak sama dengan %s.');
        	$this->form_validation->set_message('min_length', '%s mesti mengandungi sekurang-kurangnya %s karekter.');
        }
	}	

	function user_data()
	{		
		if($this->ion_auth->is_admin())
		{
			$this->load->model('user_model');
			$user_data = $this->user_model->user_info()->get_by('user_id', $this->user_id);

			//profile page

			$user_data->user_profile = 'user/admin_profile';

			if (empty($user_data->site_language)) {
				$user_data->site_language = 'malay';
			}			
		}
		else if($this->ion_auth->in_group('general_admin')) //reserved for future
		{

		}
		else if($this->ion_auth->in_group('user'))
		{
			$this->load->model('user_model');
			$user_data = $this->user_model->user_info()->get_by('user_id', $this->user_id);

			//profile page

			$user_data->user_profile = 'user/profile';

			$user_data->role_id = USER_GROUP;

		}

		return $user_data;

	}

	function get_header_meta()
	{
		$meta = array();

		/*

		$this->load->model('mail_incoming_model');

		$row = $this->mail_incoming_model->get_many_by(array('user_id'=>$this->user_id, 'read_status'=>'N'));


		if($row)
		{
			$meta['new_message'] = sizeof($row);
		}*/

		return $meta;
	}

}

?>