<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Videos_model extends CI_Model 

{

    

	public function __construct()

	{

		parent::__construct();

		$this->load->database();

	}





	public function video_ins($data)

	{

		 $this->db->insert('videos',$data);



         return true;

	}



    public function get_video_list()

    {

        $query = $this->db->get('videos');



        return $query->result_array();

    }





    public function view_videos($id)

    {

        $this->db->where('video_id',$id);



        $query = $this->db->get('videos');


//echo $this->db->last_query(); die;
        return $query->result_array();


    }





    public function upd_videos($data,$id)

    {

         $this->db->where('video_id',$id);



         $query = $this->db->update('videos',$data);



         //echo $this->db->last_query(); die;



         return true;

    }





    public function del_videos($id)

    {

        $this->db->where('video_id',$id);



        $query = $this->db->delete('videos');



        return true;

    }




public function get_list_data($title,$tit_id) {
        $query = $this->db->from('videos')->where(array('video_id'=>$tit_id,'video_title'=>$title))->get(); 
        return $query->result_array();
    }
   

    public function lim_vdo_list($limit=''){ 
        $this->db->select('*'); 
        $this->db->from('videos'); 
        if(!empty($limit)){    
         $this->db->limit($limit); 
        }  
        $query = $this->db->get();  
        return $query->result_array(); 
    }


}

