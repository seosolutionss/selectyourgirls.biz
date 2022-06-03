
<div class="col-12 col-sm-12 col-md-12 col-lg-9" id="block_281">


<div>
   <h1 class="main-heading text-warning mt-3"> <a href="<?php echo base_url().'escorts-location';?>"><strong>Mumbai Escort Locations</strong></a> -
   </h1>
   <p>Your selected call girl in Mumbai will be delighted to entertain you at your home, hotel, and an apartment. All our escorts are located within in Mumbai top city for both Incall and Outcall.
</p>
   <p>It's always a pleasure for our escorts to meet you at your own space. As we were available at every major area in Mumbai, booking our female escorts in Mumbai as outcall is an extremely easy thing.
</p>
   <p>Our incall locations are also located in all the regions which you can see in the below portraits.

</p>
</div>




<section class="py-5">
   <div class="container-fluid">

<h4 class="main-heading text-warning text-center"><span class="text-light"> Click the first letter of your desired location </span> </h4>

<div class="">
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
               <a href="<?php echo base_url(); ?>location/<?php echo trim(str_replace(' ', '-', $row['loc_title']));  ?>/<?php echo $row['id'];  ?>">
                  <img id="myDiv" class="img-fluid blur-up lazyload rounded-top" 
                  src="https://res.cloudinary.com/isabasu/image/upload/f_auto,w_385/imgs/loading-newloc.svg"
                  data-src="<?php echo base_url(); ?>uploads/location/<?php echo $row['loc_img'];  ?>" alt="<?php echo $row['img_alt_title'];  ?>">
               </a>
               <div class="loc-head rounded-bottom">
                  <a href="<?php echo base_url(); ?>location/<?php echo str_replace(' ', '-', $row['loc_title']);  ?>/<?php echo $row['id'];  ?>">
                     <h4>
                        <b><?php echo $row['loc_title']; ?></b><br>
                     </h4>
                  </a>
               </div>
            </div>
         <?php } ?>
      </div>
      <div id="loc_ins_msg" style="text-align: center;font-size: 16px;margin-top: 15px;color:#ffffb9;"></div>
   </div>
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
<style type="text/css">
   span.char {
      display: block;
      border: solid 1px grey;
      text-align: center;
      padding: 4px 0;
      text-transform: uppercase;
      font-size: 16px;
      font-weight: 400;
      border-radius: 6px;
      cursor: pointer;
      color: #fff;
      /* font-family: 'Francois One', sans-serif */
   }

   /* .flex-letter {
      background: black
   } */

   ul.letter-inline {
      list-style: none;
      padding: 0;
      display: flex;
      justify-content: center;
      flex-flow: wrap
   }

   .letter-inline li {
      width: 3%;
      float: left;
      padding: 5px
   }

   @media(min-width:300px) and (max-width:426px) {
      .letter-inline li {
         width: 16%
      }
   }

   @media(min-width:426px) and (max-width:769px) {
      .letter-inline li {
         width: 7%
      }
   }

   @media(min-width:769px) and (max-width:1025px) {
      .letter-inline li {
         width: 5%
      }
   }

   span.char:hover {
      color: #000;
      background: #fed061
   }

   *,
   *:before,
   *:after {
      box-sizing: border-box
   }

   .loc-heading {
      border: 0;
      padding-top: 15px;
      margin-bottom: 0;
      /* font-family: 'Francois One', sans-serif; */
      font-weight: normal;
      color: #ff6400
   }

   .loc-container {
      padding: 10px 10px;
      margin: 0;
      width: 80%;
      margin: 0 auto
   }

   div.loc-row {
      list-style: none;
      display: flex;
      justify-content: center;
      flex-flow: wrap;
      padding: 0
   }

   div.loc-section {
      float: left;
      width: 18%;
      float: left
   }

   img.img-responsive.lazy {
      width: 100%
   }

   @media(min-width:300px) and (max-width:426px) {
      div.loc-section {
         padding: 7px;
         float: left;
         width: 50%
      }

      .loc-container {
         padding: 0;
         margin: 0;
         width: 100%
      }
   }

   @media(min-width:426px) and (max-width:769px) {
      div.loc-section {
         padding: 7px;
         float: left;
         width: 33.333%
      }

      .loc-container {
         padding: 0;
         margin: 0;
         width: 100%
      }
   }

   @media(min-width:769px) {
      div.loc-section {
         padding: 7px;
         float: left;
         width: 25%
      }

      .loc-container {
         padding: 10px;
         margin: 0;
         width: 90%;
         margin: 0 auto
      }
   }

   .loc-head {
      padding: 5px;
      position: relative;
      text-align: center;
      background-color: #ab1010 !important;
   }

   .loc-head h4 {
      /* font-family: 'Francois One', sans-serif; */
      font-size: 14px;
      text-transform: uppercase;
      color: #fff;
      margin: 0;
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
   }

   a {
      text-decoration: none
   }

   .lettet-cont {
      width: 80%;
      margin: 0 auto;
      padding-right: 10px;
      padding-left: 10px
   }

   @media(min-width:300px) and (max-width:1025px) {
      .lettet-cont {
         width: 100%;
         margin: 0 auto;
         padding-right: 5px;
         padding-left: 5px
      }
   }

   .title-model {
      font-size: 25px;
      color: #fca200;
      /* font-family: 'Francois One', sans-serif; */
      font-weight: normal;
      margin: 5px 5px
   }

   .secondary-header {
      color: #fff;
      /* font-family: 'Francois One', sans-serif; */
      text-transform: uppercase;
      font-size: 25px;
      font-weight: normal;
      margin: 0;
      text-align: center;
      border-bottom: 1px solid #fff
   }

   .container-model {
      width: 80%;
      margin: 0 auto
   }

   .secondary-text {
      /* font-family: 'Francois One', sans-serif; */
      color: #fff;
      font-size: 16px;
      text-align: justify
   }

   @media(max-width:426px) {
      .container-model {
         width: 96%;
         margin: 0 auto
      }

      .secondary-header {
         font-size: 18px
      }
   }

   h1.secondary-header {
      margin-top: 25px
   }
</style>


