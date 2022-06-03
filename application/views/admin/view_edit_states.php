
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit State
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit State</li>
      </ol>
    </section>
     <?php //echo '<pre>';print_r($res);?>

    <form name="edit_state" id="edit_state" method="POST" action="<?php echo base_url(); ?>admin/state_update"  enctype="multipart/form-data">
    <?php 
        foreach($res as $val) 
        { 
    ?>
    <div class="container">
  
    <label for="last name"><b>Title:</b></label>
    <input class="form-control" type="text"  name="st_name" value="<?php echo $val['state_name'];?>" required>
    <br/>

   
    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $val['id']; ?>" />
    <button type="submit" class="btn btn-default" name="submit" value="Update">Update</button>
  </div>
  <?php } ?>
  </form>
  
   
  </div>
  <!-- /.content-wrapper -->

 

