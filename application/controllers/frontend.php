<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');								
	}

	public function index()
	{
	    $data = array();

	    $article_records = $this->article_model->get_all();

	    // var_dump($article_records);
	    // exit;

	    $data['article_records'] = $article_records;	

	    // $data['main'] = 'article/add_article';	  	    
	       
		$this->load->view('base_template/front_base',$data);
	}
}

/* End of file frontend.php */
/* Location: ./application/controllers/frontend.php */