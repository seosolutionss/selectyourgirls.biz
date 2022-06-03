
<script src="//cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

      Edit Video

        

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Edit Video</li>

      </ol>

    </section>

     <?php //echo '<pre>';print_r($res);?>

    <?php 

        foreach($res as $val)

        {

    ?> 

    <form name="edit_video" id="edit_video" method="POST" action="<?php echo base_url(); ?>admin/update_video"  enctype="multipart/form-data">

    

    <div class="container">

  

    <label for="last name"><b>Video Title:</b></label>

    <input type="text" class="form-control" name="vid_title" value="<?php echo $val['video_title'];?>" required>

    <br/>



    <label for="last name"><b>Video Image:</b></label>

    <input type="file" name="vid_imge" id="vid_imge" />

    <img src="<?php echo base_url(); ?>uploads/video/<?php echo $val['video_imge']; ?>" width="50" height="50" />

    <br/>



    <label for="last name"><b>Video Alt title:</b></label>

    <input type="text" name="vid_alt_title" class="form-control" id="vid_alt_title" value="<?php echo $val['video_alt_title']; ?>" />  

    <br/>



    <label for="last name"><b>Video Link:</b></label>

    <input type="text" name="vid_link" id="vid_link" class="form-control" value="<?php echo $val['video_link']; ?>" />  

    <br/>
  
    <label for="last name"><b>Video Desc:</b></label>

<textarea class="form-control" name="vid_desc" id="vid_desc" required><?php echo $val['video_desc'];?></textarea>

<br/>

    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $val['video_id']; ?>" />

    <button type="submit" class="btn btn-default" name="submit" value="Update">Update</button>

  </div>

  </form>

  <?php } ?>

   

  </div>

  <!-- /.content-wrapper -->

  <script> 
    CKEDITOR.replace('vid_desc');
  </script>

 



