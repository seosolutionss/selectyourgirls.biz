<?php

defined('BASEPATH') or exit('No direct script access allowed');



class LocationCtrl extends CI_Controller

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

         

		$pg_url = $this->uri->segment(1);

        $tit_id = $this->uri->segment(3);
				$data['get_cat']=$this->Category_model->cat_list();
				$data['all_prof'] = $this->Prof_model->get_all_profiles();


		 $data['row'] = $this->Metadetails_model->get_meta_list(basename($pg_url,$tit_id));

		 

         $this->load->model('Location_model');

         $data['get_loc']=$this->Location_model->get_loc_list();
		 $limit = 12;	
         $data['lim_loc']=$this->Location_model->loc_list($limit);	



		$this->load->view("includes/header",$data);

		$this->load->view("location",$data);

		$this->load->view("includes/footer");

	}


	// ajax to get seach locations 
public function ajax_srch_location(){
	$val_srch = $_REQUEST['val'];
	$data['res'] = $this->Location_model->srch_locs($val_srch);
	
     if(!empty($data['res'])){
	   foreach($data['res'] as $row_srch_loc){
	          $msg = "<div class='loc-section'>
                        <a href='".base_url()."location/".str_replace(' ','-',$row_srch_loc['loc_title'])."/".$row_srch_loc['id']."'>
                            <img src='".base_url()."uploads/location/".$row_srch_loc['loc_img']."' alt='escort-service-Bangalore-indiranagar' class='img-fluid'>
                        </a> 
                  <div class='loc-head' >
                        <a href='".base_url()."location/".str_replace(' ','-',$row_srch_loc['loc_title'])."/".$row_srch_loc['id']."'>
                            <h4>
                            <b>".$row_srch_loc['loc_title']."</b><br> 
                        </h4>
                        </a>
                    </div> 
            </div>";
       echo $msg; 
	   }
     }else{ 
     	echo "<div class='col-12'><div class='mb-3' style='text-align:center;font-size:16px;color:#fff'>No Location Found."."<br/>";
     	echo "Please suggest location you are looking for</div>";
     	echo "<form name='sugg_loc' id='sugg_loc' method='POST' action=''>";
     	echo "<input type='text' name='sug_loc' id='sug_loc' class='form-control' style='width:200px;margin: 0 auto;margin-top: 7px;' value=''>
            <div id='err_msg' style='color:#ff0000;'></div>
     	      <div style='width:100%;margin: 0 auto;margin-top: 10px;text-align: center;'><input type='submit' name='add_location' id='add_location' class='btn btn-warning' value='Suggest Location'/></div></form></div>";
     }
}



	// add suggest loactions 
public function ajax_ins_loc(){ 
	if(isset($_POST['sug_loc'])){
		extract($_POST);
		$data= array(	 
			'loc_name'=>$sug_loc,	  
			'added_at'=>date('Y-m-d H:i:s') 
		 );
		$data['res'] = $this->Location_model->suggest_loc($data);
		if($data['res']){
		$msg = "Location added Successfully. We will review and add the service to <span style='color:#ffffb9;'>".$sug_loc."</span> location."; 
		  echo $msg;
	
		}else{
			$msg = "Sorry Something Went Wrong!"; 
			echo $msg;
		}
		}
	}

}
?>