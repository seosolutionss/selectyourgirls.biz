
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Category
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Category</li>
      </ol>
    </section>
     <?php  //print_r($res);?>
    <form name="update_reviews" id="update_reviews" method="POST" action="<?php echo base_url(); ?>category/update" >
    <?php foreach($res as $val) 
    {
    ?> 
    <div class="container">
    
    <label for="first name"><b>Category name:</b></label>
    <input type="text"  name="fname" required value="<?php echo $val['category'];?>">
    <br/>
    
    <label for="last name"><b>Status:</b></label>
    <select name="status" id="status">
      <option value="">Select</option>
      <option value="1">Active</option>
      <option value="0">InActive</option>
      <script>
        
        document.getElementById('status').value="<?php echo $val['status']; ?>";
      </script>
    </select>  
    <br/>

   

   
    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $val['id']; ?>" />

    <button type="submit" class="btn btn-default" name="update" value="update">Update</button>
  </div>
  
  
   <?php } ?> 
   </form>
  </div>
  <!-- /.content-wrapper -->

 

