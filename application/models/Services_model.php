<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Services_model extends CI_Model 

{

    

	public function __construct()

	{

		parent::__construct();

		$this->load->database();

	}





	public function service_ins($data)

	{

		 $this->db->insert('services',$data);



         return true;

	}



    public function get_service_list()

    {

        $query = $this->db->get('services');



        return $query->result_array();

    }





    public function view_service($id)

    {

        $this->db->where('ser_id',$id);



        $query = $this->db->get('services');



        return $query->result_array();

    }





    public function upd_service($data,$id)

    {

         $this->db->where('ser_id',$id);



         $query = $this->db->update('services',$data);



         //echo $this->db->last_query(); die;



         return true;

    }





    public function del_service($id)

    {

        $this->db->where('ser_id',$id);



        $query = $this->db->delete('services');



        return true;

    }





   

    





	

}

