<?php

defined('BASEPATH') or exit('No direct script access allowed');



class VideodetailsCtrl extends CI_Controller

{

	public function __construct()

	{

		parent::__construct();

		$this->load->model('Metadetails_model');

		$this->load->model('Videos_model');
		$this->load->model('Prof_model');

		$this->load->model('Category_model');

		$this->load->model('Location_model');

	}
 

	public function index() {  

		$this->load->view("includes/header");

		$this->load->view("videoedetails");

		$this->load->view("includes/footer");

	}

	public function load(){ 

		$pg_url = $this->uri->segment(1);
		$title = str_replace("-",' ',$this->uri->segment(2));
		$tit_id = $this->uri->segment(3);

		$limit = 8;
		$data['get_cat']=$this->Category_model->cat_list();
		$data['get_loc']=$this->Location_model->get_loc_list();
		$data['all_prof'] = $this->Prof_model->get_all_profiles();
		$data['row'] = $this->Metadetails_model->get_meta_list($pg_url,$tit_id);

		$data['ress']  = $this->Videos_model->lim_vdo_list($limit);

		$data['result']=$this->Videos_model->get_list_data($title,$tit_id);
		// print_r($data['result']);die;

		if(count($data['result'])<=0){
			$this->output->set_status_header('404');
			$this->load->view('error');
		}else{

        $this->load->view("includes/header",$data);

		$this->load->view('videodetails',$data);

		$this->load->view("includes/footer");



		 }   
	} 




 }







