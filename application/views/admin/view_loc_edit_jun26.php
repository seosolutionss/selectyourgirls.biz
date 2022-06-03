
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Location
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Location</li>
      </ol>
    </section>
     <?php //echo '<pre>';print_r($res);?>

    <form name="edit_loc" id="edit_loc" method="POST" action="<?php echo base_url(); ?>Location/update"  enctype="multipart/form-data"/>
    <?php 
        foreach($res as $val) 
        { 
    ?>
    <div class="container">
  
    <label for="last name"><b>Title:</b></label>
    <input class="form-control" type="text"  name="title" value="<?php echo $val['loc_title'];?>" required>
    <br/>

    <label for="last name"><b>Description:</b></label>
    <textarea class="form-control" name="des" id="des"><?php echo $val['loc_des'];?></textarea>
    <br/>

    <label for="last name"><b>Image:</b></label>
    <input type="file" name="loc_img"/>
    <img src="<?php echo base_url(); ?>location_uploads/<?php echo $val['loc_img']; ?>" width="50" height="50" />  
    <br/>
    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $val['id']; ?>" />
    <button type="submit" class="btn btn-default" name="submit" value="Update">Update</button>
  </div>
  <?php } ?>
  </form>
  
   
  </div>
  <!-- /.content-wrapper -->

 

