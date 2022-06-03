
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Suggest Location
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Suggest Location</li>
      </ol>
    </section>
     <?php //echo '<pre>';print_r($res);?>

    <form name="edit_sug_loc" id="edit_sug_loc" method="POST" action="<?php echo base_url(); ?>admin/sugg_update"  enctype="multipart/form-data">
    <?php 
        foreach($res as $val) 
        { 
    ?>
    <div class="container">
  
    <label for="last name"><b>Location:</b></label>
    <input class="form-control" type="text"  name="st_name" value="<?php echo $val['loc_name'];?>" required>
    <br/>

   
    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $val['id']; ?>" />
    <button type="submit" class="btn btn-default" name="submit" value="Update">Update</button>
  </div>
  <?php } ?>
  </form>
  
   
  </div>
  <!-- /.content-wrapper -->

 

