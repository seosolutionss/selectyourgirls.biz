<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FemaleEscortsCtrl extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->model('Metadetails_model');
		$this->load->model('Prof_model');

		$this->load->model('Category_model');

		$this->load->model('Location_model');

	}





	public function index()

	{

         

		$pg_url = $this->uri->segment(1);

        $tit_id = $this->uri->segment(3);
				$data['all_prof'] = $this->Prof_model->get_all_profiles();
				$data['get_loc']=$this->Location_model->get_loc_list();
				$data['get_cat']=$this->Category_model->cat_list();


		 $data['row'] = $this->Metadetails_model->get_meta_list(basename($pg_url,$tit_id));

		 

		$this->load->model('Prof_model');



		$data['res']  = $this->Prof_model->twenty_to_30_profiles();



		$this->load->view("includes/header",$data);

		$this->load->view("female-escorts",$data);

		$this->load->view("includes/footer");

	}

	

}







