<!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Add Video

        

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Add Video</li>

      </ol>

    </section>

     <?php //echo '<pre>';print_r($res);?>

    <form name="add_video" id="add_video" method="POST" action=""  enctype="multipart/form-data"/>

    

    <div class="container">

  

    <label for="last name"><b>Video Title:</b></label>

    <input type="text" class="form-control" name="vid_title" value="" required>

    <br/>



    <label for="last name"><b>Video Image:</b></label>

    <input type="file" name="vid_imge" id="vid_imge" />

    <br/>



    <label for="last name"><b>Video Alt title:</b></label>

    <input type="text" name="vid_alt_title" class="form-control" id="vid_alt_title"/>  

    <br/>



    <label for="last name"><b>Video Link:</b></label>

    <input type="text" name="vid_link" id="vid_link" class="form-control"/>  

    <br/>

    <label for="last name"><b>Video Desc:</b></label>

    <input type="text" class="form-control" name="vid_desc" value="" required>

    <br/>

    

    <button type="submit" class="btn btn-default" name="submit" value="Add">Add</button>

  </div>

  </form>

  

   

  </div>

  <!-- /.content-wrapper -->



 



