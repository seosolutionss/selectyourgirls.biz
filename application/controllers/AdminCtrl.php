<?php

class AdminCtrl extends CI_Controller

{





    public function __construct(){

        parent::__construct();

        $this->load->model('Meta_model');
        $this->load->model('Prof_model'); 
        $this->load->model('Category_model');
        $this->load->model('Sugg_model');
        $this->load->model('Location_model');
        $this->load->model('Blog_model');
        $this->load->model('Videos_model');
        $this->load->model('Profile_type_model');
        $this->load->model('Metadetails_model');
        $this->load->model('States_model');
        $this->load->model('Pages_model');

    }

    public function index()

    {

        $this->load->view('admin/view_login.php');

    }

    function check_session()

    {

        if (!$this->session->username)

            redirect(base_url());

    }

    public function dashboard()



    {

        $this->check_session();

        $this->load->view('admin/includes/header');



        $this->load->view('admin/includes/sidebar');



        $this->load->view('admin/view_dashboard');



        $this->load->view('admin/includes/footer');

    }



    //login

    public function login(){ 
        if ($this->input->post('submit')) {

            $name = $this->input->post('uname');

            $pwd = $this->input->post('pwd');

            $this->load->model('admin_model');

            $var = $this->admin_model->check_username_pwd($name, $pwd);

            if ($var == true) { 

                $this->session->set_userdata('username', $name);

                redirect(base_url() . 'admin/dashboard');

            } else { 

                redirect(base_url() . 'admin/login');

            }

        } else {

            redirect(base_url() . 'admin');

        }

    }



    //logout

    public function signout()

    {

        $this->check_session();

        $this->session->unset_userdata('username');

        redirect(base_url() . "admin");

    }



    //meta start

    public function meta(){

        $this->check_session();

        $this->load->model('meta_model');



        $metadata['res'] = $this->meta_model->get_meta_details();

        //$this->load->model('Metadetails_model');

        //$pagename['res1'] = $this->Metadetails_model->get_meta_list();

        $this->load->view('admin/includes/header');



        $this->load->view('admin/includes/sidebar');



        $this->load->view('admin/view_meta_list', $metadata);



        $this->load->view('admin/includes/footer');

    }



    public function add_meta()

    {

        $this->check_session();

        $this->load->model('meta_model');

        $data['get_pages'] = $this->Meta_model->get_page();

        //echo '<pre>';print_r($data['get_pages']);die;

        if (!empty($this->input->post('submit'))) {



            //print_r($this->input->post());



            extract($this->input->post());



            $data = array(

                'page_id' => $pg_id,

                'title_id' => $title_id,

                'meta_title' => $meta_title,

                'meta_des' => $meta_des,

                'added_date' => date('Y-m-d H:i:s')

            );



            $res = $this->Meta_model->meta_add($data);



            if ($res == true) {

                $this->session->set_flashdata('msg', 'Meta Added Successfully');

                redirect(base_url() . 'admin/meta');

            }

        }



        $this->load->view('admin/includes/header');



        $this->load->view('admin/includes/sidebar');



        $this->load->view('admin/view_add_meta', $data);



        $this->load->view('admin/includes/footer');

    }





    public function edit_meta($edit_id)

    {

        $this->check_session();

        $this->load->model('meta_model');



        $data['res'] = $this->meta_model->get_meta_list($edit_id);

        $data['get_pages'] = $this->meta_model->get_page();

        $data['loc'] = $this->meta_model->get_location();

        $data['blog'] = $this->Blog_model->get_blog_list();

        $data['profile'] = $this->meta_model->get_profile();

        $data['category'] = $this->meta_model->get_category_list();

        //echo '<pre>'; print_r($data['res']); die;



        $this->load->view('admin/includes/header');

        $this->load->view('admin/includes/sidebar');

        $this->load->view('admin/view_meta_edit', $data);

        $this->load->view('admin/includes/footer');

    }



    public function meta_update()

    {

        $this->check_session();

        if (!empty($_POST['submit'])) {

            extract($this->input->post());

            //print_r($this->input->post());

            if (!empty($title_id)) {

                $tit_id = $title_id;

            } else {

                $tit_id = "";

            }

            $data = array(

                'page_id' => $pg_id,

                'title_id' => $tit_id,

                'meta_title' => $meta_title,

                'meta_des' => $meta_des,

                'updated_date' => date('Y-m-d H:i:s')

            );

            $this->load->model('meta_model');

            $res = $this->meta_model->meta_update($data, $upd_id);



            if ($res == true) {

                $this->session->set_flashdata('msg', 'Meta Updated Succesfully');

                redirect(base_url() . 'admin/meta');

            }

        }

    }





    public function del_meta($del)

    {

        //$id=$this->uri->segment(3);

        $this->check_session();

        $this->load->model('Meta_model');

        $res = $this->Meta_model->meta_del($del);

        //echo '<pre>';print_r($del);die;

        if ($res == true) {

            $this->session->set_flashdata('msg', 'Meta Deleted Successfully');

            redirect(base_url() . 'admin/meta');

        }

    }





    public function ajax_loc()

    {

        $this->check_session();

        $res = $this->Meta_model->get_location();



        $pge_id = $this->input->post('pg_id');



        $msg = "<label for='last name' id='label_title'><b>Location Title:</b></label>

    <select name='title_id' id='title_id' class='form-control'  >

      <option value=''>--Select Title--</option>";



        foreach ($res as $val) {



            $cnt_meta_rows = $this->Meta_model->check_meta_description($pge_id, $val['id']);



            if ($cnt_meta_rows > 0) {

                $msg .= "<option value=" . $val['id'] . " disabled>" . $val['loc_title'] . "</option>";

            } else {

                $msg .= "<option value=" . $val['id'] . ">" . $val['loc_title'] . "</option>";

            }

        }

        $msg .= "</select>

    <br/>";

        echo $msg;

    }



    public function ajax_profile()



    {



        $this->check_session();



        $res = $this->Meta_model->get_profile();



        $pge_id = $this->input->post('pg_id');







        $msg = "<label for='last name' id='label_title'><b>Profile Title:</b></label>



      <select name='title_id' id='title_id' class='form-control' >



      <option value=''>--Select Title--</option>";



        foreach ($res as $val) {





            $cnt_meta_rows = $this->Meta_model->check_meta_description($pge_id, $val['id']);



            if ($cnt_meta_rows > 0) {

                $msg .= "<option value=" . $val['id'] . " disabled>" . $val['title'] . "</option>";

            } else {

                $msg .= "<option value=" . $val['id'] . ">" . $val['title'] . "</option>";

            }

        }



        $msg .= "</select>



    <br/>";



        echo $msg;

    }



    public function ajax_catgeory()

    {

        $this->check_session();

        $res = $this->Meta_model->get_category_list();



        $pge_id = $this->input->post('pg_id');



        $msg = "<label for='last name' id='label_title'><b>Category Title:</b></label>

      <select name='title_id' id='title_id' class='form-control' >

      <option value=''>--Select Title--</option>";



        foreach ($res as $val) {

            $cnt_meta_rows = $this->Meta_model->check_meta_description($pge_id, $val['id']);



            //echo $cnt_meta_rows; die;



            if ($cnt_meta_rows > 0) {

                $msg .= "<option value=" . $val['id'] . " disabled>" . $val['cat_title'] . "</option>";

            } else {

                $msg .= "<option value=" . $val['id'] . ">" . $val['cat_title'] . "</option>";

            }

        }



        $msg .= "</select>

               <br/>";



        echo $msg;

    }


    public function ajax_blog()

    {

        $this->check_session();

        $res = $this->Meta_model->get_blog();



        $pge_id = $this->input->post('pg_id');



        $msg = "<label for='last name' id='label_title'><b>Blog Title:</b></label>

      <select name='title_id' id='title_id' class='form-control' >

      <option value=''>--Select Title--</option>";



        foreach ($res as $val) {

            $cnt_meta_rows = $this->Meta_model->check_meta_description($pge_id, $val['id']);



            //echo $cnt_meta_rows; die;



            if ($cnt_meta_rows > 0) {

                $msg .= "<option value=" . $val['id'] . " disabled>" . $val['blog_title'] . "</option>";

            } else {

                $msg .= "<option value=" . $val['id'] . ">" . $val['blog_title'] . "</option>";

            }

        }



        $msg .= "</select>

               <br/>";



        echo $msg;

    }







    public function ajax_video()

    {

        $this->check_session();

        $res = $this->Meta_model->get_video_list();



        $pge_id = $this->input->post('pg_id');



        $msg = "<label for='last name' id='label_title'><b>Video Title:</b></label>

      <select name='title_id' id='title_id' class='form-control'>

      <option value=''>--Select Title--</option>";



        foreach ($res as $val) {



            $cnt_meta_rows = $this->Meta_model->check_meta_description($pge_id, $val['video_id']);



            if ($cnt_meta_rows > 0) {

                $msg .= "<option value=" . $val['video_id'] . " disabled>" . $val['video_title'] . "</option>";

            } else {

                $msg .= "<option value=" . $val['video_id'] . ">" . $val['video_title'] . "</option>";

            }

        }



        $msg .= "</select>

               <br/>";



        echo $msg;

    }





    //meta end



    //location start

    public function location()

    {

        $this->check_session();

        $this->load->model('Location_model');



        $locdata['res'] = $this->Location_model->get_loc_list();

        $this->load->view('admin/includes/header');



        $this->load->view('admin/includes/sidebar');



        $this->load->view('admin/view_loc_list', $locdata);



        $this->load->view('admin/includes/footer');

    }



    public function add_location(){

        $this->check_session();

        if (!empty($this->input->post('submit'))){

            // print_r($_FILES['loc_img']['name']); die;

            date_default_timezone_set('Asia/Calcutta');

            extract($this->input->post());  

             $config['upload_path'] = 'uploads/location';

          $config['allowed_types'] = 'jpg|gif|jpeg';

        //   $config['encrypt_name']  = TRUE; 



          $this->load->library('upload',$config);

          $this->load->initialize($config);

                if (!$this->upload->do_upload('loc_img')) {

                    //print_r($this->input->post());

                    $data = array(

                        'loc_title' => strtolower(trim($title)), 

                        'only_loc' => strtolower(trim($title)), 

                        'loc_des' => $des,

                        'img_alt_title' => $alt_title, 

                        'posted_date' => date('Y-m-d H:i:s')

                    );

                } else {



                    $location_imge = $this->upload->data('file_name');
                    


                    $data = array(

                        'loc_title' => strtolower(trim($title)), 

                        'only_loc' => strtolower(trim($title)),

                        'loc_des' => $des,

                        'loc_img' =>  $location_imge,

                        'img_alt_title' => $alt_title, 

                        'posted_date' => date('Y-m-d H:i:s')

                    );

                

            }





            //print_r($data);die;





            $res = $this->Location_model->loc_ins($data);



            if ($res == true) {

                $this->session->set_flashdata('msg', 'Location Added Sucessfully');

                redirect(base_url() . 'admin/location');

            }

        }

        $this->load->view('admin/includes/header');

        $this->load->view('admin/includes/sidebar');

        $this->load->view('admin/view_add_loc');

        $this->load->view('admin/includes/footer');

    }



    public function edit_location($id)

    {

        $this->check_session();

        $this->load->model('Location_model');

        $data['res'] = $this->Location_model->view_loc($id);



        $this->load->view('admin/includes/header');

        $this->load->view('admin/includes/sidebar');

        $this->load->view('admin/view_loc_edit', $data);

        $this->load->view('admin/includes/footer');

    }



    public function update_location(){
       
        $this->check_session();

        if (!empty($this->input->post('submit'))) {

            //print_r($this->input->post());

            extract($this->input->post());


            //print_r($_FILES);die;



            $cnt_files = count($_FILES['loc_img']['name']);



            for ($i = 0; $i < $cnt_files; $i++){



                $_FILES['files']['name'] = $_FILES['loc_img']['name'][$i];

                $_FILES['files']['type'] = $_FILES['loc_img']['type'][$i];

                $_FILES['files']['tmp_name'] = $_FILES['loc_img']['tmp_name'][$i];

                $_FILES['files']['error']    = $_FILES['loc_img']['error'][$i];

                $_FILES['files']['size']     = $_FILES['loc_img']['size'][$i]; 

                $config['upload_path'] = 'uploads/location';

                $config['allowed_types'] = 'jpg|jpeg|gif|png';

                // $config['encrypt_name']  = TRUE;



                $this->load->library('upload', $config);

                $this->upload->initialize($config);





                if (!$this->upload->do_upload('files')) {

                    $data = array(

                        'loc_title' => $title, 

                        'only_loc' => $onlyloc,

                        'loc_des' => $des,

                        'img_alt_title' => $alt_title, 

                        'updated_date' => date('Y-m-d H:i:s')

                    );

                } else {





                    $blo_img[] = $this->upload->data('file_name');



                    $loct_img  = implode(',', $blo_img);



                    $data = array(

                        'loc_title' => $title, 

                        'only_loc' => $onlyloc,

                        'loc_des' => $des,

                        'loc_img' => $loct_img,

                        'img_alt_title' => $alt_title, 

                        'updated_date' => date('Y-m-d H:i:s')

                    );

                }

            }
 
            $res = $this->Location_model->upd_loc($data, $upd_id); 

            if ($res == true) {

                $this->session->set_flashdata('msg', 'Location Updated Successfully');

                redirect(base_url() . 'admin/location');

            }

        }

    }

    public function del_location($id)

    {

        $this->check_session();

        $this->load->model('Location_model');

        $res = $this->Location_model->del_loc($id);



        if ($res == true) {

            $this->session->set_flashdata('msg', 'Location Deleted Successfully');

            redirect(base_url() . 'admin/location');

        }

    }







    //location end

    //profile start

    public function posts()

    {

        $this->check_session();

        $this->load->model('Prof_model');



        $profdata['res'] = $this->Prof_model->posts_list();

        $this->load->view('admin/includes/header');



        $this->load->view('admin/includes/sidebar');



        $this->load->view('admin/view_posts_list', $profdata);



        $this->load->view('admin/includes/footer');

    }



    public function add_post()

    {

        $this->check_session();

        $data['gt_state'] = $this->States_model->get_states();
      
        $data['gt_cat'] = $this->Category_model->get_category();
        
        $data['gt_loc'] = $this->Location_model->get_location();
        
        $data['gt_ptype'] = $this->Profile_type_model->get_ptype_list();

        if(!empty($this->input->post('submit')))
        {
           if(!empty($_FILES['pht']['name']))
           { 
              $res = $this->upload_files($_FILES['pht']);
           }
  
        //    if(!empty($_FILES['b_img']['name']))
        //    {
        //       $config['upload_path']   = 'uploads/profile';
        //       $config['allowed_types'] = 'jpg|gif|png';
              //$config['encrypt_name']  = TRUE; 
  
            //   $this->load->library('upload',$config,'big_imgs');
            //   $this->big_imgs->initialize($config);
  
            //   $big_upload = $this->big_imgs->do_upload('b_img');
  
            //   if(!$big_upload)
            //   {
                 
            //   }else
            //   {
            //      $big_imge = $this->big_imgs->data('file_name');
                //  $this->big_watermark($big_imge); 
        //       }
        //    }   
           
            //  echo $big_imge; die;
              if((!empty($_FILES['pht']['name']))){
                   
                  $pht = implode(",",$res); 
                  //echo $pht;
                  extract($this->input->post());
                  
                  $avbl_st = implode(',',$avl_st);
                  $avbl_cat = implode(',',$avl_cat);
                  $avbl_loc = implode(',',$avl_loc);
  
                  $data = array(
                            'title'=>strtolower(trim($title)),
                            'description'=>$des,
                            'imge'=>$pht,
                            'abt_profile'=>$abt_pro,
                            'alt_title'=>$alt_title,
                            'age'=>$age,
                            'height'=>$ht,
                            'language'=>$lang,
                            'avbl_st'=>$avbl_st,
                            'avbl_loc'=>$avbl_loc,
                            'avbl_cat'=>$avbl_cat,
                            'pro_type'=>$p_type,
                            'selfie_type'=>$sel_type,
                            // 'big_img'=>$big_imge,
                            'big_img_alt_title'=>$big_alt_title
                            );
  
                  $result = $this->Prof_model->post_add($data);
                  if($result==true)
                  {
                       $this->session->set_flashdata('msg','Post Added Successfully');
                       redirect(base_url()."admin/posts/postlist");
                  }
              }
           }




        $this->load->view('admin/includes/header');

        $this->load->view('admin/includes/sidebar');

        $this->load->view('admin/view_add_post', $data);

        $this->load->view('admin/includes/footer');

    }  

    public function edit_post($edit_id){
        $this->check_session(); 

        $data['res'] = $this->Prof_model->get_post_list($edit_id);
        $data['gt_state'] = $this->States_model->get_states();
      
        $data['gt_cat'] = $this->Category_model->get_category();
        
        $data['gt_loc'] = $this->Location_model->get_location();
        
        $data['gt_ptype'] = $this->Profile_type_model->get_ptype_list();


        $this->load->view('admin/includes/header');

        $this->load->view('admin/includes/sidebar');

        $this->load->view('admin/posts_edit', $data);

        $this->load->view('admin/includes/footer');

    }



    public function update_post(){

        $this->check_session();

        if (!empty($_POST['update'])) {

            extract($this->input->post());
            $aval_st = implode(',',$avl_st);
            $aval_cat = implode(',',$avl_cat);
            $aval_loc = implode(',',$avl_loc);
            // $cate_list = implode(',', $cate); 


            if (!empty($_FILES['pht']['name'][0])) {

                //print_r($_FILES); 

                $res = $this->upload_files($_FILES['pht']);


                
                $pht = implode(',', $res);



                extract($this->input->post());



                $data = array(

                            'title'=>$title,
                            'description'=>$des,
                            'imge'=>$pht,
                            'abt_profile'=>$abt_pro,
                            'alt_title'=>$alt_title,
                            'age'=>$age,
                            'height'=>$ht,
                            'language'=>$lang,
                            'avbl_st'=>$aval_st,
                            'avbl_loc'=>$aval_loc,
                            'avbl_cat'=>$aval_cat,
                            'pro_type'=>$p_type,
                            'selfie_type'=>$sel_type,
                            // 'big_img'=>$big_imge,
                            'big_img_alt_title'=>$big_alt_title

                );

            } else {

                $data = array(

                            'title'=>$title, 
                            'description'=>$des,
                            'abt_profile'=>$abt_pro,
                            'alt_title'=>$alt_title,
                            'age'=>$age,
                            'height'=>$ht,
                            'language'=>$lang,
                            'avbl_st'=>$aval_st,
                            'avbl_loc'=>$aval_loc,
                            'avbl_cat'=>$aval_cat,
                            'pro_type'=>$p_type,
                            'selfie_type'=>$sel_type,
                            // 'big_img'=>$big_imge,
                            'big_img_alt_title'=>$big_alt_title

                );

            }
  
            $result = $this->Prof_model->post_update($data, $upd_id);



            if ($result == true) {

                $this->session->set_flashdata('msg', 'Post Updated Successfully');

                redirect(base_url() . 'admin/posts');

            }

        }

    }



    public function del_post($del_id)  {

        $this->check_session();



        $this->load->model('Prof_model');

        $res = $this->Prof_model->post_del($del_id);



        if ($res == true) {

            $this->session->set_flashdata('msg', 'Profile Deleted Successfully');

            redirect(base_url() . 'admin/posts');

        }

    }
    private function upload_files($files)
  {
        $config['upload_path']   = 'uploads/profile';
        $config['allowed_types'] = 'jpg|gif|png';
        //$config['encrypt_name']  = TRUE; 
        
        

        $this->load->library('upload', $config);

        $images = array();

        foreach ($files['name'] as $key => $image) {
            $_FILES['pht[]']['name']= $files['name'][$key];
            $_FILES['pht[]']['type']= $files['type'][$key];
            $_FILES['pht[]']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['pht[]']['error']= $files['error'][$key];
            $_FILES['pht[]']['size']= $files['size'][$key];
    

            $this->upload->initialize($config);

               

            if ($this->upload->do_upload('pht[]')) {
                $images[] = $this->upload->data('file_name');
                $this->upload->data('file_name');
            } else {
                return false;
            }
        }

        return $images;
    }

    //Profile post end

    


    //category start

    public function category(){ 

        $this->check_session();

        $this->load->model('Category_model');



        $catdata['res'] = $this->Category_model->cat_list();

        $this->load->view('admin/includes/header');



        $this->load->view('admin/includes/sidebar');



        $this->load->view('admin/view_category', $catdata);



        $this->load->view('admin/includes/footer');

    }



    public function add_category()

    {

        $this->check_session();

        if (!empty($_POST['submit'])) {

            //print_r($_FILES); die;

            extract($this->input->post());



            if (!empty($_FILES['cat_img']['name'])) {



                $config['upload_path']   = 'uploads/category';

                $config['allowed_types'] = 'jpg|jpeg|gif|png';

                // $config['encrypt_name']  = TRUE;



                $this->load->library('upload', $config);

                $this->load->initialize($config);







                if (!$this->upload->do_upload('cat_img')) {

                } else {

                    $ct_img = $this->upload->data('file_name');

                }

            }



            if (!empty($_FILES['cat_dt_img']['name'])) {

                $config['upload_path'] = 'uploads/category';

                $config['allowed_types'] = 'jpg|jpeg|gif';

                // $config['encrypt_name']  = TRUE;



                $this->load->library('upload', $config, 'cat_det_img');

                $this->cat_det_img->initialize($config);



                if (!$this->cat_det_img->do_upload('cat_dt_img')) {

                } else {

                    $ct_dt_imge = $this->cat_det_img->data('file_name');

                }

            }



            $data = array(

                'cat_title' => strtolower(trim($title)), 

                'cat_des' => $cat_des,

                'cat_img' => $ct_img,

                'cat_alt_title' => $cat_alt_title,

                'cat_detail_alt_title' => $cat_dt_alt_title,

                'cat_detail_imge' => $ct_dt_imge, 

                'added_date' => date('Y-m-d H:i:s')

            );

            $this->load->model('Category_model');

            $res = $this->Category_model->cat_add($data);



            if ($res == true) {

                $this->session->set_flashdata('msg', 'Category added successfully');

                redirect(base_url() . 'admin/category');

            }

        }

        $this->load->view('admin/includes/header');

        $this->load->view('admin/includes/sidebar');

        $this->load->view('admin/view_add_cat');

        $this->load->view('admin/includes/footer');

    }



    public function edit_category($edit_id)

    {

        $this->check_session();

        $this->load->model('Category_model');

        $data['res'] = $this->Category_model->cat_edit($edit_id);



        $this->load->view('admin/includes/header');

        $this->load->view('admin/includes/sidebar');

        $this->load->view('admin/view_cat_edit', $data);

        $this->load->view('admin/includes/footer');

    }



    public function update_category()

    {

        $this->check_session();

        //

        if (!empty($this->input->post('submit'))) {

            //print_r($_FILES);die;

            extract($this->input->post());



            if (!empty($_FILES['cat_img']['name'])) {

                $config['upload_path']  = 'uploads/category';

                $config['allowed_types'] = 'jpg|jpeg|gif|png';

                // $config['encrypt_name']  = TRUE;



                $this->load->library('upload', $config);

                $this->load->initialize($config);



                if (!$this->upload->do_upload('cat_img')) {

                } else {

                    $ct_img = $this->upload->data('file_name');

                }

            }





            if (!empty($_FILES['cat_dt_img']['name'])) {



                $config['upload_path']  =  'uploads/category-details';

                $config['allowed_types'] = 'jpg|jpeg|gif';

                // $config['encrypt_name']  = TRUE;



                $this->load->library('upload', $config, 'cat_det_img');

                $this->cat_det_img->initialize($config);



                if (!$this->cat_det_img->do_upload('cat_dt_img')) {

                } else {

                    $ct_dt_imge = $this->cat_det_img->data('file_name');

                }

            }

            //echo $ct_img; die;

            if ((!empty($_FILES['cat_img']['name'])) && (!empty($_FILES['cat_dt_img']['name']))) {

                $data = array(

                    'cat_title' => $title, 

                    'cat_des' => $cat_des,

                    'cat_img' => $ct_img,

                    'cat_alt_title' => $cat_alt_title,

                    'cat_detail_alt_title' => $cat_dt_alt_title,

                    'cat_detail_imge' => $ct_dt_imge, 

                    'updated_date' => date('Y-m-d H:i:s')

                );

            } else if (!empty($_FILES['cat_img']['name'])) {

                $data = array(

                    'cat_title' => $title, 

                    'cat_des' => $cat_des,

                    'cat_img' => $ct_img,

                    'cat_alt_title' => $cat_alt_title,

                    'cat_detail_alt_title' => $cat_dt_alt_title, 

                    'updated_date' => date('Y-m-d H:i:s')

                );

            } else if (!empty($_FILES['cat_dt_img']['name'])) {

                $data = array(

                    'cat_title' => $title, 

                    'cat_des' => $cat_des,

                    'cat_alt_title' => $cat_alt_title,

                    'cat_detail_alt_title' => $cat_dt_alt_title,

                    'cat_detail_imge' => $ct_dt_imge, 

                    'updated_date' => date('Y-m-d H:i:s')

                );

            } else {

                $data = array(

                    'cat_title' => $title, 

                    'cat_des' => $cat_des,

                    'cat_alt_title' => $cat_alt_title,

                    'cat_detail_alt_title' => $cat_dt_alt_title, 

                    'updated_date' => date('Y-m-d H:i:s')

                );

            }



            $this->load->model('Category_model');

            $res = $this->Category_model->cat_upd($data, $upd_id);

            if ($res == true) {

                $this->session->set_flashdata('msg', 'Category Updated Succesfully');

                redirect(base_url() . 'admin/category');

            }

        }

    }



    public function del_category($del_id) {

        $this->check_session();

        $this->load->model('Category_model');

        $res = $this->Category_model->cat_del($del_id);



        if ($res == true) {

            $this->session->set_flashdata('msg', 'Category Deleted Successfully');

            redirect(base_url() . 'admin/category');

        }

    } 
    //category end





    //pages start

    public function pages(){

        $this->check_session();

        $this->load->model('Pages_model');



        $pagedata['res'] = $this->Pages_model->pages_list();

        $this->load->view('admin/includes/header');



        $this->load->view('admin/includes/sidebar');



        $this->load->view('admin/view_pages_list', $pagedata);



        $this->load->view('admin/includes/footer');

    }





    public function add_page() {

        $this->check_session();

        if (!empty($this->input->post('submit'))) {

            //print_r($this->input->post());

            extract($this->input->post());

            $data = array(

                'title' => strtolower(trim($title)),

                'page_url' => $url,

                'added_date' => date('Y-m-d H:i:s')

            );

            $this->load->model("Pages_model");

            $res = $this->Pages_model->page_add($data);

            if ($res == true) {

                $this->session->set_flashdata('msg', 'Page added Successfully');

                redirect(base_url() . 'admin/pages');

            }

        }

        $this->load->view('admin/includes/header');

        $this->load->view('admin/includes/sidebar');

        $this->load->view('admin/view_add_page');

        $this->load->view('admin/includes/footer');

    }

    public function page_edit($edit_id)



    {

        $this->check_session();



        $this->load->model("Pages_model");



        $data['res'] = $this->Pages_model->get_page_list($edit_id);



        $this->load->view('admin/includes/header');



        $this->load->view('admin/includes/sidebar');



        $this->load->view('admin/view_page_edit', $data);



        $this->load->view('admin/includes/footer');

    }



    public function update_page()



    {

        $this->check_session();

        $this->load->model("Pages_model");

        if (!empty($_POST['submit'])) {



            extract($this->input->post());



            //print_r($this->input->post());







            $data = array(



                'title' => $title,



                'page_url' => $url,



                'updated_date' => date('Y-m-d H:i:s')



            );







            $res = $this->Pages_model->page_update($data, $upd_id);







            if ($res == true) {



                $this->session->set_flashdata('msg', 'Page Updated Succesfully');



                redirect(base_url() . 'admin/pages');

            }

        }

    }
    public function del_page($del_id) {

        $this->check_session(); 

        $res = $this->Pages_model->page_del($del_id); 

        if ($res == true) { 
            $this->session->set_flashdata('msg', 'Page Deleted Successfully');

            redirect(base_url() . 'admin/pages');

        }

    }

    //pages end

    //reviews start



    public function reviews()

    {

        $this->check_session();

        $this->load->model('Reviews_model');



        $reviewsdata['res'] = $this->Reviews_model->reviews_list();



        $this->load->view('admin/includes/header');



        $this->load->view('admin/includes/sidebar');

        $this->load->view('admin/view_reviews', $reviewsdata);



        $this->load->view('admin/includes/footer');

    }



    public function reviews_edit($edit_id)



    {

        $this->check_session();



        $this->load->model("Reviews_model");



        $data['res'] = $this->Reviews_model->get_reviews_list($edit_id);



        $this->load->view('admin/includes/header');



        $this->load->view('admin/includes/sidebar');



        $this->load->view('admin/reviews_edit', $data);



        $this->load->view('admin/includes/footer');

    }





    public function update_review()

    {

        $this->check_session();

        //print_r($_POST);

        $this->load->model('Reviews_model');

        date_default_timezone_set('Asia/Calcutta');

        extract($this->input->post());



        $data = array(

            'name' => $fname,

            'email' => $email,

            'content' => $cont,

            'rating' => $rating,

            'visited_date' => date('Y-m-d H:i:s')

        );



        $res = $this->Reviews_model->reviews_upd($data, $upd_id);



        if ($res == true) {

            $this->session->set_flashdata('msg', 'Reviews Updated Successfully');

            redirect(base_url() . 'admin/reviews');

        }

    }



    public function del_reviews($del_id)

    {

        $this->check_session();



        $this->load->model('Reviews_model');

        $res = $this->Reviews_model->review_del($del_id);



        if ($res == true) {

            $this->session->set_flashdata('msg', 'Reviews Deleted Successfully');

            redirect(base_url() . 'admin/reviews');

        }

    }











    /*Videos Start*/



    public function videos()

    {





        $this->check_session();

        $data['res'] = $this->Videos_model->get_video_list();



        $this->load->view('admin/includes/header');



        $this->load->view('admin/includes/sidebar');



        $this->load->view('admin/view_video_list', $data);



        $this->load->view('admin/includes/footer');

    }





    public function add_video()

    {

        $this->check_session();

        if (!empty($this->input->post('submit'))) {

            //print_r($this->input->post());die;

            //print_r($_FILES); die;

            date_default_timezone_set('Asia/Calcutta');

            extract($this->input->post());



            $config['upload_path'] = 'uploads/video';

            $config['allowed_types'] = 'jpg|jpeg|png';

            // $config['encrypt_name']  = TRUE;

            $this->load->library('upload', $config);

            $this->upload->initialize($config);





            if (!$this->upload->do_upload('vid_imge')) {

                //echo $this->upload->display_errors();

            } else {

                $video_images = $this->upload->data('file_name');



                $data = array(

                    'video_title' => $vid_title,

                    'video_alt_title' => $vid_alt_title,

                    'video_imge' => $video_images,

                    'video_link' => $vid_link,

                    'video_desc' => $vid_desc,

                    'created_at' => date('Y-m-d H:i:s')

                );

            }



            $res = $this->Videos_model->video_ins($data);

            //print_r($res); die;

            if ($res == true) {

                $this->session->set_flashdata('msg', 'Video Link added Successfully');

                redirect(base_url() . 'admin/videos');

            }

        }



        $this->load->view('admin/includes/header');



        $this->load->view('admin/includes/sidebar');



        $this->load->view('admin/view_add_video');



        $this->load->view('admin/includes/footer');

    }



    public function edit_video($id)

    {



        // print_r($this->input->post());



        $this->check_session();



        $data['res'] = $this->Videos_model->view_videos($id);



        $this->load->view('admin/includes/header');



        $this->load->view('admin/includes/sidebar');



        $this->load->view('admin/view_edit_video', $data);



        $this->load->view('admin/includes/footer');

    }





    public function update_video()

    {



        $this->check_session();



        if (!empty($this->input->post('submit'))) {

            extract($this->input->post());



            $config['upload_path'] = 'uploads/video';

            $config['allowed_types'] = 'jpg|jpeg|png';

            // $config['encrypt_name']  = TRUE;

            $this->load->library('upload', $config);

            $this->upload->initialize($config);





            if (!$this->upload->do_upload('vid_imge')) {

                $data = array(

                    'video_title' => $vid_title,

                    'video_desc' => $vid_desc,

                    'video_alt_title' => $vid_alt_title,

                    'video_link' => $vid_link,

                    'updated_at' => date('Y-m-d H:i:s')

                );

            } else {

                $video_img = $this->upload->data('file_name');



                $data = array(

                    'video_title' => $vid_title,

                    'video_desc' => $vid_desc,

                    'video_alt_title' => $vid_alt_title,

                    'video_link' => $vid_link,

                    'video_imge' => $video_img,

                    'updated_at' => date('Y-m-d H:i:s')

                );

            }





            $res = $this->Videos_model->upd_videos($data, $upd_id);



            if ($res == true) {

                $this->session->set_flashdata('msg', 'Video Link Updated Successfully');

                redirect(base_url() . 'admin/videos');

            }

        }

    }





    public function del_video($del_id)

    {

        $this->check_session();

        $res = $this->Videos_model->del_videos($del_id);



        if ($res == true) {

            $this->session->set_flashdata('msg', 'Delete Video Succesfully');

            redirect(base_url() . 'admin/videos');

        }

    }



    /*Videos End*/

    // State start 

    public function States(){
        $this->check_session();
     $data['res'] =  $this->States_model->get_state_list();
     
     $this->load->view('admin/includes/header');
     $this->load->view('admin/includes/sidebar');
     $this->load->view('admin/view_states_list',$data);
     $this->load->view('admin/includes/footer');
  }
    public function add_state() {  
        $this->check_session();
      if(!empty($this->input->post('submit'))) {
             //print_r($this->input->post());
          date_default_timezone_set('Asia/Calcutta'); 
          extract($this->input->post());
         
          $data = array(
                     'state_name'=>$st_name,
                     'created_at'=>date('Y-m-d H:i:s')
                   );
                   
         $res = $this->States_model->state_ins($data);
         
         if($res == true)
         {
              $this->session->set_flashdata('msg','State added Successfully');
              redirect(base_url().'admin/States');
         }
      } 

      $this->load->view('admin/includes/header');
      $this->load->view('admin/includes/sidebar');
      $this->load->view('admin/view_add_states');
      $this->load->view('admin/includes/footer');
  }



  public function state_edit($id) {
    $this->check_session();
       $data['res'] = $this->States_model->view_state($id);

       $this->load->view('admin/includes/header');
       $this->load->view('admin/includes/sidebar');
       $this->load->view('admin/view_edit_states',$data);
       $this->load->view('admin/includes/footer');
  }


  public function state_update() {
    $this->check_session();
       if(!empty($this->input->post('submit'))){
            //print_r($this->input->post());
           date_default_timezone_set('Asia/Calcutta');
           extract($this->input->post());
           $data = array(
                        'state_name'=>$st_name,
                        'updated_at'=>date('Y-m-d h:i:s')
                        );
           
           $res = $this->States_model->upd_state($data,$upd_id);

           if($res==true)
           {
              $this->session->set_flashdata('msg','State Updated Successfully');
              redirect(base_url().'admin/States');
           }
       }
  }


  public function state_del($id) {
    $this->check_session();
      $res = $this->States_model->del_state($id);   

      if($res == true)
      {
          $this->session->set_flashdata('msg','State Deleted Successfully');
          redirect(base_url().'admin/States');
      }
  }
    // State end


    // profile type start   
    public function Profile_type(){
        $this->check_session();
       $data['res'] =  $this->Profile_type_model->get_ptype_list();
       
       $this->load->view('admin/includes/header');
       $this->load->view('admin/includes/sidebar');
       $this->load->view('admin/view_profile_type',$data);
       $this->load->view('admin/includes/footer');
    }

    public function add_pro_type(){
        $this->check_session();
        if(!empty($this->input->post('submit')))
        {
               //print_r($this->input->post());
            date_default_timezone_set('Asia/Calcutta'); 
            extract($this->input->post());
           
            $data = array(
                       'p_type'=>$ptype,
                       'created_at'=>date('Y-m-d H:i:s')
                     );
                     
           $res = $this->Profile_type_model->ptype_ins($data);
           
           if($res == true)
           {
                $this->session->set_flashdata('msg','Profile Type  added Successfully');
                redirect(base_url().'admin/Profile_type');
           }
        } 
  
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/sidebar');
        $this->load->view('admin/view_add_pro_type');
        $this->load->view('admin/includes/footer');
    } 
  
  
    public function edit_pro_type($id) {
        $this->check_session();
         $data['res'] = $this->Profile_type_model->view_ptype($id);
  
         $this->load->view('admin/includes/header');
         $this->load->view('admin/includes/sidebar');
         $this->load->view('admin/view_edit_pro_type',$data);
         $this->load->view('admin/includes/footer');
    }
  
  
    public function update_pro_type() {
        $this->check_session();
         if(!empty($this->input->post('submit')))
         {
             // print_r($this->input->post());
             date_default_timezone_set('Asia/Calcutta');    
             extract($this->input->post());
             $data = array(
                          'p_type'=>$ptype,
                          'updated_at'=>date('Y-m-d h:i:s')
                          );
             
             $res = $this->Profile_type_model->upd_ptype($data,$upd_id);
  
             if($res==true)
             {
                $this->session->set_flashdata('msg','Profile type Updated Successfully');
                redirect(base_url().'admin/Profile_type');
             }
         }
    }
  
  
    public function del_pro_type($id){
        $this->check_session();
        $res = $this->Profile_type_model->del_ptype($id); 
  
        if($res == true)
        {
            $this->session->set_flashdata('msg','Profile type Deleted Successfully');
            redirect(base_url().'admin/Profile_type');
        }
    }

    // profile type end 




// Blog starrt 
public function bloglist()
  {
    $this->check_session();
     $data['res'] =  $this->Blog_model->get_blog_list();
     
     $this->load->view('admin/includes/header');
     $this->load->view('admin/includes/sidebar');
     $this->load->view('admin/view_blog_list',$data);
     $this->load->view('admin/includes/footer');
  }
public function add_blog(){
    $this->check_session();
      if(!empty($this->input->post('submit')))
      {
             //print_r($this->input->post());
          date_default_timezone_set('Asia/Calcutta'); 
          extract($this->input->post());
          $config['upload_path'] = 'uploads/blog';
          $config['allowed_types'] = 'jpg|gif|jpeg';
          $config['encrypt_name']  = TRUE; 

          $this->load->library('upload',$config);
          $this->load->initialize($config);

          if(! $this->upload->do_upload('blog_img'))
          {
              $data = array(
                          'blog_title'=>strtolower(trim($title)),
                          'blog_des'=>$des,
                          'img_alt_title'=>$alt_title,
                          'posted_date'=>date('Y-m-d H:i:s')    
                           );
          }else
          {
             $blo_img = $this->upload->data('file_name');

             $data = array(
                          'blog_title'=>strtolower(trim($title)),
                          'blog_des'=>$des,
                          'blog_img'=>$blo_img,
                          'img_alt_title'=>$alt_title, 
                          'posted_date'=>date('Y-m-d H:i:s')    
                           );
          }

          $res = $this->Blog_model->blog_ins($data);

          if($res==true)
          {
             $this->session->set_flashdata('msg','Blog Added Sucessfully');
             redirect(base_url().'admin/bloglist');
          }       
      } 

      $this->load->view('admin/includes/header');
      $this->load->view('admin/includes/sidebar');
      $this->load->view('admin/view_add_blog');
      $this->load->view('admin/includes/footer');
  } 

  public function edit_blog($id)
  {$this->check_session();
       $data['res'] = $this->Blog_model->view_blog($id);

       $this->load->view('admin/includes/header');
       $this->load->view('admin/includes/sidebar');
       $this->load->view('admin/view_blog_edit',$data);
       $this->load->view('admin/includes/footer');
  }


  public function update_blog()
  {$this->check_session();
       if(!empty($this->input->post('submit')))
       { 
           extract($this->input->post());
           $config['upload_path'] = 'uploads/blog';
           $config['allowed_types'] = 'jpg|jpeg|gif';
           $config['encrypt_name']  = TRUE;

           $this->load->library('upload',$config);
           $this->upload->initialize($config);

           if(! $this->upload->do_upload('blog_img'))
           {
                $data = array(
                             'blog_title'=>$title,
                             'blog_des'=>$des,
                             'img_alt_title'=>$alt_title,
                             'updated_date'=>date('Y-m-d H:i:s')
                             );
           }else
           {
               $blo_img = $this->upload->data('file_name');
               $data = array(
                             'blog_title'=>$title,
                             'blog_des'=>$des,
                             'blog_img'=>$blo_img,
                             'img_alt_title'=>$alt_title, 
                             'updated_date'=>date('Y-m-d H:i:s')
                             );

           }

           $res = $this->Blog_model->upd_blog($data,$upd_id);

           if($res==true)
           {
              $this->session->set_flashdata('msg','Blog Updated Successfully');
              redirect(base_url().'admin/bloglist');
           }
       }
  }


  public function del_blog($id)
  {$this->check_session();
      $res = $this->Blog_model->del_blog($id);   

      if($res == true)
      {
          $this->session->set_flashdata('msg','Blog Deleted Successfully');
          redirect(base_url().'admin/bloglist');
      }
  } 
// Blog end




// Suggest_location  start
public function sugglist() {
    $this->check_session();
     $data['res'] =  $this->Sugg_model->get_sugg_list();
     
     $this->load->view('admin/includes/header');
     $this->load->view('admin/includes/sidebar');
     $this->load->view('admin/view_sugg_loc',$data);
     $this->load->view('admin/includes/footer');
  }


  public function sugg_edit($id)
  {$this->check_session();
       $data['res'] = $this->Sugg_model->view_sugg_loc($id);

       $this->load->view('admin/includes/header');
       $this->load->view('admin/includes/sidebar');
       $this->load->view('admin/view_edit_sugg_loc',$data);
       $this->load->view('admin/includes/footer');
  }


  public function sugg_update()
  {$this->check_session();
       if(!empty($this->input->post('submit')))
       {
            //print_r($this->input->post());
           date_default_timezone_set('Asia/Calcutta');    
           extract($this->input->post());
           $data = array(
                        'loc_name'=>$st_name,
                        'updated_at'=>date('Y-m-d h:i:s')
                        );
           
           $res = $this->Sugg_model->upd_sugg_loc($data,$upd_id);

           if($res==true)
           {
              $this->session->set_flashdata('msg','Suggested location Updated Successfully');
              redirect(base_url().'admin/sugglist');
           }
       }
  }


  public function sugg_del($id)
  {$this->check_session();
      $res = $this->Sugg_model->del_sugg_loc($id);   

      if($res == true)
      {
          $this->session->set_flashdata('msg','Suggested Location Deleted Successfully');
          redirect(base_url().'admin/sugglist');
      }
  } 
// Suggest_location  end

}

