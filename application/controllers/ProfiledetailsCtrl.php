<?php 
defined('BASEPATH') or exit('No direct script access allowed'); 
class ProfiledetailsCtrl extends CI_Controller{ 

	public function __construct(){ 
		parent::__construct(); 
		$this->load->model('Metadetails_model'); 
		$this->load->model('Prof_model'); 
		$this->load->model('Reviews_model'); 
		$this->load->model('Location_model'); 

		$this->load->model('Category_model');

	}
 

	public function load(){ 
		$pg_url = $this->uri->segment(1);
		$title = str_replace("-",' ',$this->uri->segment(2));
		$tit_id = $this->uri->segment(3); 
		$limit = 12; 
		$data['all_prof'] = $this->Prof_model->get_all_profiles();
		$data['get_loc']=$this->Location_model->get_loc_list();
		$data['get_cat']=$this->Category_model->cat_list();
		$data['row'] = $this->Metadetails_model->get_meta_list($pg_url,$tit_id); 
		$data['result']=$this->Prof_model->get_list_data($title,$tit_id);
		$data['loc_list']  = $this->Location_model->get_loc_list();
		// echo '<pre/>';print_r($data['loc_list']);die;
		if(count($data['result'])<=0){
			$this->output->set_status_header('404');
			$this->load->view('error');
		}else{ 
		$data['res']  = $this->Prof_model->posts_list($limit); 
		$data['rivws']  = $this->Reviews_model->reviews_post_list($tit_id); 

        $this->load->view("includes/header",$data); 
		$this->load->view('profiledetails',$data); 
		$this->load->view("includes/footer");  
		 }  
		

	}

	public function getprev()
	{
		//  print_r("heelo"); die;
		if (empty($this->input->post('id'))) {
			redirect(base_url());
		} else {
			$this->load->model('Prof_model');
			$res = $this->Prof_model->get_prev($this->input->post('id'));
			foreach ($res->result() as $row) {
				echo $row->id . ',' . $row->title;
			}
		}
	}
	public function getnext()
	{
		// print_r("heelo"); die;
		if (empty($this->input->post('id'))) {
			redirect(base_url());
		} else {
			$this->load->model('Prof_model');
			$res = $this->Prof_model->get_next($this->input->post('id'));
			foreach ($res->result() as $row) {
				echo $row->id . ',' . $row->title;
			}
		}
	}



	public function ajax_review()

	{

		//print_r($_REQUEST);die;

		date_default_timezone_set('Asia/Calcutta');



		extract($_REQUEST);



		$data= array(	

                   'name'=>$name,	

                   'email'=>$email,

                   'content'=>$content,

                   'rating'=>$rating,

                   'post_id'=>$post_id,

                   'created_at'=>date('Y-m-d H:i:s')

		        );

        $res = $this->Reviews_model->review_ins($data);



        $rev_list = $this->Reviews_model->reviews_pro_list($res);

        



        foreach($rev_list as $rev_list_val)

        {

        $rev_msg = "<p>Name:".$rev_list_val['name']."</p>

                    <p>Email:".$rev_list_val['email']."</p>

                    <p>content:".$rev_list_val['content']."</p>

                    <p>rating:<ul class='rating-stars flex' >";

                                   for($i=0;$i < $rev_list_val['rating'];$i++) { 

                                                              $rev_msg .="<li>

                                                               <svg class='img-rate' xmlns='http://www.w3.org/2000/svg' 

                                                               aria-hidden='true' focusable='false' data-prefix='fas' data-icon='star' role='img' viewBox='0 0 576 512'>

                                                                  <path fill='currentColor' d='M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z'></path>

                                                               </svg>

                                                            </li>";

                                                            }

                                                                                                               

                                                   $rev_msg .="</ul></p>";

                    $rev_msg .= "<p>Date:".date('Y-m-d',strtotime($rev_list_val['created_at']))."</p>";

        }

       



        echo $rev_msg;



	}

 }







