
<style>
   <?php include('assets/css/loc-layer-1.css'); ?>
</style>
<style type="text/css">
   *,
   *:before,
   *:after {
      box-sizing: border-box
   }

   .pro-heading {
      text-align: center;
      border: 0;
      padding-top: 15px;
      margin-bottom: 0;

      font-weight: normal;
      color: #fca200
   }

   .pro-container {
      padding: 10px 10px;
      margin: 0;
      width: 80%;
      margin: 0 auto
   }

   ul.pro-row {
      list-style: none;
      display: flex;
      justify-content: center;
      flex-flow: wrap;
      padding: 0
   }

   li.pro-section {
      float: left;
      width: 18%;
      float: left
   }

   img.img-responsive.lazy {
      width: 100%
   }

   @media(min-width:300px) and (max-width:426px) {
      li.pro-section {
         padding: 7px;
         float: left;
         width: 50%
      }

      .pro-container {
         padding: 0;
         margin: 0;
         width: 100%
      }
   }

   @media(min-width:426px) and (max-width:769px) {
      li.pro-section {
         padding: 7px;
         float: left;
         width: 33.333%
      }

      .pro-container {
         padding: 0;
         margin: 0;
         width: 100%
      }
   }

   @media(min-width:769px) {
      li.pro-section {
         padding: 7px;
         float: left;
         width: 20%
      }

      .pro-container {
         padding: 10px;
         margin: 0;
         width: 90%;
         margin: 0 auto
      }
   }

   .catTitle {
      background: rgba(0, 0, 0, 0.7) none repeat scroll 0 0;
      bottom: 0;
      color: #fff;
      font-size: 17px;
      padding: 5px 0;
      position: absolute;
      text-align: center;
      text-transform: uppercase;
      width: 100%;
      font-weight: bold
   }

   .pro-name {
      position: relative;
      bottom: 5px
   }

   img#subscrive_imge {
      width: 100%;
   }

   .container-model {
      width: 80%;
      margin: 0 auto;
   }

   .secondary-text {

      color: #fff;
      font-size: 16px;
      /* text-align: justify; */
   }

   @media (max-width: 426px) {
      .container-model {
         width: 96%;
         margin: 0 auto;
      }

      .secondary-header {
         font-size: 18px;
      }

      .uk-container {
         padding-left: 0px;
         padding-right: 0px;
      }
   }

   .border-bottm-line {
      background: #ffffb9 none repeat scroll 0 0;
      height: 1px;
      margin: 10px auto 15px;
      width: 25%;
   }

   .title-model {
      font-size: 25px;
      color: #fca200;

      font-weight: normal;
   }

   .secondary-header {
      color: #fff;

      text-transform: uppercase;
      font-size: 25px;
      font-weight: normal;
      margin: 0;
      text-align: center;
      border-bottom: 1px solid #fff;
   }
</style>
<style>
   .category-model {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 11px 0px;
   }

   .row-model {
      width: 80%;
      display: flex;
      justify-content: center;
   }

   .text-model {
      width: 60%;
      float: left;
      padding: 5px;
   }

   .image-model {
      width: 40%;
      float: left;
      padding: 5px;
   }

   @media (min-width:300px) and (max-width:768px) {
      .text-model {
         width: 100%;
         float: left;
         padding: 5px;
      }

      .image-model {
         width: 100%;
         float: left;
         padding: 5px;
         text-align: center;
      }

      .row-model {
         width: 90%;
      }
   }

   @media (min-width:769px) and (max-width:1025px) {
      .row-model {
         width: 90%;
      }
   }

   .secondary-text p {

      color: #fff;
      font-size: 16px;
      /* text-align: justify; */
   }

   .loc_det_box h2 {
      color: #ffc107;
      font-weight: 900;
      font-size: 2rem;
      text-align: normal !important;
   }

   .main-heading-new {
      font-size: 38px;
      color: #ffc107;
      font-weight: 900;
      text-transform: uppercase;
   }

   .loc-head {
      background-color: #ab1010 !important;
   }

   .loc-head h4 {
      color: #fff !important;
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
   }

   .flex-letter {
      background: transparent !important;
   }

   @media screen and (max-width: 768px) {
      .loc_det_box h2 {
         font-size: 2rem;
      }

      .main-heading-new {
         font-size: 34px;
      }
   }
</style>




<style>
   .loc_det_box h2 {
      color: #f8f9fa !important;
      text-transform: uppercase;
      font-size: 21px;
      font-weight: 900;
   }
</style>
<div class="col-12 col-sm-12 col-md-12 col-lg-9">
         
<section class="panel">

<?php
foreach ($result as $loc) {
   $loc_image = explode(',', $loc['loc_img']);
   $loc_alt_title = explode(',', $loc['img_alt_title']);
?>
   <div class="container">
      <h1 class="main-heading text-warning">
         <a href="<?php echo base_url(); ?>location/<?php echo str_replace(' ', '-', $loc['loc_title']);  ?>/<?php echo $loc['id'];  ?>"><?php echo $loc['only_loc']; ?> <span class="text-light">Call Girls and Escorts</span></a>
      </h1>
      <div class="loc_det_box">
         <?php echo $loc['loc_des']; ?>
      </div>
   </div>
   <div class="category-model">
      <div class="row-model">
         <div class="image-model">
            <a href="<?php echo base_url(); ?>location/<?php echo str_replace(' ', '-', $loc['loc_title']);  ?>/<?php echo $loc['id'];  ?>">
               <img src="https://res.cloudinary.com/isabasu/image/upload/f_auto,w_385/imgs/loading-newloc.svg" data-src="<?php echo base_url(); ?>uploads/location/<?php if (!empty($loc_image[0])) {
                                                                                                                                                                        echo $loc_image[0];
                                                                                                                                                                     } ?>" alt="<?php if (!empty($loc_alt_title[0])) {
                                                                                    echo $loc_alt_title[0];
                                                                                 } ?>" class="img-fluid loc_det_img ls-is-cached lazyload social">
            </a>
         </div>
      </div>
   </div>

<?php } ?>

<style>
   .partners-item__thumb {
      position: relative;
      box-shadow: 0 5px 15px rgb(0 0 0 / 15%)
   }

   .lc-name {
      position: absolute;
      bottom: -2px;
      right: 0;
      z-index: 9;
      font-weight: 700;
      text-transform: uppercase;
      font-size: 12px;
      background: #810000;
      padding: 6px 11px;
      border-radius: 20px 0 0 20px;
      color: #fff;
   }
</style>
<div class="container">
   <h3 class="main-heading text-warning"> <?php echo $loc['loc_title']; ?><span class="text-light">See Available Escorts Below</span></h3>
   <div class="row">
      <?php
      $i = 0;
      $loc_kw_alt = array('Escorts', 'Escorts Service in', 'Escort', 'Call Girl', 'Independent Escorts', 'Escorts in', 'Call Girls', 'Independent Escort', 'VIP Escorts', 'Female Escorts', 'Escorts Agency', 'Best Escorts in');
      foreach ($res as $results) {
         $pro_post_imge = explode(',', $results['imge']);
         $pro_alt_title = explode(',', $results['alt_title']);
      ?>
         <div class="col-6 col-sm-4 col-md-3 mb-3">
            <a href="<?php echo base_url(); ?>escorts/<?php echo $results['title']; ?>/<?php echo $results['id']; ?>">
               <div class="partners-item__thumb">
                  <h5 class="lc-name"><span class="icon-heart mr-1"></span><?php echo $results['title']; ?></h5>
                  <img id="subscrive_imge" class="blink-image img-fluid lazyload rounded" src="https://res.cloudinary.com/isabasu/image/upload/f_auto,w_298/imgs/loading-newloc.svg" data-src="<?php echo base_url(); ?>uploads/profile/<?php echo $pro_post_imge[1]; ?>" alt="<?= $loc_kw_alt[$i++] . " " . $loc['only_loc']; ?>">
               </div>
            </a>
         </div>
      <?php } ?>
   </div>
</div>


</section>




<section class="body py-5">

<div class="container text-center">
   <h3 class="main-heading text-warning">OTHER Locations YOU MAY LIKE <span class="text-light"> Click the first letter of your desired location </span> </h3>
</div>

<div class="lettet-cont">
   <div class="flex-letter">
      <ul class="letter-inline">
         <?php foreach (range('a', 'z') as $i) { ?>
            <li><span class="char" onclick="char_loc(this);" data-id="<?php echo $i ?>"><?php echo $i ?></span></li>
         <?php } ?>
      </ul>
   </div>
</div>
<div class="escorst_categories">
   <div class="container">
      <div class="row" id="srch_location">
         <?php foreach ($lim_loc as $row) { ?>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 mb-3">
               <a href="<?php echo base_url(); ?>location/<?php echo str_replace(' ', '-', $row['loc_title']);  ?>/<?php echo $row['id'];  ?>">
                  <img id="myDiv" class="img-fluid rounded-top lazyload" src="https://res.cloudinary.com/isabasu/image/upload/f_auto,w_385/imgs/loading-newloc.svg" data-src="<?php echo base_url(); ?>uploads/location/<?php echo $row['loc_img'];  ?>" alt="<?php echo $row['img_alt_title'];  ?>">
               </a>
               <div class="loc-head rounded-bottom">
                  <a href="<?php echo base_url(); ?>location/<?php echo str_replace(' ', '-', $row['loc_title']);  ?>/<?php echo $row['id'];  ?>">
                     <h4 style="color: #ffc107;">
                        <?php echo $row['loc_title']; ?><br>
                     </h4>
                  </a>
               </div>
            </div>
         <?php } ?>
      </div>
      <div id="loc_ins_msg" style="text-align: center;font-size: 16px;margin-top: 15px;color:#ffffb9;"></div>
   </div>
</div>

</section>


<script>
$(document).ready(function() {
   var getFilterHeight = $('.location-filter-col').outerHeight() + 15;
   $('.default-outer.without-sidebars').css('padding-top', getFilterHeight + 'px');

   $('#locationSelect').change(function() {
      var redirectUrl = $(this).val();
      window.location = "<?php echo base_url() ?>" + redirectUrl;
   });

});

function char_loc(val_srch) {
   var loc_val = $(val_srch).data('id');
   $.ajax({
      type: "GET",
      url: "<?php echo base_url() ?>ajax-srch-location",
      data: "val=" + loc_val,
      beforeSend: function() {
         $('#loader').show();
      },
      success: function(res) {
         $('#srch_location').html(res);
      },
      complete: function() {
         $('#loader').hide();
      }
   });
}
</script>

<script>
//   $(function(){ 
$('#sug_loc').keyup(ValidateLocation);
$('#sugg_loc').submit(function(e) {
   e.preventDefault();
   if (ValidateLocation()) {

      $.ajax({
         type: "POST",
         url: "<?php echo base_url(); ?>ajax-ins-loc",
         data: $('#sugg_loc').serialize(),
         success: function(res) {
            $('#loc_ins_msg').fadeIn('slow');
            $('#loc_ins_msg').html(res);
            setTimeout(function() {
               $('#loc_ins_msg').fadeOut('slow');
            }, 5000);
            document.getElementById('sugg_loc').reset();
         }
      });
   }
});

function ValidateLocation() {
   var loc_name = $('#sug_loc').val();
   if (loc_name == "") {
      $('#err_msg').text('Please Enter Location');
      return false;
   } else {
      $('#err_msg').text('');
      return true;
   }
}

// });
</script>
      </div>
      </div>

   </div>
</section>
