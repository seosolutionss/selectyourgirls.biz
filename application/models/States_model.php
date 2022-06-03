<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class States_model extends CI_Model 
{
    
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function state_ins($data)
	{
		 $this->db->insert('states',$data);

         return true;
	}

    public function get_state_list()
    {
        $query = $this->db->get('states');

        return $query->result_array();
    }


    public function view_state($id)
    {
        $this->db->where('id',$id);

        $query = $this->db->get('states');

        return $query->result_array();
    }


    public function upd_state($data,$id)
    {
         $this->db->where('id',$id);

         $query = $this->db->update('states',$data);

         //echo $this->db->last_query(); die;

         return true;
    }


    public function del_state($id)
    {
        $this->db->where('id',$id);

        $query = $this->db->delete('states');

        return true;
    }

    public function get_states()
    {
        $query = $this->db->get('states');
        
        return $query->result_array();
    }
   
    


	
}
