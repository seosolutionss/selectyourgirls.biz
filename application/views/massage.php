
<style type="text/css">
   .uk-h1,
   h2 {
      /* margin: 0 0 20px 0; */
      color: #fca200;
      text-transform: uppercase;
      font-size: 20px;
      text-shadow: 0 0 2px #000;
   }

   *+.uk-h1,
   *+h2 {
      margin-top: 40px
   }

   .uk-h1 {
      font-size: 25px;
      line-height: 1.2
   }

   h2 {
      font-size: 1.7rem;
      line-height: 1.3
   }

   @media(min-width:960px) {
      .uk-h1 {
         font-size: 2.625rem
      }

      h2 {
         font-size: 2rem
      }
   }

   .uk-heading-divider {
      padding-bottom: calc(5px+.1em);
      border-bottom: calc(.2px+.05em) solid #e5e5e5
   }

   .uk-section {
      box-sizing: border-box;
      padding-top: 40px;
      padding-bottom: 40px
   }

   @media(min-width:960px) {
      .uk-section {
         padding-top: 70px;
         padding-bottom: 70px
      }
   }

   .uk-section::after,
   .uk-section::before {
      content: "";
      display: table
   }

   .uk-section::after {
      clear: both
   }

   .uk-section>:last-child {
      margin-bottom: 0
   }

   .uk-section-large {
      padding-top: 0px;
      padding-bottom: 0px
   }

   .uk-section-muted {
      background: #00000003;
      margin: 10px
   }

   .uk-section-secondary {
      background: #00000003;
      margin: 10px
   }

   .uk-container {
      box-sizing: content-box;
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
      padding-left: 15px;
      padding-right: 15px
   }

   @media(min-width:640px) {
      .uk-container {
         padding-left: 30px;
         padding-right: 30px
      }
   }

   @media(min-width:960px) {
      .uk-container {
         padding-left: 40px;
         padding-right: 40px
      }
   }

   .uk-container::after,
   .uk-container::before {
      content: "";
      display: table
   }

   .uk-container::after {
      clear: both
   }

   .uk-container>:last-child {
      margin-bottom: 0
   }

   .uk-container-large {
      max-width: 1600px
   }

   .uk-grid {
      display: flex;
      flex-wrap: wrap;
      margin: 0;
      padding: 0;
      list-style: none
   }

   .uk-grid>* {
      margin: 0
   }

   .uk-grid>*>:last-child {
      margin-bottom: 0;
      margin-bottom: 0;
      color: #fff;
      font-size: 16px;
      text-shadow: 0 0 3px #000
   }

   .uk-grid {
      margin-left: -30px
   }

   .uk-grid>* {
      padding-left: 30px
   }

   @media(min-width:1200px) {
      .uk-grid {
         margin-left: -40px
      }

      .uk-grid>* {
         padding-left: 40px
      }
   }

   .uk-grid-large {
      margin-left: -40px
   }

   .uk-grid-large>* {
      padding-left: 40px
   }

   @media(min-width:1200px) {
      .uk-grid-large {
         margin-left: -70px
      }

      .uk-grid-large>* {
         padding-left: 70px
      }
   }

   @keyframes uk-fade-top-small {
      0% {
         opacity: 0;
         transform: translateY(-10px)
      }

      100% {
         opacity: 1;
         transform: translateY(0)
      }
   }

   [class*=uk-width] {
      box-sizing: border-box;
      width: 100%;
      max-width: 100%;
      /* text-align: center */
   }

   .uk-width-1-2 {
      width: 50%
   }

   @media(min-width:1200px) {
      .uk-width-1-2\@l {
         width: 50%
      }
   }

   .uk-text-large {
      font-size: 1.5rem;
      line-height: 1.5
   }

   .uk-text-center {
      text-align: center !important
   }

   @media(min-width:960px) {}

   .uk-background-cover {
      background-position: 50% 50%;
      background-repeat: no-repeat
   }

   .uk-background-cover {
      background-size: cover
   }

   .uk-margin-small {
      margin-bottom: 10px;
      margin-top: 10px
   }

   *+.uk-margin-small {
      margin-top: 10px !important
   }

   .uk-margin-remove-adjacent+* {
      margin-top: 0 !important
   }

   [class*=uk-position-left],
   [class*=uk-position-right] {
      position: absolute !important
   }

   .uk-position-left {
      top: 0;
      bottom: 0;
      left: 0
   }

   .uk-position-right {
      top: 0;
      bottom: 0;
      right: 0
   }

   .uk-position-relative {
      position: relative !important
   }

   @media(min-width:1200px) {
      .uk-hidden\@l {
         display: none !important
      }
   }

   @media(max-width:1199px) {
      .uk-visible\@l {
         display: none !important
      }
   }

   .glow {
      color: #ff6400;
      text-align: center;
      -webkit-animation: glow 1s ease-in-out infinite alternate;
      -moz-animation: glow 1s ease-in-out infinite alternate;
   }

   .color-original {
      color: #ff6400 !important
   }

   strong {
      font-weight: normal;
      color: #ffc107
   }
</style>
<style type="text/css">
   *,
   *:before,
   *:after {
      box-sizing: border-box
   }

   .pro-heading {
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
      width: 100%
   }

   .container-model {
      width: 80%;
      margin: 0 auto
   }

   .secondary-text {
      color: #fff;
      font-size: 16px;
      /* text-align: justify */
   }

   @media(max-width:426px) {
      .container-model {
         width: 96%;
         margin: 0 auto
      }

      .secondary-header {
         font-size: 25px
      }

      .uk-container {
         padding-left: 0;
         padding-right: 0
      }
   }

   @media screen and (max-width:1200px) {
      .massage-heading {
         margin-top: 20px;
      }
   }

   .mid-cd .card-title {
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
      font-size: 1em;
      padding-top: 0.4em;
      padding-left: 0.5em;
   }

   .card {
      background-color: #000;
   }
</style>

<div class="col-12 col-sm-12 col-md-12 col-lg-9" id="block_281">


         <div style=" border-bottom: 1px solid #fff;">
   <h1 class="main-heading text-warning">Mumbai Escorts Categories </h1>
   <p class="secondary-text "><a href="<?php echo base_url();?>">Mumbai escorts</a> category is a place, where you can able to find the kind of woman who you have in your mind. Our categories give you an exact idea to chose among the highly trained escorts of Mumbai where college girls and young escorts are the main attraction. You can browse over the diverse range and you can come up with the one who you like the most. Get into each category and see yourself the kind of beauties and details we have provided. You'll get excited for sure after giving a good look to the categories of our <a href="<?php echo base_url().'mumbai-call-girls';?>">Call Girls in Mumbai</a>.

   </p>
</div>



<div class="container pt-5">

   <div class="row">
      <?php foreach($cats->result() as $cat){?>
      <div class="col-lg-6 col-md-4 col-6 mb-2 m-0 p-1">
         <a href="<?php  echo base_url().'escorts-type/'.str_replace(' ','-',trim($cat->cat_title)).'/'.$cat->id;?>">
            <div class="card mid-cd">
               <i class="fa fa-play-circle-o"></i>
               <img src="https://res.cloudinary.com/sygm/image/upload/f_auto/img/room-loading.svg" class="card-img-top lazyload" data-src="<?php echo base_url().'uploads/category/'.$cat->cat_img;?>" alt="<?php echo $cat->cat_alt_title;?>">
               <h4 class="h5 card-title text-center"><?php echo $cat->cat_title;?></h4>
            </div>
         </a>
      </div>
      <?php  } ?>
   </div>
</div>
         </div>
      </div>
   </div>
</section>

