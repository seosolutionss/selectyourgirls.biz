
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Post
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Post</li>
      </ol>
    </section>
     <?php //echo '<pre>';print_r($res);?>
    <form name="add_post" id="add_post" method="POST" action=""  enctype="multipart/form-data"/>
    
    <div class="container">
  
    <label for="last name"><b>Title:</b></label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="title" value="" required>
    <br/>

    <label for="last name"><b>Description:</b></label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="des" value="" required/>
    <br/>

    <label for="last name"><b>Image:</b></label>
    <input type="file" name="pht[]" multiple/>  
    <br/>
    
    <label for="last name"><b>Alt title tag:</b></label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="alt_title" value="">
    <br/>

    <label for="last name"><b>Age:</b></label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="age" value="">
    <br/>

    <label for="last name"><b>height:</b></label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="ht" value="">
    <br/>

    <label for="last name"><b>Category:</b></label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="cat" value="">
    <br/>

    <label for="last name"><b>Language:</b></label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="">
    <br/>
    
    <label for="last name"><b>Big Image:</b></label>
    <input type="file" name="b_img"/>  
    <br/>

    <button type="submit" class="btn btn-primary" name="submit" value="Add">Add Profile</button>
  </div>
  </form>
  
   
  </div>
  <!-- /.content-wrapper -->

 

