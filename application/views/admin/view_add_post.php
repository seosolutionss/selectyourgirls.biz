

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Add Post
 

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Add Post</li>

      </ol>

    </section>

     <?php //echo '<pre>';print_r($res);?>

    <form name="add_post" id="add_post" method="POST" action=""  enctype="multipart/form-data">

    

    <div class="container">

  

    <label for="last name"><b>Title:</b></label>

    <input type="text" class="form-control" id="title"  name="title" value="" required>

    <br/>
    
    
    <label for="last name"><b>Available State:</b></label>

    <select name="avl_st[]" id="avl_st" class="form-control" multiple style="height: 400px;">
        <option value="">--Select--</option>
        <?php 
           foreach($gt_state as $gt_state_val)
           {
        
        ?>
        <option value="<?php echo $gt_state_val['id']; ?>"><?php echo $gt_state_val['state_name']; ?></option>
        <?php } ?>
    </select>
    
    <br/>



  <label for="last name"><b>Description:</b></label>

    <input type="text" class="form-control" id="des" name="des" value="" required/>

    <br/>
    
    
    <label for="last name"><b>About Profile:</b></label>

    <textarea name="abt_pro" id="abt_pro" class="form-control" required></textarea>

    <br/>



    <label for="last name"><b>Image:</b></label>

    <input type="file" name="pht[]" multiple/>  

    <br/>

    

    <label for="last name"><b>Alt title tag:</b></label>

    <input type="text" class="form-control" id="alt_title" name="alt_title" value="">

    <br/>



    <label for="last name"><b>Age:</b></label>

    <input type="text" class="form-control" id="age" name="age" value="">

    <br/>



    <label for="last name"><b>height:</b></label>

    <input type="text" class="form-control" id="ht" name="ht" value="">

    <br/>



    <label for="last name"><b>Available Category:</b></label>

    <select name="avl_cat[]" id="avl_cat" class="form-control" multiple style="height: 400px;">
        
        <option value="">--Select--</option>
        
        <?php
          // echo '<pre>'; print_r($gt_category);
            foreach($gt_cat as $gt_cat_val)
            {
        
        ?>
        <option value="<?php echo $gt_cat_val['id']; ?>"><?php echo $gt_cat_val['cat_title']; ?></option>
        
        <?php  } ?>
        
    </select>
    

    <br/>
    
    
    <label for="last name"><b>Available Location:</b></label>

    <select name="avl_loc[]" id="avl_loc" class="form-control" multiple style="height: 400px;">
        
        <option value="">--Select--</option>
        
        <?php
           
            foreach($gt_loc as $gt_loc_val)
            {
        
        ?>
        <option value="<?php echo $gt_loc_val['id']; ?>"><?php echo $gt_loc_val['loc_title']; ?></option>
        
        <?php  } ?>
        
    </select>
    

    <br/>



    <label for="last name"><b>Language:</b></label>

    <input type="text" class="form-control" id="lang" name="lang" value="">

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
        
        
    </select>

    <br/>
    
    <label for="last name"><b>Selfie Type:</b></label>

    <input type="text" class="form-control" id="sel_type" name="sel_type" value="">

    <br/>

    

    <label for="last name"><b>Big Image:</b></label>

    <input type="file" name="b_img"/>  

    <br/>


    <label for="last name"><b>Big Image alt title:</b></label>

    <input type="text" class="form-control" id="big_alt_title" name="big_alt_title" value="">

    <br/>


    <button type="submit" class="btn btn-primary" name="submit" value="Add">Add Profile</button>

  </div>

  </form>

  

   

  </div>

  <!-- /.content-wrapper -->



 



