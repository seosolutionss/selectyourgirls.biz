

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Edit Reviews

        

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Reviews</li>

      </ol>

    </section>

     <?php //print_r($res);?>

    <form name="update_reviews" id="update_reviews" method="POST" action="<?php echo base_url(); ?>admin/update_review" >

    <?php foreach($res as $val) 
    {



      $modified_dt =  date('Y-m-d',strtotime($val['visited_date']));

    ?> 

    <div class="container">

    

    <label for="first name"><b>Name:</b></label>

    <input type="text"  class='form-control' name="fname" required value="<?php echo $val['name'];?>">

    <br/>

    

    <label for="last name"><b>Email:</b></label>

    <input type="email"  class='form-control' name="email" required value="<?php echo $val['email'];?>">

    <br/>



    



    <label for="first name"><b>Content:</b></label>

    <textarea cols="30" rows="5" required name="cont" class='form-control'><?php echo $val['content']; ?></textarea>

    <br/>



    <label for="first name"><b>Rating:</b></label>

    <input type="text" name="rating" id="rating"  class='form-control' value="<?php echo $val['rating']; ?>" >

    <br/>

    <input type="hidden" name="upd_id" id="upd_id" value="<?php echo $val['id']; ?>" />



    <button type="submit" class="btn btn-default" name="update" value="update">Update</button>

  </div>

  

  

   <?php } ?> 

   </form>

  </div>

  <!-- /.content-wrapper -->



 



