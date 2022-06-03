
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Meta
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Meta</li>
      </ol>
    </section>
     
    <form name="add_meta" id="add_meta" method="POST" action=""  enctype="multipart/form-data"/>
    
    <div class="container">
  
    <label for="last name"><b>Page:</b></label>
    <select name="pg_id" id="pg_id">
      <option value="">--Select Page--</option>
      <?php 
            foreach($get_pages as $val_page)
            { 
      ?>
      <option value="<?php echo $val_page['id'];?>"><?php echo $val_page['title']; ?></option>
     <?php } ?>
    </select>
    <br/>
    <div id="tit"></div> 
    <label for="last name"><b>Meta title:</b></label>
    <input type="text" class="form-control" name="meta_title" value="" required>
    <br/>


    <label for="last name"><b>Meta Description:</b></label>
    <textarea class="form-control" name="meta_des" id="meta_des" cols="30" rows="5" required></textarea>
    <br/>

    <button type="submit" class="btn btn-default" name="submit" value="Add">Add</button>
  </div>
  </form>
  
   
  </div>
  <!-- /.content-wrapper -->

 
