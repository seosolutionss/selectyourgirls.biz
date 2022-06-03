<script src="//cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Location
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Location</li>
      </ol>
    </section>
     <?php //echo '<pre>';print_r($res);?>
    <form name="add_loc" id="add_loc" method="POST" action=""  enctype="multipart/form-data"/>
    
    <div class="container">
  
    <label for="last name"><b>Title:</b></label>
    <input class="form-control" type="text"  name="title" value="" required>
    <br/>

    <label for="last name"><b>Description:</b></label>
    <textarea class="form-control" name="des" id="des" required></textarea>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
      CKEDITOR.replace('loc_des');
    </script>
    <br/>

    <label for="last name"><b>Image:</b></label>
    <input type="file" name="loc_img"/>  
    <br/>

    <label for="last name"><b>Image alt title:</b></label>
    <input type="text" name="alt_title" id="alt_title" value="" class="form-control"/>  
    <br/>
    
    <button type="submit" class="btn btn-default" name="submit" value="Add">Add</button>
  </div>
  </form>
  
   
  </div>
  <!-- /.content-wrapper -->

 

