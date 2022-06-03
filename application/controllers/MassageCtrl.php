<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MassageCtrl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Metadetails_model');
		$this->load->model('Location_model');
		$this->load->model('Category_model');
		$this->load->model('Prof_model');


	}


	public function index()
	{
         	
		
		//echo 'hello';die;
		$pg_url = $this->uri->segment(1);
        $tit_id = $this->uri->segment(3);

		 $data['row'] = $this->Metadetails_model->get_meta_list(basename($pg_url,$tit_id));
		 $data['cats'] = $this->Category_model->get_all('category');
		//  print_r($data)
		$data['get_cat']=$this->Category_model->cat_list();
		$data['get_loc']=$this->Location_model->get_loc_list();
		$data['all_prof'] = $this->Prof_model->get_all_profiles();
		 $limit = 7;
		 $data['get_cat_lim'] = $this->Category_model->get_cat_limit($limit);
		
		 $limit = 9;
		 $data['get_loc_lim'] = $this->Location_model->get_loc_lim($limit);
		$this->load->view("includes/header",$data);
		$this->load->view("massage",$data);
		$this->load->view("includes/footer");
	}
	
}



	