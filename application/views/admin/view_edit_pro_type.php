
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Profile Type
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Profile Type</li>
      </ol>
    </section>
     <?php //echo '<pre>';print_r($res);?>

    <form name="edit_ptype" id="edit_ptype" method="POST" action="<?php echo base_url(); ?>admin/update_pro_type"  enctype="multipart/form-data">
    <?php 
        foreach($res as $val) 
        { 
    ?>
    <div class="container">
  
    <label for="last name"><b>Profile Type:</b></label>
    <input class="form-control" type="text"  name="ptype" value="<?php echo $val['p_type'];?>" required>
    <br/>

   
    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $val['id']; ?>" />
    <button type="submit" class="btn btn-default" name="submit" value="Update">Update</button>
  </div>
  <?php } ?>
  </form>
  
   
  </div>
  <!-- /.content-wrapper -->

 

