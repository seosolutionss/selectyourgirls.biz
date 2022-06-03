<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model 
{
    
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function user_list()
	{
		$query = $this->db->get('users');

		return $query->result_array();
	}


	public function user_edit($edit_id)
	{
       $this->db->where('id',$edit_id);
       $query = $this->db->get('users');

       return $query->result_array();
	}


	public function user_update($upd_data,$edit_id)
	{
		$this->db->where('id',$edit_id);
		$query = $this->db->update('users',$upd_data);
        //echo $this->db->last_query(); die;
        return true;
	}

	public function user_delete($del_id)
	{
		$this->db->where('id',$del_id); 
        $this->db->delete('users');

        return true;
	}
	

	
	
}
