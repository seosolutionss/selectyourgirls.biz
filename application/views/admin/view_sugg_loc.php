
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Suggest Location
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Suggest Location</li>
      </ol>
    </section>
    <h5 class="text-center"><?php echo $this->session->flashdata('msg'); ?></h5>
   
    <?php //echo '<pre>';print_r($res);?>
    <table id="example" class="table table-striped table-bordered" style="width:100%;padding-left:1%;">
        <thead>
            <tr>
                <th>Location</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody> 
            <?php foreach($res as $val) { ?>
            <tr>
                <td><?php echo $val['loc_name']; ?></td>
                <td><?php echo $val['added_at']; ?></td>
                <td><a href="<?php echo base_url(); ?>admin/sugg_edit/<?php echo $val['id']; ?>">Edit</a>/<a onclick="del_confirm('<?php echo $val['id']; ?>');" href="#">Delete</a></td>
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
       var con = confirm('Are you sure want to delete this Suggest Location?');
       if(con==true)
       {
           window.location.href="<?php echo base_url(); ?>admin/sugg_del/"+val;

       }else
       {

           return false;
       }  
   }
 </script>

