<?php

defined('BASEPATH') or exit('No direct script access allowed');



class VideosCtrl extends CI_Controller

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





    public function index()

    {

         

        

            //echo 'hello';die;
        $pg_url = $this->uri->segment(1);
        $tit_id = $this->uri->segment(3);

            $data['row'] = $this->Metadetails_model->get_meta_list(basename($pg_url,$tit_id));
 
            $data['get_video'] = $this->Videos_model->get_video_list();
            $data['all_prof'] = $this->Prof_model->get_all_profiles();
            $data['get_loc']=$this->Location_model->get_loc_list();
            $data['get_cat']=$this->Category_model->cat_list();

        $this->load->view("includes/header",$data);

        $this->load->view("video",$data);

        $this->load->view("includes/footer");

    }

        
      

}







