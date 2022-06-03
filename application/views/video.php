

        <style type="text/css">
           a {
              text-decoration: none
           }

           .container-model {
              width: 80%;
              margin: 0 auto
           }

           .secondary-header {
              color: #feb500;
              text-transform: uppercase;
              font-size: 25px;
              font-weight: normal;
              margin: 0;
              text-align: center;
              border-bottom: 1px solid #fff
           }

           .secondary-text {
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
<div class="col-12 col-sm-12 col-md-12 col-lg-9" id="block_281">
           
        <div class="container">
           <h1 class="main-heading text-warning">Hot and sexy Videos <span class="text-light">Of Mumbai Escorts</span> </h1>
           <p>Our call girls in Mumbai are ready to share and live chat nude video by Whatsapp, video call or IMO. We here provide real Mumbai call girls latest update videos every time. So guys please visit our website regularly to watching our hot and sexy call girls videos. Watch Mumbai call girls videos given below and book our Mumbai Escorts today</p>
        </div>


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
        <div class="container">
           <div class="row">
              <?php foreach ($get_video as $vdo) { ?>
                 <div class="col-lg-3 col-md-4 col-6 mb-2 m-0 p-1">
                    <a href="<?php echo base_url(); ?>videos/<?php echo strtolower(str_replace(' ', '-', $vdo['video_title'])); ?>/<?php echo $vdo['video_id']; ?>">
                       <div class="card mid-cd">
                          <i class="icon-play"></i>
                          <img class="card-img-top lazyload" src="https://res.cloudinary.com/isabasu/image/upload/f_auto,w_275/imgs/loading-newloc.svg"
                           data-src="<?php echo base_url(); ?>uploads/video/<?php echo $vdo['video_imge']; ?>" 
                          alt="<?php echo $vdo['video_alt_title']; ?>">
                          <h4 class="h5 card-title text-center"><?php echo $vdo['video_title']; ?></h4>
                       </div>
                    </a>
                 </div>
              <?php } ?>
           </div>
        </div>
        <div class="clear-fix"></div>
    
      </div>
   </div>
</div>
</section>
    

        
