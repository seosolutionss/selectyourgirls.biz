<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Admin_model extends CI_Model 

{

    

	public function __construct()

	{

		parent::__construct();

		$this->load->database();

	}

	



	 function check_username_pwd($uname,$pwd)

	{

		$pword = md5($pwd); 

		$this->db->where('admin_username',$uname);

		$this->db->where('admin_pwd',$pword);

		$query = $this->db->get('admin');

		//echo $query->num_rows(); die;

		if($query->num_rows()>0){
			return true;
		}else{
			return false;
		}



	}



	

}

