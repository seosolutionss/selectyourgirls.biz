  <script src="//cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Category
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Category</li>
      </ol>
    </section>
     <?php //echo '<pre>';print_r($res);?>
    <form name="add_cat" id="add_cat" method="POST" action=""  enctype="multipart/form-data"/>
    
    <div class="container">
  
    <label for="last name"><b>Title:</b></label>
    <input class="form-control" type="text"  name="title" value="" required>
    <br/>

    <label for="last name"><b>Description:</b></label>
    <textarea name="cat_des" id="cat_des" rows="10" cols="80"></textarea>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
      CKEDITOR.replace( 'cat_des' );
    </script>
    <br/>

    <label for="last name"><b>Category Image:</b></label>
    <input type="file"  name="cat_img" value="">
    <br/>


    <label for="last name"><b>Category alt Title:</b></label>
    <input type="text"  name="cat_alt_title" value="" class="form-control">
    <br/>

    <label for="last name"><b>Category Detail Image:</b></label>
    <input type="file"  name="cat_dt_img" value="">
    <br/>

    <label for="last name"><b>Category Detail alt Title:</b></label>
    <input type="text"  name="cat_dt_alt_title" value="" class="form-control">
    <br/>


    <button type="submit" class="btn btn-default" name="submit" value="Add">Add</button>
  </div>
  </form>
  
   
  </div>
  <!-- /.content-wrapper -->

 

