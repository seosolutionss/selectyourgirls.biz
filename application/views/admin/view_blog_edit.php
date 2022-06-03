
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Blog
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Blog</li>
      </ol>
    </section>
     <?php //echo '<pre>';print_r($res);?>

    <form name="edit_blog" id="edit_blog" method="POST" action="<?php echo base_url(); ?>admin/update_blog"  enctype="multipart/form-data">
    <?php 
        foreach($res as $val) 
        { 
    ?>
    <div class="container">
  
    <label for="last name"><b>Title:</b></label>
    <input class="form-control" type="text"  name="title" value="<?php echo $val['blog_title'];?>" required>
    <br/>

    <label for="last name"><b>Description:</b></label>
    <textarea class="form-control" name="des" id="des"><?php echo $val['blog_des'];?></textarea>
    <br/>

    <label for="last name"><b>Image:</b></label>
    <input type="file" name="blog_img"/>
    <img src="<?php echo base_url(); ?>uploads/blog/<?php echo $val['blog_img']; ?>" width="50" height="50" />  
    <br/>

    <label for="last name"><b>Image alt title:</b></label>
    <input type="text" class="form-control" name="alt_title" value="<?php echo $val['img_alt_title']; ?>"/>
      
    <br/>
    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $val['id']; ?>" />
    <button type="submit" class="btn btn-default" name="submit" value="Update">Update</button>
  </div>
  <?php } ?>
  </form>
  
   
  </div>
  <!-- /.content-wrapper -->

 

