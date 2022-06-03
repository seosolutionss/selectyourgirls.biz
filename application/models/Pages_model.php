<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pages_model extends CI_Model 

{

    

	public function __construct()

	{

		parent::__construct();

		$this->load->database();

	}





	public function page_add($data)

	{

		 $this->db->insert('pages',$data);
         return true;

	}





    public function pages_list()

    {

        $query = $this->db->get('pages');



        return $query->result_array();

    }





    public function get_page_list($edit_id)

    {

        $this->db->where('id',$edit_id);



        $query = $this->db->get('pages');



        return $query->result_array();

    }





    public function page_update($data,$upd_id)

    {

        $this->db->where('id',$upd_id);



        $query = $this->db->update('pages',$data);





        //echo $this->db->last_query(); die;



        return true;

    }





    public function page_del($del_id)

    {

         $this->db->where('id',$del_id);



         $query = $this->db->delete('pages');



         return true;

    }





	

}

