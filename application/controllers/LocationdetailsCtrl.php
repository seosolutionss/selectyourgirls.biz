<?php

defined('BASEPATH') or exit('No direct script access allowed');



class LocationdetailsCtrl extends CI_Controller

{

	public function __construct()

	{

		parent::__construct();

		$this->load->model('Metadetails_model');

		$this->load->model('Location_model');
		$this->load->model('Prof_model');

		$this->load->model('Category_model');


	}





	public function index()

	{	

         		

	

			

		$this->load->view("includes/header");

		$this->load->view("locationdetails");

		$this->load->view("includes/footer");

	}

	public function load(){

			

		//$id=$this->uri->segment(3);

		

		$pg_url = $this->uri->segment(1);	

		$tit_id = $this->uri->segment(3);
		$data['all_prof'] = $this->Prof_model->get_all_profiles();
		$data['get_loc']=$this->Location_model->get_loc_list();
		$data['get_cat']=$this->Category_model->cat_list();

		$data['row'] = $this->Metadetails_model->get_meta_list($pg_url,$tit_id);

		$data['result']=$this->Location_model->get_list_data(str_replace('-',' ',$this->uri->segment(2)),$tit_id);
		if(count($data['result'])<=0){
			$this->output->set_status_header('404');
			$this->load->view('error');
		}
		else{

		$this->load->model('Prof_model');

		$limit = 12;

		$data['res']  = $this->Prof_model->posts_list($limit);



		$data['loc_list']  = $this->Location_model->get_loc_list();

		$limit = 12;	
		$data['lim_loc']=$this->Location_model->loc_list($limit);

		//print_r($data['result']);



		 // foreach($data['result'] as $val)

		 // {

   //      echo $val['id'];

		 // }

        $this->load->view("includes/header",$data);

		$this->load->view('locationdetails',$data);

		$this->load->view("includes/footer");




	}
		

	}

 }







