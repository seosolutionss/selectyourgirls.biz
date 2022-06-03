
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reviews
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Reviews</li>
      </ol>
    </section>
    <h5 class="text-center"><?php echo $this->session->flashdata('msg'); ?></h5>
    <table id="example" class="table table-striped table-bordered" style="width:100%;padding-left:1%;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Visited Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           
            <?php foreach($res as $val) { ?>
            <tr>
                <td><?php echo $val['name']; ?></td>
                <td><?php echo $val['email']; ?></td>
                <td><?php echo date('Y-m-d',strtotime($val['visited_date'])); ?></td>
                <td><a href="<?php echo base_url(); ?>reviews/edit/<?php echo $val['id']; ?>">Edit</a>/<a onclick="del_confirm('<?php echo $val['id']; ?>');" href="#">Delete</a></td>
            </tr>
            <?php } ?>
        </tbody>
        </table>   
  </div>
  <!-- /.content-wrapper -->

 <script>
   function del_confirm(val)
   {
         // alert(val);
       var con = confirm('Are you sure want to delete this user?');
       if(con==true)
       {
           window.location.href="<?php echo base_url(); ?>reviews/del/"+val;

       }else
       {

           return false;
       }  
   }
 </script>

