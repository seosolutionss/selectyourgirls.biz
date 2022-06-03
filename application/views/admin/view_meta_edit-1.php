
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Meta
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Meta</li>
      </ol>
    </section>
     
    <form name="edit_meta" id="edit_meta" method="POST" action="<?php echo base_url(); ?>Meta/update"  enctype="multipart/form-data" />
    <?php //echo '<pre>';print_r($res); ?>
    <?php  foreach($res as $val) { ?>
    <div class="container">
  
    <label for="last name"><b>Page:</b></label>
    <select class="form-control" name="pg_id" id="pg_id">
      <option value="">--Select Page--</option>
      <?php 
            foreach($get_pages as $val_page)
            { 
      ?>
      <option value="<?php echo $val_page['id'];?>"><?php echo $val_page['title']; ?></option>
     <?php } ?>
     <script>
        document.getElementById('pg_id').value="<?php echo $val['page_id']; ?>";
     </script>
    </select>
    <br/>
    <div id="tit">
    <?php 
        if($val['page_id']==3)
        {  
    ?>
    <label for='last name' id='label_title'><b>Location Title:</b></label>
    <select class="form-control" name='title_id' id='title_id'>
      <option value=''>--Select Title--</option>
      
     <?php 
          foreach($loc as $val_loc) 
          { 
     ?>
     <option value="<?php echo $val_loc['id']; ?>"><?php echo $val_loc['loc_title']; ?></option>
     <?php } ?>
      <script>
         document.getElementById('title_id').value="<?php echo $val['title_id']; ?>";
      </script>      
    </select>
    <br/>
   <?php } ?>


   <?php 
        if($val['page_id']==4)
        {  
    ?>
    <label for='last name' id='label_title'><b>Profile Title:</b></label>
    <select  class="form-control" name='title_id' id='title_id'>
      <option value=''>--Select Title--</option>
      
     <?php 
          foreach($profile as $val_pro) 
          { 
     ?>
     <option value="<?php echo $val_pro['id']; ?>"><?php echo $val_pro['title']; ?></option>
     <?php } ?>
      <script>
         document.getElementById('title_id').value="<?php echo $val['title_id']; ?>";
      </script>      
    </select>
    <br/>
   <?php } ?>

    <?php 
        if($val['page_id']==5)
        {  
    ?>
    <label for='last name' id='label_title'><b>Blog Title:</b></label>
    <select class="form-control" name='title_id' id='title_id'>
      <option value=''>--Select Title--</option>
      
     <?php 
          foreach($blog as $val_blog) 
          { 
     ?>
     <option value="<?php echo $val_blog['id']; ?>"><?php echo $val_blog['blog_title']; ?></option>
     <?php } ?>
      <script>
         document.getElementById('title_id').value="<?php echo $val['title_id']; ?>";
      </script>      
    </select>
    <br/>
   <?php } ?>

   <?php 
        if($val['page_id']==6)
        {  
    ?>
    <label for='last name' id='label_title'><b>Category Title:</b></label>
    <select class="form-control" name='title_id' id='title_id'>
      <option value=''>--Select Title--</option>
      
     <?php 
          foreach($category as $val_cat) 
          { 
     ?>
     <option value="<?php echo $val_cat['id']; ?>"><?php echo $val_cat['cat_title']; ?></option>
     <?php } ?>
      <script>
         document.getElementById('title_id').value="<?php echo $val['title_id']; ?>";
      </script>      
    </select>
    <br/>
   <?php } ?>
   </div> 
   

    <label for="last name"><b>Meta title:</b></label>
    <input class="form-control" type="text"  name="meta_title" value="<?php echo $val['meta_title']; ?>" required>
    <br/>


    <label for="last name"><b>Meta Description:</b></label>
    <textarea class="form-control" name="meta_des" id="meta_des"  cols="30" rows="5" required><?php echo $val['meta_des']; ?></textarea>
    <br/>
    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $val['id']; ?>" />
    <button type="submit" class="btn btn-default" name="submit" value="Update">Update</button>
  </div>
  <?php }  ?>
  </form>
  
   
  </div>
  <!-- /.content-wrapper -->

 

