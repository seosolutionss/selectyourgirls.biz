<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Reviews_model extends CI_Model 

{

    

	public function __construct()

	{

		parent::__construct();

		$this->load->database();

	}



	public function reviews_list()

	{

		$query = $this->db->get('reviews');



		return $query->result_array();

	}



	public function get_reviews_list($edit_id)

	{

		$this->db->where('id',$edit_id);

		$query = $this->db->get('reviews');



		return $query->result_array();

	}



	public function reviews_upd($data,$upd_id)

	{

		 $this->db->where('id',$upd_id);

		 $query = $this->db->update('reviews',$data);



		 return true;

	}



	public function review_del($del_id)

 	{

 		$this->db->where('id',$del_id);

 		$this->db->delete('reviews');



 		return true;



	}


	public function review_ins($data)
	{

		$query = $this->db->insert('reviews',$data);


		return $this->db->insert_id();


	}


	public function reviews_pro_list($rev_id)
	{
		$this->db->where('id',$rev_id);

		$query = $this->db->get('reviews');


		//echo $this->db->last_query(); die;

		return $query->result_array();
	}


	public function reviews_post_list($post_id)
	{
        $this->db->where('post_id',$post_id);

        $query = $this->db->get('reviews');

        return $query->result_array();
	}





}

