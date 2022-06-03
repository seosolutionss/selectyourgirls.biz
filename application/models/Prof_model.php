<?php



defined('BASEPATH') or exit('No direct script access allowed');







class Prof_model extends CI_Model



{







    public function __construct()



    {

      

        parent::__construct();



        $this->load->database();

    }











    public function post_add($data) 



    {



        $this->db->insert('profile_post', $data);







        return true;

    }











    public function posts_list($limit=''){ 
        $this->db->select('*'); 
        $this->db->from('profile_post'); 
        if(!empty($limit)){    
         $this->db->limit($limit,2,4); 
        }  
        $this->db->order_by('rand()');
        $query = $this->db->get();  
        return $query->result_array(); 
    }



    public function postslist_with_catloc_limran($limit=''){ 
        $this->db->select('profile_post.*,reviews.post_id,avg(reviews.rating) as rating,category.cat_title,location.loc_title,states.state_name,profile_type.p_type'); 
        $this->db->from('profile_post'); 
        $this->db->join('reviews','profile_post.id = reviews.post_id','left'); 
        $this->db->join('location','profile_post.availability = location.id','left'); 
        $this->db->join('category','profile_post.category = category.id','left'); 
        $this->db->join('states','profile_post.avbl_st = states.id','left'); 
        $this->db->join('profile_type','profile_post.pro_type = profile_type.id','left'); 
        if(!empty($limit)){  
         $this->db->group_by('id');   
         $this->db->limit($limit);  
        }

        
        

        $query = $this->db->get();



        //echo $this->db->last_query(); die; 

        

        return $query->result_array();

    }

   
    // public function posts_list($limit='')



    // {

    //     $this->db->select('profile_post.*, location.loc_kw');

    //     $this->db->from('profile_post');

    //     $this->db->join('location','location.id=profile_post.availability', 'left');
    //     if(!empty($limit))

    //     { 

    //      $this->db->order_by('rand()');   

    //      $this->db->limit($limit);

    //     }

        

    //     $query = $this->db->get();



    //     //echo $this->db->last_query(); die; 

        

    //     return $query->result_array();

    // }









    public function get_post_list($edit_id)

    {



        $this->db->where('id', $edit_id);

        $query = $this->db->get('profile_post');

        return $query->result_array();

    }





    function get_list()

    {

        $q= $this->db->get('profile_post');

       //echo '<pre>'; print_r($q->result_array());die;

         //echo $this->db->last_query(); die;

        //print_r($q->result_array());die;

        return $q->result_array();

    }





    public function post_update($data, $upd_id)

    {



        $this->db->where('id', $upd_id);







        $query = $this->db->update('profile_post', $data);



        return true;

    }











    public function post_del($del_id)



    {



        $this->db->where('id', $del_id);



        $query = $this->db->delete('profile_post');



        return true;

    }



    public function get_list_data($title,$tit_id){


// echo $tit_id.$title;die;
       

        $this->db->select('*');

        // $this->db->from('profile_post');

        // $this->db->where('id', $tit_id);

        // $this->db->join('location','profile_post.availability = location.id');

        // $this->db->join('category','profile_post.category = category.id');

        // // echo $this->db->last_query(); die;

        // $query = $this->db->get();

    

        // return $query->result_array();

        

        // $this->db->select('profile_post.*,category.cat_title,location.loc_title');  

        $this->db->from('profile_post');

       

        // $this->db->join('location','profile_post.availability = location.id');

        // $this->db->join('category','profile_post.category = category.id');

        $this->db->where(array('profile_post.id'=>$tit_id,'title'=>$title));

        // echo $this->db->last_query(); die;

        $query = $this->db->get();

        return $query->result_array();



    }

    // public function get_list_data($pro_id)

    // {



    //     $this->db->where('id', $pro_id);

    //     $query = $this->db->get('profile_post');

    

    //     return $query->result_array();

    // }

     // public function get_list_names_data($data){



    //     $this->db->where('id',$data);

    //     $q=$this->db->get('profiles');

     // public function get_list_names_data($data){



    //     $this->db->where('id',$data);

    //     $q=$this->db->get('profiles');





    public function get_pro_review_rating()

    {



        $this->db->select('profile_post.*,reviews.post_id,avg(reviews.rating) as rating,location.loc_title');



        $this->db->from('profile_post');



        $this->db->join('reviews','profile_post.id = reviews.post_id','left');



        $this->db->join('location','profile_post.availability = location.id','left');



        $this->db->group_by('title');



        $query = $this->db->get();

        //echo $this->db->last_query(); die;

            //echo '<pre>'; print_r($query->result_array());die;

        return $query->result_array();



    }



public function zero_to_ten_profiles(){

    $this->db->select('profile_post.*,reviews.post_id,avg(reviews.rating) as rating,category.cat_title,location.loc_title');

    $this->db->from('profile_post');

    $this->db->join('reviews','profile_post.id = reviews.post_id','left');

    $this->db->join('location','profile_post.availability = location.id','left');

    $this->db->join('category','profile_post.category = category.id','left');

    $this->db->limit(10);

    $this->db->group_by('id');

    $query = $this->db->get();

    return $query->result_array();



}



public function ten_to_19_profiles(){

    $this->db->select('profile_post.*,category.cat_title,location.loc_title');

    $this->db->from('profile_post');

    $this->db->join('location','profile_post.availability = location.id','left');

    $this->db->join('category','profile_post.category = category.id','left');

    $this->db->limit(10, 10);

    $this->db->group_by('id');

    $query = $this->db->get();

    return $query->result_array();



}



public function twenty_to_30_profiles(){

    $this->db->select('profile_post.*,category.cat_title,location.loc_title');

    $this->db->from('profile_post');

    $this->db->join('location','profile_post.availability = location.id','left');

    $this->db->join('category','profile_post.category = category.id','left');

    $this->db->limit(10, 20);

    $this->db->group_by('id');

    $query = $this->db->get();

    return $query->result_array();



}

public function rest_profiles(){

    $this->db->select('profile_post.*,category.cat_title,location.loc_title');

    $this->db->from('profile_post');

    $this->db->join('location','profile_post.availability = location.id','left');

    $this->db->join('category','profile_post.category = category.id','left');

    $this->db->limit( 150, 30);

    $this->db->group_by('id');

    $query = $this->db->get();

    return $query->result_array();



}







    public function get_first_records()

    {

       //$sub_query = '(SELECT * FROM `profile_post` order by id asc limit 25) as profile_post';



        $this->db->select('profile_post.*,reviews.post_id,avg(reviews.rating) as rating,location.loc_title,category.cat_title');



        //$this->db->from( $sub_query);

        $this->db->from('profile_post');



        $this->db->join('reviews','profile_post.id = reviews.post_id','left');



        $this->db->join('location','profile_post.availability = location.id','left');

        $this->db->join('category','profile_post.category = category.id ','left');



        $this->db->group_by('id');



        $query = $this->db->get();

       //echo $this->db->last_query(); die;

            //echo '<pre>'; print_r($query->result_array());die;

        return $query->result_array();



    }



public function get_last_all_records()

    {

        $this->db->select('profile_post.*,reviews.post_id,avg(reviews.rating) as rating,location.loc_title');



        $this->db->from('profile_post');



        $this->db->join('reviews','profile_post.id = reviews.post_id','left');



        $this->db->join('location','profile_post.availability = location.id','left');



        $this->db->where('not find_in_set(profile_post.id,(select GROUP_CONCAT(profile_post.id) as id from (select * from profile_post order by profile_post.id asc limit 0,25) as profile_post))');



        $this->db->group_by('title');



        $query = $this->db->get();



       // echo $this->db->last_query(); die;



        return $query->result_array();

    }

























    // public function get_first_ten_records()

    // {

    //    $sub_query = '(SELECT * FROM `profile_post` order by id desc limit 10) as profile_post';



    //     $this->db->select('profile_post.*,reviews.post_id,avg(reviews.rating) as rating,location.loc_title');



    //     $this->db->from( $sub_query);



    //     $this->db->join('reviews','profile_post.id = reviews.post_id','left');



    //     $this->db->join('location','profile_post.availability = location.id','left');



    //     $this->db->group_by('id');



    //     $query = $this->db->get();

    //    //echo $this->db->last_query(); die;

    //       // echo '<pre>'; print_r($query->result_array());die;

    //     return $query->result_array();



    // }











    public  function rest_ten_records(){

      $arr=$this->db->query("SELECT COUNT(id) as counter FROM profile_post");

      #echo '<pre>'; print_r($arr->result_array());die;

     // echo $this->db->last_query(); die;

    foreach ($arr->result() as $row)

{

         $count=$row->counter;

} 

    

      $query = $this->db->query("SELECT * FROM profile_post LIMIT ".$count." OFFSET 10");

       //echo '<pre>'; print_r($query->result_array());die;



     return $query->result_array();

    }









public  function rest_ten_records1(){



$this->db->query("SELECT * FROM profile_post");

      #echo '<pre>'; print_r($arr->result_array());die;

   $query = $this->db->query("SELECT * FROM profile_post LIMIT 10");

       echo '<pre>'; print_r($query->result_array());die;

     return $query->result_array();

}



















   // public function get_pro_review_rating()

   //  {



   //      $this->db->select('profile_post.*,reviews.post_id,avg(reviews.rating) as rating');



   //      $this->db->from('profile_post');



   //      $this->db->join('reviews','profile_post.id = reviews.post_id','left');



   //      $this->db->group_by('title');



   //      $query = $this->db->get();

   //      //echo $this->db->last_query(); die;

   //          //echo '<pre>'; print_r($query->result_array());die;

   //      return $query->result_array();



   //  }



    public function fetch_likes($p_id)

    {

        $this->db->select('likes');



        $this->db->from('profile_post');



        $this->db->where('id',$p_id);



        $query = $this->db->get();



        //echo $this->db->last_query(); die;

       

        return $query->result_array();

    }





    public function likes_upd($data,$p_id)

    {



          $this->db->where('id',$p_id);



          $this->db->update('profile_post',$data);





          //echo $this->db->last_query(); die;



          return true;

    }







 public function fetch_dislikes($p_id)

    {

        $this->db->select('dislike'); 



        $this->db->from('profile_post');



        $this->db->where('id',$p_id);



        $query = $this->db->get();



        //echo $this->db->last_query(); die;

       

        return $query->result_array();

    }



     public function dislikes_upd($data,$p_id)

    {



          $this->db->where('id',$p_id);



          $this->db->update('profile_post',$data);





          //echo $this->db->last_query(); die;



          return true;

    }





    public function search_rec($search){ 
        $this->db->select('profile_post.*,reviews.post_id,avg(reviews.rating) as rating'); 
        $this->db->from('profile_post');  
        $this->db->join('reviews','profile_post.id = reviews.post_id','left');  
       $this->db->like('title',$search); 
       $query = $this->db->get();  
       return $query->result_array();  
    }





    function get_prev($id)
    {
        $this->db->select('MAX(id) as id');
        $this->db->where('id<', $id);
        $r = $this->db->get('profile_post');
        //print_r($r->result()); die;
        foreach ($r->result() as $val) {
            $eid = $val->id;
        }
        $this->db->where('id', $eid);
        $res = $this->db->get('profile_post');
        //    foreach($res->result() as $row){
        //        return $row->title;
        //    }
        return $res;
    }
    function get_next($id)
    {
        $this->db->select('MIN(id) as id');
        $this->db->where('id>', $id);
        $r = $this->db->get('profile_post');
        //print_r($r->result()); die;
        foreach ($r->result() as $val) {
            $eid = $val->id;
        }
        $this->db->where('id', $eid);
        $res = $this->db->get('profile_post');
        //    foreach($res->result() as $row){
        //        return $row->title;
        //    }
        return $res;
    }


    public function load_more_desc($start_id){   
        $this->db->select('profile_post.*,reviews.post_id,avg(reviews.rating) as rating,states.state_name,profile_type.p_type'); 
        $this->db->from('profile_post');  
        $this->db->join('reviews','profile_post.id = reviews.post_id','left');  
        $this->db->join('states','profile_post.avbl_st = states.id','left'); 
        $this->db->join('profile_type','profile_post.pro_type = profile_type.id','left'); 
         $this->db->limit(8,$start_id); 
         $this->db->group_by('id'); 
        $query = $this->db->get();  
        return $query->result_array(); 
    }

    public function load_more_tab($start_id){   
        $this->db->select('profile_post.*,reviews.post_id,avg(reviews.rating) as rating,states.state_name,profile_type.p_type'); 
        $this->db->from('profile_post');  
        $this->db->join('reviews','profile_post.id = reviews.post_id','left');  
        $this->db->join('states','profile_post.avbl_st = states.id','left'); 
        $this->db->join('profile_type','profile_post.pro_type = profile_type.id','left');;  
         $this->db->limit(6,$start_id); 
         $this->db->group_by('id'); 
        $query = $this->db->get();  
        return $query->result_array(); 
    }


    public function load_more_mob($start_id){    
        $this->db->select('profile_post.*,reviews.post_id,avg(reviews.rating) as rating,states.state_name,profile_type.p_type'); 
        $this->db->from('profile_post');  
        $this->db->join('reviews','profile_post.id = reviews.post_id','left');  
        $this->db->join('states','profile_post.avbl_st = states.id','left'); 
        $this->db->join('profile_type','profile_post.pro_type = profile_type.id','left');
         $this->db->limit(4,$start_id); 
         $this->db->group_by('id'); 
        $query = $this->db->get();  
        return $query->result_array(); 
    }

    public function get_all_profiles(){
        $this->db->select('*');
        $query = $this->db->get('profile_post');
         return $query->result_array();
    }
    
}