

   <style type="text/css">
      .img-rate {
         width: 15px;
         display: inline-block;
         cursor: pointer;
         margin-top: 5px
      }

      .img-rate path {
         fill: #fca200
      }

      .pic-heading {
         border: 0;
         padding-top: 15px;
         margin-bottom: 0;
        
         font-weight: normal;
         color: #ff6400;
         text-align: center
      }

      .pic-container {
         padding: 10px 10px;
         margin: 0;
         width: 80%;
         margin: 0 auto
      }

      div.pic-row {
         list-style: none;
         display: flex;
         justify-content: center;
         flex-flow: wrap;
         padding: 0
      }

      div.pic-section {
         float: left;
         width: 18%;
         float: left
      }

      img.img-responsive.lazy {
         width: 100%
      }

      @media(min-width:300px) and (max-width:426px) {
         div.pic-section {
            padding: 7px;
            float: left;
            width: 50%
         }

         .pic-container {
            padding: 0;
            margin: 0;
            width: 100%
         }
      }

      @media(min-width:426px) and (max-width:769px) {
         div.pic-section {
            padding: 7px;
            float: left;
            width: 33.333%
         }

         .pic-container {
            padding: 0;
            margin: 0;
            width: 100%
         }
      }

      @media(min-width:769px) {
         div.pic-section {
            padding: 7px;
            float: left;
            width: 25%
         }

         .pic-container {
            padding: 10px;
            margin: 0;
            width: 90%;
            margin: 0 auto
         }
      }

      .pic-head {
         padding: 5px;
         position: relative;
         text-align: center;
         background: #000
      }

      .pic-head h4 {
        
         font-size: 14px;
         text-transform: uppercase;
         color: #ff6400;
         margin: 0
      }

      a {
         text-decoration: none
      }

      ul.rateus {
         list-style: none;
         margin: 0;
         left: 0;
         right: 0;
         padding: 0
      }

      .rateus li {
         display: inline-block;
         padding: 1px;
         color: #fff
      }

      .pic-data {
         position: relative;
         text-align: center;
         margin-top: -5px;
         /* background: linear-gradient(0deg, #d00000, black) */
         background-color: #ab1010;
      }

      .pic-title p {
         text-align: center;
        
         margin: 0;
         font-size: 12px
      }

      .pic-title h3 {
         padding: 0;
         margin: 0
      }

      .view-pic {
         padding: 5px
      }

      img.lazy {
         width: 100%
      }

      .container-model {
         width: 80%;
         margin: 0 auto
      }

      h1.secondary-header {
         margin-top: 25px
      }

      .secondary-header {
        
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

      .title-model {
         font-size: 25px;
         color: #fca200;
        
         font-weight: normal;
         margin: 10px 0 0 0
      }

      @media(max-width:426px) {
         .container-model {
            width: 96%;
            margin: 0 auto
         }

         .secondary-header {
            font-size: 25px
         }

         /* .pic-data {
            min-height: 135px
         } */
      }

      p a strong {
         font-weight: normal
      }

      h1 a strong {
         color: #ff6400
      }

     
   </style>


<div class="col-12 col-sm-12 col-md-12 col-lg-9" id="block_281">
         <div>
   <div class="gallery-cont">
   <h1 class="main-heading text-warning"> <a href="<?php echo base_url().'mumbai-escorts';?>">Mumbai Escorts</a></h1>
      <div>
         <div class="pic-row">
            <?php 
            
            
            foreach ($res as $results) {
               $pro_post_imge = explode(',', $results['imge']);
               $pro_alt_title = explode(',', $results['alt_title']);
               $avg_rate = round($results['rating']);
            ?>
               <div class="pic-section">
                  <a href="<?php echo base_url(); ?>escorts/<?php echo $results['title']; ?>/<?php echo $results['id']; ?>">
                     <img class="lazyload img-fluid rounded-top" src="https://res.cloudinary.com/isabasu/image/upload/w_300/imgs/loading-newloc.svg"
                      data-src="<?php echo base_url(); ?>uploads/profile/<?php echo $pro_post_imge[1]; ?>"
                      alt="<?php echo $pro_alt_title[1]; ?>">
                  </a>
                  <div class=" pic-data pt-2 rounded-bottom">
                     <ul class="rateus">
                        <?php
                        if (!empty($avg_rate)) {
                           for ($i = 0; $i < $avg_rate; $i++) { ?>
                              <li><svg class="img-rate" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" viewBox="0 0 576 512">
                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                 </svg></li>
                           <?php }
                        } else { ?>
                           <li>Not Rated</li>
                        <?php } ?>
                     </ul>
                     <div class="pic-title pb-2">
                        <a href="<?php echo base_url(); ?>escorts/<?php echo $results['title']; ?>/<?php echo $results['id']; ?>">
                           <h3 class="h5" style="font-weight: bold; text-transform:uppercase"><?php echo $results['title']; ?></h3>
                        </a>
                        <!-- <p style="text-align: center !important; font-weight: bold;"><?php echo $results['description']; ?></p> -->
                     </div>
                     <!-- <div class="view-pic">
                        <a href="<?php// echo base_url(); ?>escorts/<?php //echo $results['title']; ?>/<?php //echo $results['id']; ?>">
                           <img style="width:90px !important;" src="<?php// echo base_url(); ?>assets/img/book-now.png" alt="Book NOW">
                        </a>
                     </div> -->
                  </div>
               </div>
            <?php } ?>
         </div>
      </div>
   </div>
        </div>

   <div class="container" style="margin-bottom:30px;">
     
    
      <p class="secondary-text">Our Mumbai escort agency is here to complacence your body and mind, with optimum things which work great on satisfying you to a large extent. Our call girls Mumbai gifted by god a skill of understanding what exactly you want and they know it's not just about getting into bed. Being immensely talented about a variety of things related to lust and romance. The escort you chose from our call girl escorts category in Mumbai allows you to enjoy the grades of erotic and her elegance keep excites your every nerve constantly. So that you'll reach the top of ecstasy soon, where a pure bliss will circumfuse you.

</p>

   </div>

         </div>
      </div>
   </div>
</section>
  