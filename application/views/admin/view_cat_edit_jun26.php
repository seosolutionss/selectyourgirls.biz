  <script src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Category
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Category</li>
      </ol>
    </section>
     <?php //echo '<pre>';print_r($res);?>
    <form name="edit_cat" id="edit_cat" method="POST" action="<?php echo base_url('Category/update'); ?>"  enctype="multipart/form-data"/>
    <?php 
    foreach($res as $val) 
    { 
    ?>
    <div class="container">
  
    <label for="last name"><b>Title:</b></label>
    <input class="form-control" type="text"  name="title" value="<?php echo $val['cat_title']; ?>" required>
    <br/>

    <label for="last name"><b>Description:</b></label>
    <textarea name="cat_des" id="cat_des" rows="10" cols="80"><?php echo $val['cat_des']; ?></textarea>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
      CKEDITOR.replace('cat_des');
    </script>
    <br/>

    <label for="last name"><b>Category Image:</b></label>
    <input type="file"  name="cat_img" value="">
    <img src="<?php echo base_url(); ?>category_uploads/<?php echo $val['cat_img']; ?>" width="50" height="50">
    <br/>

    <label for="last name"><b>Category Detail Image:</b></label>
    <input type="file"  name="cat_dt_img" value="">
    <img src="<?php echo base_url(); ?>category_detail_uploads/<?php echo $val['cat_detail_imge']; ?>" width="50" height="50">
    <br/>

    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $val['id']; ?>" />
    <button type="submit" class="btn btn-default" name="submit" value="Update">Update</button>
  </div>
  <?php  } ?>
  </form>
  
   
  </div>
  <!-- /.content-wrapper -->

 

