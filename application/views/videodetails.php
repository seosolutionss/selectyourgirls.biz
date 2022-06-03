
 <style type="text/css">
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
         background: #000000b0;
         margin-top: -8px;
         min-height: 75px
      }

      .loc-head h4 {
         /* font-family: 'Francois One', sans-serif; */
         font-size: 14px;
         text-transform: uppercase;
         color: #ff6400;
         margin: 0
      }

      a {
         text-decoration: none
      }

      img.img-responsive {
         width: 100%
      }

      .loc-head h4 {
         color: #feb500;
         font-weight: normal
      }

      .container-model {
         width: 80%;
         margin: 0 auto
      }

      .secondary-header {
         color: #feb500;
         /* font-family: 'Francois One', sans-serif; */
         text-transform: uppercase;
         font-size: 25px;
         font-weight: normal;
         margin: 0;
         text-align: center;
         border-bottom: 1px solid #fff
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
            font-size: 28px
         }
      }

      h1.secondary-header {
         margin-top: 25px
      }
   </style>

   <style type="text/css">
      .embed-container {
         position: relative;
         padding-bottom: 56.25%;
         height: 0;
         overflow: hidden;
         max-width: 100%
      }

      .embed-container iframe,
      .embed-container object,
      .embed-container embed {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%
      }

      .uk-h1,
      h2 {
         margin: 17px 0 7px 0 !important
      }

      p {
         margin-top: 3px
      }

      .container-model iframe {
         width: 100%
      }

      @media only screen and (min-width:768px) {
         .container-model iframe {
            height: 479px
         }
      }
   </style>

<div class="col-12 col-sm-12 col-md-12 col-lg-9" id="block_281">
         <?php foreach ($result as $res) { ?>
      <div>
         <h1 class="main-heading text-warning text-center"><?php echo $res['video_title'] ?></h1>
         <div class="container-model">
            <p class="secondary-text"><?php echo $res['video_desc'] ?></p>
         </div>
         <br>
         <div class="text-center">
            <iframe width="560" height="315" src="<?php echo $res['video_link'] ?>?rel=0&amp;showinfo=0" frameborder="0" gesture="media" 
            allow="encrypted-media" allowfullscreen=""></iframe>
         </div>
      </div>
   <?php } ?><br>

     

   <!-- video card  -->
   <style>
      .mid-cd {
         background: #000;
         position: relative;
      }

      .mid-cd i {
         position: absolute;
         color: red;
         text-shadow: 13px 17px 51px #000;
         font-size: 3em;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
      }

      .mid-cd .card-title {
         text-overflow: ellipsis;
         white-space: nowrap;
         overflow: hidden;
         font-size: 1em;
         padding-top: .4em;
         padding-left: .5em;
      }
   </style>



   <div class="container pt-5">
   <h1 class="main-heading text-warning text-center"> Watch Our Latest Videos </h1>
      <div class="row">
         <?php foreach ($ress as $vdo) { ?>
            <div class="col-lg-3 col-md-4 col-6 mb-2 m-0 p-1">
               <a href="<?php echo base_url(); ?>videos/<?php echo str_replace(' ', '-', $vdo['video_title']); ?>/<?php echo $vdo['video_id']; ?>">
                  <div class="card mid-cd">
                     <i class="fa fa-play-circle-o"></i>
                     <img src="https://res.cloudinary.com/isabasu/image/upload/f_auto,w_275/imgs/loading-newloc.svg"
                      class="card-img-top lazyload" data-src="<?php echo base_url(); ?>uploads/video/<?php echo $vdo['video_imge']; ?>" 
                     alt="<?php echo $vdo['video_alt_title']; ?>">
                     <h4 class="h5 card-title text-center"><?php echo $vdo['video_title']; ?></h4>
                  </div>
               </a>
            </div>
         <?php } ?>
      </div>
   </div>

         </div>
      </div>
   </div>
</section>



   
