

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Edit Post

        

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Edit Post</li>

      </ol>

    </section>

     <?php //echo '<pre>';print_r($res);?>

    <form name="edit_post" id="edit_post" method="POST" action="<?php echo base_url(); ?>admin/update_post"  enctype="multipart/form-data">

    <?php 

    foreach($res as $val)
    { 

      $photo = explode(",",$val['imge']);
      $pro_st = explode(',',$val['avbl_st']);
      $pro_cat = explode(',',$val['avbl_cat']);
      $pro_loc = explode(',',$val['avbl_loc']);

  
    ?>

    <div class="container">

  
    <label for="last name"><b>Title:</b></label>

    <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="<?php echo $val['title']; ?>" required>

    <br/>



    <label for="last name"><b>Description:</b></label>

    <input type="text"  class="form-control" name="des" value="<?php echo $val['description']; ?>" required/>

    <br/>
    
    
    <label for="last name"><b>Available State:</b></label>

    <select name="avl_st[]" id="avl_st" class="form-control" multiple style="height: 400px;">
        
        <option value="">--Select--</option>
        <?php 
            foreach($gt_state as $gt_state_val)
            {
        ?>
        <option value="<?php echo $gt_state_val['id']; ?>" <?php 
        foreach($pro_st as $pro_st_val ) { if($pro_st_val == $gt_state_val['id']) { echo 'selected';} } ?>><?php echo $gt_state_val['state_name']; ?></option>
        <?php } ?>
        
    </select>

    <br/>


    <label for="last name"><b>About Profile:</b></label>

    <textarea name="abt_pro" id="abt_pro" class="form-control" required><?php echo $val['abt_profile']; ?></textarea>

    <br/>
    

    <label for="last name"><b>Image:</b></label>

    <input type="file" name="pht[]" multiple/>

    <?php for($i=0;$i<count($photo);$i++) { 

    ?>  

    <img src="<?php echo base_url(); ?>uploads/profile/<?php echo $photo[$i]; ?>" width="50" height="50">

    <?php }  ?>

    <br/>

    

    <label for="last name"><b>Alt title tag:</b></label>

    <input type="text" class="form-control" id="exampleInputEmail1" name="alt_title" value="<?php echo $val['alt_title']; ?>">

    <br/>



    <label for="last name"><b>Age:</b></label>

    <input type="text" class="form-control" id="exampleInputEmail1" name="age" value="<?php echo $val['age']; ?>">

    <br/>



    <label for="last name"><b>height:</b></label>

    <input type="text" class="form-control" id="exampleInputEmail1"  name="ht" value="<?php echo $val['height']; ?>">

    <br/>


    <label for="last name"><b>Available Category:</b></label>

    <select name="avl_cat[]" id="avl_cat" class="form-control" multiple style="height: 400px;">
        
        <option value="">--Select--</option>
        <?php 
            foreach($gt_cat as $gt_cat_val)
            {
        ?>
        <option value="<?php echo $gt_cat_val['id']; ?>" <?php 
        foreach($pro_cat as $pro_cat_val ) { if($pro_cat_val == $gt_cat_val['id']) { echo 'selected';} } ?>><?php echo $gt_cat_val['cat_title']; ?></option>
        <?php } ?>
        
    </select>

    <br/> 
    
    
    <label for="last name"><b>Available Location:</b></label>

    <select name="avl_loc[]" id="avl_loc" class="form-control" multiple style="height: 400px;">
        
        <option value="">--Select--</option>
        <?php 
            foreach($gt_loc as $gt_loc_val)
            {
        ?>
        <option value="<?php echo $gt_loc_val['id']; ?>" <?php 
        foreach($pro_loc as $pro_loc_val ) { if($pro_loc_val == $gt_loc_val['id']) { echo 'selected';} } ?>><?php echo $gt_loc_val['loc_title']; ?></option>
        <?php } ?>
        
    </select>

    <br/> 
    



    <label for="last name"><b>Language:</b></label>

    <input type="text" class="form-control" id="exampleInputEmail1"  name="lang" value="<?php echo $val['language']; ?>">

    <br/>
    
    
    
   <label for="last name"><b>Profile Type:</b></label>

    <select name="p_type" id="p_type" class="form-control" >
        
         <option value="">--Select--</option>
        
         <?php
         
              //print_r($gt_ptype);
              foreach($gt_ptype as $gt_ptype_val)
              {
         
         ?>
         <option value="<?php echo $gt_ptype_val['id'];  ?>"><?php echo $gt_ptype_val['p_type'];  ?></option>
         
         <?php } ?>
        <script>
            document.getElementById('p_type').value="<?php echo $val['pro_type']; ?>";
        </script>
        
    </select>

    <br/>

    <label for="last name"><b>Selfie Type:</b></label>

    <input type="text" class="form-control" id="sel_type" name="sel_type" value="<?php echo $val['selfie_type']; ?>">

    <br/>

    <label for="last name"><b>Big Image:</b></label>

    <input type="file" name="b_img"/>

    <img src="<?php echo base_url(); ?>big_uploads/<?php echo $val['big_img']; ?>" width="50" height="50" />  

    <br/>

    <label for="last name"><b>Big Image alt title:</b></label>

    <input type="text" class="form-control" id="big_alt_title" name="big_alt_title" value="<?php echo $val['big_img_alt_title']; ?>">

    <br/>

    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $val['id']; ?>" />

    <button type="submit" class="btn btn-primary" name="update" value="Update">Update</button>

  </div>

 <?php } ?>

  </form>

  

   

  </div>

  <!-- /.content-wrapper -->



 



