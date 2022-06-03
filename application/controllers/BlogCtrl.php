<?php
 Class BlogCtrl extends CI_Controller{
	public function __construct(){
		parent::__construct(); 
		$this->load->model('Blog_model'); 
		$this->load->model('Metadetails_model');  
	}



	public function index(){ 
		 $pg_url = $this->uri->segment(1);
         $tit_id = $this->uri->segment(3); 
		$data['row'] = $this->Metadetails_model->get_meta_list(basename($pg_url,$tit_id));
        $data['res'] = $this->Blog_model->get_blog_list();  

 
		$this->load->view('includes/header',$data); 
		$this->load->view('blog',$data); 
		$this->load->view('includes/footer'); 
	}

}