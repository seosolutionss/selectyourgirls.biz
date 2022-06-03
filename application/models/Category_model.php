<?php



defined('BASEPATH') or exit('No direct script access allowed');







class Category_model extends CI_Model



{







	public function __construct()



	{



		parent::__construct();



		$this->load->database();
	}







	public function cat_list()



	{



		$query = $this->db->get('category');







		return $query->result_array();
	}



	public function get_cat_list($limit = '')



	{

		$this->db->select('*');

		$this->db->from('category');

		if (!empty($limit)) {

			$this->db->order_by('rand()');

			$this->db->limit($limit);
		}



		$query = $this->db->get();



		//echo $this->db->last_query(); die; 



		return $query->result_array();
	}



	public function get_cat_limit($limit = '')



	{

		$this->db->select('*');

		$this->db->from('category');

		if (!empty($limit)) {

			//$this->db->order_by('rand()');   

			$this->db->limit($limit);
		}



		$query = $this->db->get();



		//echo $this->db->last_query(); die; 



		return $query->result_array();
	}



	public function cat_add($data)



	{



		$this->db->insert('category', $data);







		return true;
	}











	public function cat_edit($edit_id)



	{



		$this->db->where('id', $edit_id);







		$query = $this->db->get('category');







		return $query->result_array();
	}











	public function cat_upd($data, $upd_id)



	{



		$this->db->where('id', $upd_id);







		$query = $this->db->update('category', $data);







		return true;
	}











	public function cat_del($del_id)



	{



		$this->db->where('id', $del_id);







		$this->db->delete('category');







		return true;
	}





	public function get_list_data($title,$data)
	{



		$this->db->where(array('id'=>$data,'cat_title'=>$title));

		$query = $this->db->get('category');

		// echo $this->db->last_query(); die;

		return $query->result_array();
	}


	public function zero_to_ten_category()
	{
		$query = $this->db->from('category');
		// $this->db->limit(10);
		$this->db->group_by('id');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function ten_to_19_category()
	{
		$query = $this->db->from('category');
		$this->db->limit(10, 10);
		$this->db->group_by('id');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function rest_category()
	{
		$query = $this->db->from('category');
		$this->db->limit(1000, 20);
		$this->db->group_by('id');
		$query = $this->db->get();
		return $query->result_array();
	}


	public function get_category()
    {
        $this->db->select('id,trim(cat_title) cat_title');
        
        $this->db->from('category');
        
        $this->db->group_by('cat_title');
        
        $this->db->order_by('id','asc');
        
        $query = $this->db->get();
        
        //echo $this->db->last_query(); die;
        return $query->result_array();
    }
function get_all($table)
{
	return $this->db->get($table);
}
function get_cat($cat)
{
	$this->db->where('cat_title',$cat);
	return $this->db->get('category')->result_array();
}


	
}
