<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metadetails_model extends CI_Model 
{
    
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function meta_add($data)
	{
		 $this->db->insert('meta_tags',$data);

         return true;
	}


    public function meta_list()
    {
        $query = $this->db->get('meta_tags');

        return $query->result_array();
    }



    public function get_page()
    {
        $query = $this->db->get('pages');

        return $query->result_array();


    }


    public function get_location()
    {
        $query = $this->db->get('location');

        return $query->result_array();
    }


    public function get_profile()
    {
        $query = $this->db->get('profile_post');

        return $query->result_array();
    }


    public function get_blog()
    {
        $query = $this->db->get('blog');

        return $query->result_array();
    }


    public function get_category_list()
    {
        $query = $this->db->get('category');

        return $query->result_array();
    }

    public function get_video_list()
    {
        $query = $this->db->get('videos');

        return $query->result_array();
    }


    public function get_meta_list($pg_url,$tit_id='')
    {
        $this->db->select('*');
        $this->db->from('meta_tags');
        $this->db->join('pages','meta_tags.page_id = pages.id');
        $this->db->where('pages.page_url',$pg_url);
        if(!empty($tit_id))
        {
        $this->db->where('meta_tags.title_id',$tit_id);
        }
        $query = $this->db->get();

        //echo $this->db->last_query(); die;    
        return $query->result_array();

    }


    
 public function check_meta_description($pge_id,$tit_id)
 {
     $st = "page_id='$pge_id' and title_id='$tit_id'";
     $query = $this->db->from('meta_tags')->where($st)->get();

     //echo $this->db->last_query(); die;
     return $query->num_rows();
 }

    // public function get_list_names_data($data){

    //     $this->db->where('id',$data);
    //     $q=$this->db->get('profiles');

       
    //     return $q;
    // }
	
}
