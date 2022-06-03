<?php



defined('BASEPATH') OR exit('No direct script access allowed');







class Location_model extends CI_Model 



{



    



	public function __construct()



	{



		parent::__construct();



		$this->load->database();



	}











	public function loc_ins($data)



	{



		 $this->db->insert('location',$data);







         return true;



	}







    public function get_loc_list()



    {

        



        $query = $this->db->get('location');







        return $query->result_array();



    }



public function loc_list($limit='')



    {

        $this->db->select('*');

        $this->db->from('location');

        if(!empty($limit))

        { 

         $this->db->order_by('loc_title');   

         $this->db->limit($limit);

        }

        

        $query = $this->db->get();



        //echo $this->db->last_query(); die; 

        

        return $query->result_array();

    }



    public function get_loc_lim($limit='')



    {

        $this->db->select('*');

        $this->db->from('location');

        if(!empty($limit))

        { 

        // $this->db->order_by('rand()');   

         $this->db->limit($limit);

        }

        

        $query = $this->db->get();



        //echo $this->db->last_query(); die; 

        

        return $query->result_array();

    }



    public function view_loc($id)



    {



        $this->db->where('id',$id);







        $query = $this->db->get('location');







        return $query->result_array();



    }











    public function upd_loc($data,$id){


         $this->db->where('id',$id);







         $query = $this->db->update('location',$data);







         //echo $this->db->last_query(); die;







         return true;



    }











    public function del_loc($id)



    {



        $this->db->where('id',$id);







        $query = $this->db->delete('location');







        return true;



    }











   

public function get_list_data($title,$data){



        $this->db->where(array('id'=>$data,'loc_title'=>$title));

        $query = $this->db->get('location');

       // echo $this->db->last_query(); die;

        return $query->result_array();

    }

    




// serach locations 
public function srch_locs($val_srch){
    $this->db->select('*');
    $this->db->from('location');
    $this->db->like('loc_title',$val_srch, 'after');
    $query = $this->db->get();
    return $query->result_array();
}


// suggest location insert 
public function suggest_loc($data){
    $this->db->insert('suggest_location',$data);
    return true;
}

    
public function get_location()
    {
        $this->db->select('id,trim(loc_title) loc_title');
        
        $this->db->from('location');
        
        $this->db->group_by('loc_title');
        
        $this->db->order_by('id','asc');
        
        $query = $this->db->get();
        
        return $query->result_array();
        
        
    }
	



}



