

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Edit User

        

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Users</li>

      </ol>

    </section>

     <?php //echo '<pre>';print_r($res);?>

    <form name="update_user" id="update_user" method="POST" action="" enctype="multipart/form-data" />

    <?php foreach($res as $val) 

    {

    ?> 

    <div class="container">

    

    <label for="last name"><b>First name:</b></label>

    <input type="text"  name="fname" required value="<?php echo $val['first_name'];?>" class="form-control">

    <br/>


    <label for="last name"><b>Last name:</b></label>

    <input type="text"  name="lname" required value="<?php echo $val['last_name'];?>" class="form-control">

    <br/>



    <label for="email"><b>Email:</b></label>

    <input type="email"  name="email" required value="<?php echo $val['email'];?>" class="form-control">

    <br/>



    <label for="first name"><b>Mobile:</b></label>

    <input type="tel"  name="mob" required  pattern="^\d{10}$"  minlength="10"  maxlength="10" value="<?php echo $val['mobile'];?>" class="form-control">

    <br/>


    

    <label for="first name"><b>User name:</b></label>

    <input type="text"  name="uname" id="uname"  value="<?php echo $val['user_name']; ?>" class="form-control" />

    <br/>



    <label for="first name"><b>Website:</b></label>

    <input type="text"  name="web_site" id="web_site"  value="<?php echo $val['website']; ?>"  class="form-control"/>

    <br/>


    <label for="first name"><b>Description:</b></label>

    <textarea name="des" id="des" class="form-control"><?php echo $val['description']; ?></textarea>

    <br/>



    <button type="submit" class="btn btn-default" name="update" value="update">Update</button>

  </div>

  </form>

  

   <?php } ?> 

  </div>

  <!-- /.content-wrapper -->



 



