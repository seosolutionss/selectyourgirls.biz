<?php

defined('BASEPATH') or exit('No direct script access allowed');



class CategorydetailsCtrl extends CI_Controller

{

		

	public function __construct()	

	{

		parent::__construct();

		$this->load->model('Metadetails_model');
		$this->load->model('Prof_model');

		$this->load->model('Category_model');

		$this->load->model('Location_model');

		

	}			



	public function index()

	{

       

		$this->load->view("includes/header");

		$this->load->view("categorydetails");

		$this->load->view("includes/footer");

	}

	

	public function load(){

			

		//$id=$this->uri->segment(3);

		$pg_url = $this->uri->segment(1);

		$tit_id = $this->uri->segment(3);
		$data['get_loc']=$this->Location_model->get_loc_list();
		$data['get_cat']=$this->Category_model->cat_list();
		$data['all_prof'] = $this->Prof_model->get_all_profiles();

		$data['row'] = $this->Metadetails_model->get_meta_list($pg_url,$tit_id);

		$this->load->model('Category_model');

		$data['result']=$this->Category_model->get_cat(str_replace('-',' ',$this->uri->segment(2)));
		
	if(count($data['result'])<=0){
		$this->output->set_status_header('404');
		$this->load->view('error');
		
	}else{
		$this->load->model('Prof_model');

		$limit = 4;

		$data['res']  = $this->Prof_model->posts_list($limit);





		$this->load->model('Category_model');

		$cat_limit =12; 
		$data['result_cat']  = $this->Category_model->get_cat_list($cat_limit);
		$data['all_cat']  = $this->Category_model->cat_list();

		

        $this->load->view("includes/header",$data);

		$this->load->view('categorydetails',$data);

		$this->load->view("includes/footer");	
		 }
	}
}