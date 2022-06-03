<?php
 Class BlogdetailsCtrl extends CI_Controller{
	public function __construct(){
		parent::__construct(); 
		$this->load->model('Blog_model'); 
		$this->load->model('Metadetails_model');  
	}



	public function load(){ 
		 $pg_url = $this->uri->segment(1);
		 $title = str_replace('-',' ',$this->uri->segment(2));
         $tit_id = $this->uri->segment(3);  
		 
		 $data['row'] = $this->Metadetails_model->get_meta_list($pg_url,$tit_id);
        $data['res'] = $this->Blog_model->blog_info($title,$tit_id);   
 
		$this->load->view('includes/header',$data); 
		$this->load->view('blogdetails',$data); 
		$this->load->view('includes/footer'); 
	}

}