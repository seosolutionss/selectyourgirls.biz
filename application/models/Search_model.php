<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model{ 
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}


	 public function collect_search($data){
		$this->db->insert('collect_search',$data);
		return true;
	 }
	

	
	
}