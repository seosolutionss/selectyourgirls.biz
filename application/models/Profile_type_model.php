<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_type_model extends CI_Model 
{
    
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function ptype_ins($data)
	{
		 $this->db->insert('profile_type',$data);

         return true;
	}

    public function get_ptype_list()
    {
        $query = $this->db->get('profile_type');

        return $query->result_array();
    }


    public function view_ptype($id)
    {
        $this->db->where('id',$id);

        $query = $this->db->get('profile_type');

        return $query->result_array();
    }


    public function upd_ptype($data,$id)
    {
         $this->db->where('id',$id);

         $query = $this->db->update('profile_type',$data);

         //echo $this->db->last_query(); die;

         return true;
    }


    public function del_ptype($id)
    {
        $this->db->where('id',$id);

        $query = $this->db->delete('profile_type');

        return true;
    }


   
    


	
}
