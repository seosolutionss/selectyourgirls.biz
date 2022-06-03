<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sugg_model extends CI_Model 
{
    
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	

    public function get_sugg_list()
    {
        $query = $this->db->get('suggest_location');

        return $query->result_array();
    }


    public function view_sugg_loc($id)
    {
        $this->db->where('id',$id);

        $query = $this->db->get('suggest_location');

        return $query->result_array();
    }


    public function upd_sugg_loc($data,$id)
    {
         $this->db->where('id',$id);

         $query = $this->db->update('suggest_location',$data);

         //echo $this->db->last_query(); die;

         return true;
    }


    public function del_sugg_loc($id)
    {
        $this->db->where('id',$id);

        $query = $this->db->delete('suggest_location');

        return true;
    }


   
    


	
}
