<?php

defined('BASEPATH') or exit('No direct script access allowed');



class HomeCtrl extends CI_Controller

{

	public function __construct()

	{

		parent::__construct();

		$this->load->model('Metadetails_model');

		$this->load->model('Prof_model');

		$this->load->model('Category_model');

		$this->load->model('Location_model');

		$this->load->model('Search_model');

		$this->load->model('Subscribe_model');

	}





	public function index()

	{	

		 

         

    //       $this->session->set_tempdata( 'val', '2' );

   	// 			 $val = $this->session->tempdata('val');

   	// 			 echo '<pre>';

    // print_r($this->session->userdata());die;	

         

	    $data['row'] = $this->Metadetails_model->get_meta_list(basename($_SERVER['PHP_SELF']));


		$limit = 20;
		$data['lim_prof'] = $this->Prof_model->postslist_with_catloc_limran($limit);

		$data['first_prof'] = $this->Prof_model->zero_to_ten_profiles();
		// print_r($data['first_prof']);die;

		$data['second_prof'] = $this->Prof_model->ten_to_19_profiles();

		$data['third_prof'] = $this->Prof_model->twenty_to_30_profiles();

		$data['rest_prof'] = $this->Prof_model->rest_profiles();

		$data['all_prof'] = $this->Prof_model->get_all_profiles();



		$data['first_cat'] = $this->Category_model->zero_to_ten_category();
		$data['second_cat'] = $this->Category_model->ten_to_19_category();
		$data['rest_cat'] = $this->Category_model->rest_category();

		// echo '<pre>'; print_r($data['rest_prof']);die;

		//$data['get_prof']=$this->Prof_model->get_pro_review_rating();

		$data['get_prof']=$this->Prof_model->get_first_records();



		

		$data['get_cat']=$this->Category_model->cat_list();



		$limit = 7;

		$data['get_cat_lim'] = $this->Category_model->get_cat_limit($limit);



	

		$data['get_loc']=$this->Location_model->get_loc_list();	

		$limit = 12;

		$data['get_loc_lim'] = $this->Location_model->get_loc_lim($limit);

		$limit = 10;
		$data['get_slider'] = $this->Prof_model->postslist_with_catloc_limran($limit);

        

		$this->load->view("includes/header",$data);

		$this->load->view("home",$data);

		$this->load->view("includes/footer");

	}

	

	public function error(){

		$this->output->set_status_header('404');
		$this->load->view('error.php');

	}





	public function ajax_like_rating()

	{

		$this->load->model('Prof_model');

		extract($_REQUEST);



		



		$res_likes = $this->Prof_model->fetch_likes($p_id);



		foreach($res_likes as $res_likes_val)

		{

		    

		    	

                $data = array(

                    'likes'=>$res_likes_val['likes']+1 

		         );

		    	

		    	$this->Prof_model->likes_upd($data,$p_id);



		    	echo $res_likes_val['likes']+1;

		    	

		}





	}

	









public function ajax_dislike_rating()

	{

		$this->load->model('Prof_model');

		extract($_REQUEST);



		

        //print_r($_REQUEST);die;

		$res_dislikes = $this->Prof_model->fetch_dislikes($pr_id);



		foreach($res_dislikes as $res_dislikes_val)

		{

		    

		    	

                $data = array(

                    'dislike'=>$res_dislikes_val['dislike']+1 

		         );



		    	

        		



		    	$this->Prof_model->dislikes_upd($data,$pr_id);



		    	echo $res_dislikes_val['dislike']+1;

		    	

		}





	}





public function search_page(){
        $this->load->model('Prof_model'); 
        extract($this->input->post());   
        $data['res'] = $this->Prof_model->search_rec($search);  
		$this->load->view("header"); 
		$this->load->view("search",$data); 
		$this->load->view("footer"); 
}	

public function get_words($sentence, $count = 15){ 
	preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
	return $matches[0]; 
}

public function ajax_load_more(){  
	$limit = $_REQUEST['id'];
	$data['res'] = $this->Prof_model->load_more_desc($limit);
	// echo'<pre>';print_r($data['res']);die;

	           $i = 0;  
                foreach ($data['res'] as $row){  
                    $pro_post_imge = explode(',', $row['imge']); 
                    $pro_alt_title = explode(',', $row['alt_title']);  
					$avg_rate = round($row['rating']);  
             
				$msg="<div class='col-xl-3 col-lg-3 col-md-4  col-sm-6 col-6 my-3'>
					<div class='girl-profile-thumb available-book'> 
						  <div class='pic'>
							 <div class='media_icon'>
							  <div class='i-1 i-img'>
								 <div class='i1-svg'>
								   <div class='ico-center'>
									<i class='icon-heart cust-heart' aria-hidden='true'></i>
									<span class='mtop'>".$row['p_type']."</span>
								   </div>
								 </div>
							  </div>
							  <a href='<?php echo base_url(); ?>escorts/".$row['title']."/".$row['id']."'>
							  <div class='profile-category'><a href='".base_url()."escorts/".$row['title']."/". $row['id']."'><strong>Hooker Girls</strong></a>
							  </div>
							 </div>
							  <a href='".base_url()."escorts/".$row['title']."/".$row['id']."'>
								 <img class='lazyload' data-src='".base_url().'uploads/profile/'.$pro_post_imge[0]."' src='https://res.cloudinary.com/esrvb/image/upload/f_auto/loading/profile_loading.svg' alt='".$pro_alt_title[0]."'>
							  </a>
							 <div class='ribbon'>
								<div class='txt'>Available</div>
							 </div>
						  </div> 
					   </a>
					</div>
					<div class='name card-ft mb-2'>
					   <div class='name ml-2 ml-md-3'>".$row['title']."</div>
					   <div class='text-left ml-2 ml-md-3'>
						  <ul class='rateus'>";
								 if(!empty($avg_rate)){ 
									for($i=0;$i<$avg_rate;$i++){ $msg.="
									<li><svg class='img-rate' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' focusable='false' data-prefix='fas' data-icon='star' role='img' viewBox='0 0 576 512'>
									<path fill='currentColor' d='M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z'></path></svg></li>
									"; } }else { $msg.="									<li>Not Rated</li>   
							   "; } $msg.="
						  </ul>
					   </div>";
					   if(!empty($row['abt_profile'])){ 
						$msg.="<div class='nationality mt-2 px-2 px-md-3 py-3'>".$this->get_words(strip_tags($row['abt_profile']))."...</div>"; }
					 $msg.="</div>  
				 </div>"; 
            echo $msg;
        }
        $i++; 
}


public function ajax_load_more_tab(){  
	$limit = $_REQUEST['id'];
	$data['res'] = $this->Prof_model->load_more_tab($limit);
	// echo'<pre>';print_r($data['res']);die;

	           $i = 0;  
                foreach ($data['res'] as $row){  
                    $pro_post_imge = explode(',', $row['imge']); 
                    $pro_alt_title = explode(',', $row['alt_title']);  
					$avg_rate = round($row['rating']);  
             
				$msg="<div class='col-xl-3 col-lg-3 col-md-4  col-sm-6 col-6 my-3'>
					<div class='girl-profile-thumb available-book'> 
						  <div class='pic'>
							 <div class='media_icon'>
							  <div class='i-1 i-img'>
								 <div class='i1-svg'>
								    <div class='ico-center'>
									<i class='icon-heart cust-heart' aria-hidden='true'></i>
									<span class='mtop'>".$row['p_type']."</span>
								    </div>
								 </div>
							  </div>
							  <a href='<?php echo base_url(); ?>escorts/".$row['title']."/".$row['id']."'>
							  <div class='profile-category'><a href='".base_url()."escorts/".$row['title']."/". $row['id']."'><strong>Hooker Girls</strong></a>
							  </div>
							 </div>
							  <a href='".base_url()."escorts/".$row['title']."/".$row['id']."'>
								 <img class='lazyload' data-src='".base_url().'uploads/profile/'.$pro_post_imge[0]."' src='https://res.cloudinary.com/esrvb/image/upload/f_auto/loading/profile_loading.svg' alt='".$pro_alt_title[0]."'>
							  </a>
							 <div class='ribbon'>
								<div class='txt'>Available</div>
							 </div>
						  </div> 
					   </a>
					</div>
					<div class='name card-ft mb-2'>
					   <div class='name ml-2 ml-md-3'>".$row['title']."</div>
					   <div class='text-left ml-2 ml-md-3'>
						  <ul class='rateus'>";
								 if(!empty($avg_rate)){ 
									for($i=0;$i<$avg_rate;$i++){ $msg.="
									<li><svg class='img-rate' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' focusable='false' data-prefix='fas' data-icon='star' role='img' viewBox='0 0 576 512'>
									<path fill='currentColor' d='M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z'></path></svg></li>
									"; } }else { $msg.="									<li>Not Rated</li>   
							   "; } $msg.="
						  </ul>
					   </div>";
					   if(!empty($row['abt_profile'])){ 
						$msg.="<div class='nationality mt-2 px-2 px-md-3 py-3'>".$this->get_words(strip_tags($row['abt_profile']))."...</div>"; }
					 $msg.="</div>  
				 </div>"; 
            echo $msg;
        }
        $i++; 
}


public function ajax_load_more_mobile(){  
	$limit = $_REQUEST['id'];
	$data['res'] = $this->Prof_model->load_more_mob($limit);
	// echo'<pre>';print_r($data['res']);die;

	$i = 0;  
	foreach ($data['res'] as $row){  
		$pro_post_imge = explode(',', $row['imge']); 
		$pro_alt_title = explode(',', $row['alt_title']);  
		$avg_rate = round($row['rating']);  
 
	$msg="<div class='col-xl-3 col-md-4  col-sm-6 col-6 my-3'>
		<div class='girl-profile-thumb available-book'> 
			  <div class='pic'>
				 <div class='media_icon'>
				  <div class='i-1 i-img'>
					 <div class='i1-svg'>
					  <div class='ico-center'>
						<i class='icon-heart cust-heart' aria-hidden='true'></i>
						<span class='mtop'>".$row['p_type']."</span>
					   </div>
					 </div>
				  </div>
				  <a href='<?php echo base_url(); ?>escorts/".$row['title']."/".$row['id']."'>
				  <div class='profile-category'><a href='".base_url()."escorts/".$row['title']."/". $row['id']."'><strong>Hooker Girls</strong></a>
				  </div>
				 </div>
				  <a href='".base_url()."escorts/".$row['title']."/".$row['id']."'>
					 <img class='lazyload' data-src='".base_url().'uploads/profile/'.$pro_post_imge[0]."' src='https://res.cloudinary.com/esrvb/image/upload/f_auto/loading/profile_loading.svg' alt='".$pro_alt_title[0]."'>
				  </a>
				 <div class='ribbon'>
					<div class='txt'>Available</div>
				 </div>
			  </div> 
		   </a>
		</div>
		<div class='name card-ft mb-2'>
		   <div class='name ml-2 ml-md-3'>".$row['title']."</div>
		   <div class='text-left ml-2 ml-md-3'>
			  <ul class='rateus'>";
					 if(!empty($avg_rate)){ 
						for($i=0;$i<$avg_rate;$i++){ $msg.="
						<li><svg class='img-rate' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' focusable='false' data-prefix='fas' data-icon='star' role='img' viewBox='0 0 576 512'>
						<path fill='currentColor' d='M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z'></path></svg></li>
						"; } }else { $msg.="									<li>Not Rated</li>   
				   "; } $msg.="
			  </ul>
		   </div>";
		   if(!empty($row['abt_profile'])){ 
			$msg.="<div class='nationality mt-2 px-2 px-md-3 py-3'>".$this->get_words(strip_tags($row['abt_profile']))."...</div>"; }
		 $msg.="</div>  
	 </div>"; 
	echo $msg;
	}
	$i++;
}

	




public function subscribe(){
	if(!empty($_POST['email'])){
		$email = $_POST['email'];
		$data = array( 
			'subs_email' =>$email,   
			'added_date' => date('Y-m-d H:i:s') 
		);
		$res=$this->Subscribe_model->subscriber_add($data);
		if(!empty($res)){
			echo 'true';
		}else{
           echo 'false';
		}
	}
}




// search field 
public function search(){
if(!empty($_GET['srch'])){
	 $srch = $_GET['srch'];
	$data['srch_res'] = $this->Prof_model->search_rec($srch);  
	$data['all_prof'] = $this->Prof_model->get_all_profiles();
	$data['all_cat']=$this->Category_model->cat_list();
	$data['all_loc']=$this->Location_model->get_loc_list();
		if(empty($data['srch_res'][0]['title'])){
			$data = array( 
				'search_term' =>$srch,   
				'search_date' => date('Y-m-d H:i:s') 
			);
			$this->Search_model->collect_search($data);
			$data['srch_res'] = $this->Prof_model->search_rec($srch);  
			$data['all_prof'] = $this->Prof_model->get_all_profiles();
			$data['all_cat']=$this->Category_model->cat_list();
			$data['all_loc']=$this->Location_model->get_loc_list();
		}

	$this->load->view("includes/header",$data); 
	$this->load->view("search");
	$this->load->view("includes/footer");
  }
}

function red_light_area(){
	$data['row'] = $this->Metadetails_model->get_meta_list($this->uri->segment(1));
	$this->load->view("includes/header",$data); 
	$this->load->view("red-light-area-bangalore");
	$this->load->view("includes/footer");
}


}


		

		