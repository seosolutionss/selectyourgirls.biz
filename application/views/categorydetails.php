
  <style type="text/css">
      .cat-heading {
         border: 0;
         padding-top: 15px;
         margin-bottom: 15px;
         /* font-family: 'Francois One', sans-serif; */
         font-weight: normal;
         color: #ff6400
      }

      .default-outer {
         background: rgba(0, 0, 0, .3);
         color: #fff;
         padding-bottom: 50px
      }

      .secondary-header {
         color: #fca200;
         /* font-family: 'Francois One', sans-serif; */
         text-transform: uppercase;
         font-size: 25px;
         font-weight: normal;
         margin: 0;
         text-align: center
      }

      .text-body-inner p {
         color: #fff;
         /* font-family: 'Francois One', sans-serif; */
         color: #fca200;
         font-size: 16px;
         /* text-align: justify */
      }

      .text-body-inner h2 {
         color: #fca200
      }

      .img-responsive.img50 {
         max-width: 720px
      }


      .Login_Area {
         text-align: center !important
      }

      #Returing-Form-area {
         text-align: left !important
      }

      .Returning-Customers {
         margin-left: 3rem
      }

      h1.secondary-header {
         margin-top: 35px !important;
         margin-bottom: 15px !important
      }

      .bottom-border {
         margin-top: 0 !important
      }

      .text-body-inner p {
         color: #fff !important
      }


      img.img50 {
         margin-top: 24px
      }

      @media(max-width:496px) {
         .Returning-Customers {
            margin: 0
         }
      }
   </style>
   <style>
      .img-fluid {
         max-width: 100%;
         height: auto
      }

      .pa-container {
         width: 100%;
         padding-right: var(--bs-gutter-x, .75rem);
         padding-left: var(--bs-gutter-x, .75rem);
         margin-right: auto;
         margin-left: auto
      }

      @media(min-width:576px) {
         .pa-container {
            max-width: 540px
         }
      }

      @media(min-width:768px) {
         .pa-container {
            max-width: 720px
         }
      }

      @media(min-width:992px) {
         .pa-container {
            max-width: 960px
         }
      }

      @media(min-width:1200px) {
         .pa-container {
            max-width: 1140px
         }
      }

      @media(min-width:1400px) {
         .pa-container {
            max-width: 1320px
         }
      }

      .pa-row {
         --bs-gutter-x: 1.5rem;
         --bs-gutter-y: 0;
         display: flex;
         flex-wrap: wrap;
         margin-top: calc(-1 * var(--bs-gutter-y));
         margin-right: calc(-.5 * var(--bs-gutter-x));
         margin-left: calc(-.5 * var(--bs-gutter-x))
      }

      .pa-row>* {
         flex-shrink: 0;
         width: 100%;
         max-width: 100%;
         padding-right: calc(var(--bs-gutter-x) * .5);
         padding-left: calc(var(--bs-gutter-x) * .5);
         margin-top: var(--bs-gutter-y)
      }

      @media(min-width:768px) {
         .pa-col-md-6 {
            flex: 0 0 auto;
            width: 50%
         }
      }

      .w-100 {
         width: 100% !important
      }

      .pa-mb-4 {
         margin-bottom: 1.5rem !important
      }

      .rounded {
         border-radius: .25rem !important
      }

      .main-inner img {
         width: 100%;
      }
   </style>






   <style>
      .body h2 {
         display: block;
         font-size: 21px;
         font-weight: 900;
         color: #f8f9fa !important;
         text-transform: uppercase;
      }
   </style>

<div class="col-12 col-sm-12 col-md-12 col-lg-9" id="block_281">

      <section class="panel">


<div>
   <?php
   // print_r($result); 
   foreach ($result as $cat) {
      $cat_image = explode(',', $cat['cat_img']);
      $cat_alt_title = explode(',', $cat['cat_alt_title']);
   ?>

      <h1 class="main-heading text-warning"><?php echo $cat['cat_title'] ?> <span class="text-light">in Mumbai</span></h1>
      <p><?php echo $cat['cat_des'] ?></p>

   <?php } ?>
</div>



<div>
   <div class="col-md-12 padd-0">
      <div class="container">

         <!-- <section id="text-body">
            <div class="container-fluids text-body-fluid">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-body-main-col">
                  <div class="text-body-inner">
                  <h1 class="main-heading text-warning"><?php echo $cat['cat_title'] ?></h1>
                     <?php echo $cat['cat_des'] ?>
                  </div>
               </div>
            </div>
         </section> -->


         <section id="passion-body">
            <div class="container-fluid top-fluid">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 passion-body-main-col">
                  <div class="main-inner text-center">
                     <img src="<?php echo base_url() . 'uploads/category/' . $cat['cat_detail_imge'] ?>" class="img-responsive img50 sofa-img" alt="<?php $cat['cat_detail_alt_title'] ?>">
                  </div>
               </div>
            </div>
         </section>

         <!-- old code  -->
         <div style="clear:both"></div>
      </div>
   </div>
   <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</section>



<!-- other category  -->
<style>
.text {
   color: #fff;
   font-size: 16px;
   line-height: 28px;
   margin-bottom: 21px
}

.escorts_locations {
   width: 100%;
   display: block;
   padding: 0 0 15px 0;
   /* border-bottom: 1px solid #ffc107; */
   margin-bottom: 37px
}

.escorts_locations h4 {
   font-size: 35px;
}

a,
a:hover {
   color: #f3a806
}

::-webkit-input-placeholder {
   color: #ffffff80
}

@media(max-width:767px) {

   .escorts_locations {
      margin-top: 20px
   }
}

.escorts_locations a {
   color: #fff;
   margin-left: 2em;
}
</style>
<div class="container py-4 ">
<div class="row">
   <div class="col-12 col-md-8 d-flex" style="align-items: center;">
      <div class="escorts_locations text">
         <h4 class="main-heading text-warning">Other awesome services <span class="text-light">you may like</span></h4>
         <div class="row">
            <?php foreach ($all_cat as $cats) {
               if ($cats['id'] == $this->uri->segment(3)) {
                  continue;
               } ?>
               <div class="col-md-6">
                  <a href="<?php echo base_url() . 'escorts-type/' . str_replace(' ', '-', $cats['cat_title']) . '/' . $cats['id']; ?>"> <span class="icon-checkmark mr-2 text-overflow:ellipsis"></span><?php echo ucfirst($cats['cat_title']) ?></a>
               </div>
            <?php } ?>
         </div>
      </div>

   </div>
   <div class="col-12 col-md-4">
      <div id="Returing-Form-area">
         <h4 class="main-heading"><span class="text-light">Book service through Whatsapp:</span></h4>
         <form role="form" action="" method="">
            <div id="success"></div>
            <div class="form-group">
               <label>Name</label>
               <input type="text" class="form-control" id="wp-name" name="name" placeholder="Your Name.." required="">
            </div>
            <div class="form-group">
               <label>Phone Number</label>
               <input type="text" class="form-control" id="wp-contact" name="phone" placeholder="+91 (0)" required="">
            </div>
            <div class="form-group">
               <button type="submit" id="wp-submit" name="submit" class="btn btn-warning booking-btn pull-right">BOOK NOW</button>
            </div>
            <a href="javascript:void(0)" style="color: white" class="btn registor-pge-btn1">Response Time 30sec.</a>
         </form>
      </div>
   </div>
</div>
</div>

<script>
var click = document.getElementById('wp-submit');



click.onclick = function(e) {
   e.preventDefault();
   var name = document.getElementById("wp-name").value;
   var cont = document.getElementById('wp-contact').value;
   var link = "https://api.whatsapp.com/send?phone=+9901124050&text=Hello%2C%20my%20name%20is%20" + name + "%2C%20my%20phone%20number%20is%20" + cont + "%2C%20I%20am%20looking%20for%20escorts%20in%20Mumbai";
   window.location = link;
};
</script>
      </div>
   </div>
</div>
</section>