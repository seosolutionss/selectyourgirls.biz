<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Subscribe_model extends CI_Model{  
	public function __construct(){ 
		parent::__construct(); 
		$this->load->database(); 
	}
  

	public function subscriber_add($data){ 
		 $this->db->insert('subscribe',$data);
         return true;

	}
 

}

