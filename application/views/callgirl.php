<style type="text/css">
   .uk-h1,
   h2 {
      margin: 0 0 20px 0;
      color: #ff6400;
      text-transform: uppercase;
      font-size: 20px;
      text-shadow: 0 0 2px #000;
      /* font-family: 'Francois One', sans-serif */
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
      padding-top: 70px;
      padding-bottom: 70px
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
      font-size: 15px;
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
      text-align: center
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
      /* font-family: 'Francois One', sans-serif */
   }

   .color-original {
      color: #ff6400 !important
   }

   strong {
      font-weight: normal;
      /* color: #ff6400 */
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
      /* font-family: 'Francois One', sans-serif; */
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

   h1.secondary-header {
      margin-top: 25px
   }

   .cats-container {
      margin: 34px 0
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
         font-size: 26px
      }

      .uk-container {
         padding-left: 0;
         padding-right: 0
      }
   }

   #escort .escort-profile-wrap-gallgold {
      background: #000;
      border: solid 4px #a7850f;
      margin-bottom: 20px;
      border-radius: 8px;
      padding: 20px;
   }

   @media only screen and (min-width: 64.063em) {
      .large-3 {
         width: 25%;
      }
   }

   @media only screen and (min-width: 64.063em) {

      .column,
      .columns {
         position: relative;
         padding-left: 0.9375em;
         padding-right: 0.9375em;
         float: left;
      }
   }

   .escort-image {
      position: relative;
   }

   .escort-image a {
      display: block;
      position: relative;
   }

   [class*=column]+[class*=column]:last-child {
      float: right;
   }

   header.name {
      background: 0 0;
   }

   .escort p.name-gallgold {
      line-height: 1.5em;
   }

   .escort p.name-gallgold {
      line-height: 1.5em;
   }

   .escort a.name-gallgold {
      font-size: 1.5em;
      color: #f8be0b;
   }

   .escort-profile-grid-view figure .badges,
   .escort-image .badges {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      background: rgba(1, 1, 1, .5);
      padding: 5px;
   }

   .right {
      float: right !important
   }

   .clearfix:before,
   .clearfix:after {
      content: " ";
      display: table
   }

   .clearfix:after {
      clear: both
   }

   img {
      display: inline-block;
      vertical-align: middle
   }

  

  

   .columns {
      padding-left: .9375em;
      padding-right: .9375em;
      width: 100%;
      float: left
   }

   [class*=column]+[class*=column]:last-child {
      float: right
   }

   @media only screen {
      .columns {
         position: relative;
         padding-left: .9375em;
         padding-right: .9375em;
         float: left
      }

      .small-12 {
         width: 100%
      }
   }

   @media only screen and (min-width:40.063em) {
      .columns {
         position: relative;
         padding-left: .9375em;
         padding-right: .9375em;
         float: left
      }

      .medium-4 {
         width: 33.33333%
      }

      .medium-8 {
         width: 66.66667%
      }
   }

   @media only screen and (min-width:64.063em) {
      .columns {
         position: relative;
         padding-left: .9375em;
         padding-right: .9375em;
         float: left
      }

      .large-3 {
         width: 25%
      }

      .large-9 {
         width: 75%
      }
   }

   .button {
      border-style: solid;
      border-width: 0;
      cursor: pointer;
      font-family: helvetica neue, Helvetica, Roboto, Arial, sans-serif;
      font-weight: 400;
      line-height: normal;
      margin: 0 0 1.25rem;
      position: relative;
      text-decoration: none;
      text-align: center;
      -webkit-appearance: none;
      -moz-appearance: none;
      border-radius: 0;
      display: inline-block;
      padding-top: 1rem;
      padding-right: 2rem;
      padding-bottom: 1.0625rem;
      padding-left: 2rem;
      font-size: 1rem;
      background-color: #2ba6cb;
      border-color: #2285a2;
      color: #fff;
      transition: background-color 300ms ease-out
   }

   .button:hover,
   .button:focus {
      background-color: #2285a2
   }

   .button:hover,
   .button:focus {
      color: #fff
   }

   @media only screen and (min-width:40.063em) {
      .button {
         display: inline-block
      }
   }

   div,
   p {
      margin: 0;
      padding: 0
   }

   a img {
      border: 0
   }

   p {
      font-family: inherit;
      font-weight: 400;
      font-size: 1rem;
      line-height: 1.6;
      margin-bottom: 1.25rem;
      text-rendering: optimizeLegibility
   }

   i {
      font-style: italic;
      line-height: inherit
   }

   strong {
      font-weight: 700;
      line-height: inherit
   }

   @media only screen {
      .hide-for-small-only {
         display: none !important
      }
   }

   @media only screen and (min-width:40.063em) {
      .hide-for-small-only {
         display: inherit !important
      }
   }

   @media only screen and (min-width:64.063em) {
      .hide-for-small-only {
         display: inherit !important
      }
   }

   @media only screen and (min-width:90.063em) {
      .hide-for-small-only {
         display: inherit !important
      }
   }

   @media only screen and (min-width:120.063em) {
      .hide-for-small-only {
         display: inherit !important
      }
   }

   @media print {
      * {
         background: 0 0 !important;
         color: #000 !important;
         box-shadow: none !important;
         text-shadow: none !important
      }

      a,
      a:visited {
         text-decoration: underline
      }

      a[href]:after {
         content: " ("attr(href)")"
      }

      img {
         page-break-inside: avoid
      }

      img {
         max-width: 100% !important
      }

      @page {
         margin: .5cm
      }

      p {
         orphans: 3;
         widows: 3
      }
   }

   header.name {
      background: 0 0
   }

   ;

   body {
      font-family: roboto, sans-serif;
      background: #111
   }

   .button {
      background: #540505;
      font-size: 12px;
      text-transform: uppercase;
      letter-spacing: .5px;
      font-weight: 900;
      padding: 10px;
      border-radius: 4px !important
   }

   .button:hover,
   .button:focus {
      background: #430404
   }

   span.red {
      color: #ae1c1c
   }

  

   #escort .escort-profile-wrap-gallgold {
      background: #000;
      border: solid 4px #a7850f;
      margin-bottom: 20px;
      border-radius: 8px;
      padding: 20px
   }

   #escort .escort-profile-wrap-gallgold:hover {
      background: #000
   }

   .escort .details p {
      margin: 0 0 12px;
      color: #adadad
   }

   .escort-image a {
      display: block;
      position: relative
   }

   .escort-image {
      position: relative
   }

   .escort-image img {
      width: 100%
   }

   .escort .escort-image .escort-type {
      margin-top: 10px
   }

   .escort .profile-buttons {
      width: 100%
   }

   .escort .fav-button-wrap,
   .escort .video-wrap,
   .escort .contact-me {
      display: inline-block
   }

   .escort .profile-buttons .button {
      background: #540505;
      font-size: 10px;
      text-align: center;
      margin: 0
   }

   .escort .profile-buttons .button:hover,
   .escort .profile-buttons .button:focus {
      background: #430404
   }

   .escort .profile-buttons .button i {
      font-size: 1.4em;
      margin-right: 4px
   }

   .escort .profile-buttons .new-fav-btn {
      background: #540505
   }

   .escort .profile-buttons .new-fav-btn:hover {
      background: #4e406c
   }

   .escort .profile-buttons .new-fav-btn i {
      color: #fff
   }

   .escort p {
      font-size: 14px;
      line-height: 1.4em;
      margin: 0;
      margin-bottom: 12px
   }

   .escort p.name-gallgold {
      line-height: 1.5em
   }

   .escort p.exclusive {
      margin-top: 2px;
      margin-bottom: 10px;
      color: #d1a11a;
      display: inline;
      margin-right: 10px
   }

   .escort a.name-gallgold {
      font-size: 1.5em;
      color: #f8be0b
   }

   .escort a.name-gallgold:hover {
      font-size: 1.5em;
      opacity: .5
   }

   @media(max-width:1024px) {
      .escort .profile-buttons .button {
         font-size: 8px;
         margin-bottom: 12px
      }

      article.details p {
         font-size: 13px
      }
   }

   .escort-image .badges {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      background: rgba(1, 1, 1, .5);
      padding: 5px
   }

   .fa-certificate:before {
      content: "\f0a3"
   }

   .fav-button-wrap {
      max-width: 140px
   }

   .button {
      background: #f71242
   }

   .button:hover {
      background: #806126
   }

   .escort-type.right {
      max-width: 35px;
      margin-top: 0 !important
   }

   @media all and (max-width:800px) {
      .profile-buttons.clearfix {
         display: none
      }

      [class*=escort-profile-wrap-] {
         border-width: 3px !important
      }

      .button.new-fav-btn {
         background: rgba(128, 113, 84, .27)
      }

      .new-fav-btn i:hover {
         color: red;
         opacity: .5
      }

      .escort-image .badges {
         bottom: -1px
      }
   }
</style>

<div class="col-12 col-sm-12 col-md-12 col-lg-9" id="block_281">
         <main>
            <div class="container " style="background: #0000005c;    border-bottom: 1px solid #fff;">
               <h1 class="main-heading text-warning">
                  <a href="<?php echo base_url(); ?>call-girls-bangalore">The irresistible charm of our Mumbai call girls
                  </a>
               </h1>
               <p class="secondary-text">If you are tired of your boring nights, then our hot and sexy girls can make those boring nights colorful. Our escort agency will give you the sexy and attractive model or girl that you are dreaming of. So if you are looking for bold call girls, then you are in the right place.</p>
               <p class="secondary-text">Imagine being within a beautiful escort and sharing the same bed with her is a fantastic feeling. Mumbai call girls give you that feeling which you have been craving for a long time. Mumbai call girls have their charm. They are bold and very kind of nature. Lots of people love to spend their night with our call girls.</p>
               <p class="secondary-text">When you hear their beautiful voices, you can’t control yourself and connect with them physically and emotionally. You can choose a beautiful night with these attractive Mumbai escort girls. If you want to remove all the sadness from your life, then book service from our company.</p>
               <p class="secondary-text">Mumbai call girls are amazing who can attract any man with their body. Also, they know how to give enjoyment to a man, so they dress up accordingly. After a long, dull day when you see Mumbai call girls in a hot dress at night, your tiring day turns into a colorful night. You can do many things with them, like talking to them if you are feeling low and connecting with them emotionally.</p>
               <section id="escort" class="escort row">
                  <div class="escort-profile-wrap-gallgold">
                     <div class="row">
                        <div class="large-3 medium-4 small-12 columns">
                           <div class="escort-image">
                              <a class="wrap-link" href="profile/anjali.html">
                                 <div style="position: absolute; width: 100%; top: 0px; text-align: center;">
                                    <img alt="Mumbai Call Girls Book Now" src="<?php echo base_url() ?>assets/img/now_touring_15.png">
                                 </div>
                                 <img class=" lazyload" src="https://res.cloudinary.com/sygm/image/upload/f_auto/img/anjali2.jpg" data-src="https://res.cloudinary.com/sygm/image/upload/f_auto/img/anjali2.jpg" alt="Call Girls Mumbai">
                                 <div class="badges">
                                    <div class="escort-type right">
                                       <img src="<?php echo base_url() ?>assets/img/ml_gold_badge.png" alt="Mumbai Escorts Gold" border="0">
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="large-9 medium-8 small-12 columns">
                           <header class="name">
                              <p class="name-gallgold">
                                 <img style="width:80px; float:right;" title="Escort Photos are 100% Verified" src="<?php echo base_url() ?>assets/img/photos_verified_black.png" alt="Photos have been verified" border="0"> <a class="name-gallgold" href="profile/anjali.html" target="_self">Anjali 24 &nbsp;<span class="red" style="font-size:0.8em;">
                                       Private Escorts </span><br>
                                    <span style="font-size:0.8em;">Juhu, Mumbai</span></a>
                              </p>
                           </header>
                           <article class="details">
                              <p><span itemprop="description">I'm Anjali, 23 yrs of age in Juhu, Mumbai. I'm
                                    an utterly unaffiliated beautiful girl , providing the <strong>call girl
                                       in Mumbai</strong>, middle Mumbai, airport terminal and also in some
                                    other locations. My apparel size with tender clean skin. 34C natural and
                                    firm breasts with legs that are hot. Additionally, near Andheri or even
                                    Colaba channel far too! My apartment is now relatively tremendous and
                                    comfy. Precisely what exactly are you looking forward to? Please, reach
                                    me personally to Book today!</span>
                              </p>
                              <p class="exclusive"><img width="20" src="https://img.icons8.com/flat-round/64/undefined/star--v1.png" />&nbsp;Vip Girl</p>
                           </article>
                           <div class="hide-for-small-only profile-buttons clearfix">
                              <div class="fav-button-wrap">
                                 <div class="button new-fav-btn " data-id="33651"> <i class="fa fa-heart"></i>&nbsp;<span>Favourite</span>
                                 </div>
                              </div>
                              <div class="video-wrap"></div> <a class="button contact-me" href="profile/anjali.html"><i class="fa fa-info-circle"></i>&nbsp;More
                                 Info</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <section id="escort" class="escort row">
                  <div class="escort-profile-wrap-gallgold">
                     <div class="row">
                        <div class="large-3 medium-4 small-12 columns">
                           <div class="escort-image">
                              <a class="wrap-link" href="profile/priyanka.html">
                                 <div style="position: absolute; width: 100%; top: 0px; text-align: center;">
                                    <img alt="Mumbai Escorts Service Book Now" src="<?php echo base_url() ?>assets/img/now_touring_15.png">
                                 </div>
                                 <img class="lazyload" src="https://res.cloudinary.com/sygm/image/upload/f_auto/img/priyanka5.jpg" data-src="https://res.cloudinary.com/sygm/image/upload/f_auto/img/priyanka5.jpg" alt="Call Girl in Mumbai">
                                 <div class="badges">
                                    <div class="escort-type right">
                                       <img src="<?php echo base_url() ?>assets/img/ml_gold_badge.png" alt="Call Girls Mumbai Gold" border="0">
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="large-9 medium-8 small-12 columns">
                           <header class="name">
                              <p class="name-gallgold">
                                 <img style="width:80px; float:right;" title="Escort Photos are 100% Verified" src="<?php echo base_url() ?>assets/img/photos_verified_black.png" alt="Photos have been verified" border="0"> <a class="name-gallgold" href="profile/priyanka.html" target="_self">Priyanka 24 &nbsp;<span class="red" style="font-size:0.8em;">Private Escorts </span><br><span style="font-size:0.8em;">Andheri, Mumbai</span></a>
                              </p>
                           </header>
                           <article class="details">
                              <p><span itemprop="description">Hello There,<br>
                                    I'm a courageous and energetic <strong>young call girl in
                                       Mumbai</strong> who's seeking a Handsome partner. I am quite
                                    pleasant, charming, lively and try new adventures, I have an amiable
                                    disposition, so when it regards naughty fun, I'm always all set for it.
                                    I'm positioned in Mumbai city, and I stay in Andheri at a beautiful and
                                    secure flat together with shower centers plus parking consistently
                                    offered.
                                    I provide a 100% NO RUSH service! My photographs are 100% recent and
                                    real! Allow me to be your gloomy little getaway! Hj and BJ additionally
                                    offered.<br>Book now and you won’t regret! Let’s party together in a
                                    really naughty way !!</span>
                              </p>
                              <p class="exclusive"><img width="20" src="https://img.icons8.com/flat-round/64/undefined/star--v1.png" />&nbsp;VIP Models</p>
                           </article>
                           <div class="hide-for-small-only profile-buttons clearfix">
                              <div class="fav-button-wrap">
                                 <div class="button new-fav-btn " data-id="33651"> <i class="fa fa-heart"></i>&nbsp;<span>Favourite</span>
                                 </div>
                              </div>
                              <div class="video-wrap"></div> <a class="button contact-me" href="profile/priyanka.html"><i class="fa fa-info-circle"></i>&nbsp;More
                                 Info</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <section id="escort" class="escort row">
                  <div class="escort-profile-wrap-gallgold">
                     <div class="row">
                        <div class="large-3 medium-4 small-12 columns">
                           <div class="escort-image">
                              <a class="wrap-link" href="profile/sonia.html">
                                 <div style="position: absolute; width: 100%; top: 0px; text-align: center;">
                                    <img alt="Mumbai Escorts Book Now" src="<?php echo base_url() ?>assets/img/now_touring_15.png">
                                 </div>
                                 <img class=" lazyload" src="https://res.cloudinary.com/sygm/image/upload/f_auto/img/sonia1.jpg" data-src="https://res.cloudinary.com/sygm/image/upload/f_auto/img/sonia1.jpg" alt="Independent Escorts Mumbai">
                                 <div class="badges">
                                    <div class="escort-type right">
                                       <img src="<?php echo base_url() ?>assets/img/ml_gold_badge.png" alt="Mumbai Escorts Gold" border="0">
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="large-9 medium-8 small-12 columns">
                           <header class="name">
                              <p class="name-gallgold">
                                 <img style="width:80px; float:right;" title="Escort Photos are 100% Verified" src="<?php echo base_url() ?>assets/img/photos_verified_black.png" alt="Photos have been verified" border="0"> <a class="name-gallgold" href="profile/sonia.html" target="_self">Sonia 28&nbsp;<span class="red" style="font-size:0.8em;">
                                       Private Escorts </span><br>
                                    <span style="font-size:0.8em;">Juhu, Mumbai</span></a>
                              </p>
                           </header>
                           <article class="details">
                              <p><span itemprop="description">Hello There, I'm Sonia.<br>
                                    I'm 28 Years of Age. I am an authentic girl that enjoy every day with
                                    close friends. My images are 100 percent real. Together with me, you may
                                    perhaps not be unhappy! You will get what you want, and My services will
                                    be delivered without any obstacles. I'm friendly and want to meet up new
                                    men. I will offer a genuine girlfriend experience, together with me
                                    personally you won't ever hear that the term "no more". I'm excited to
                                    meet all of your dreams. I'm always tidy and well-dressed to the clients
                                    and hope precisely the same out of these. I'm offered for outcalls in
                                    your home or resort. Let's gather today.</span>
                              </p>
                              <p class="exclusive"><img width="20" src="https://img.icons8.com/flat-round/64/undefined/star--v1.png" />&nbsp;Independent Girl</p>
                           </article>
                           <div class="hide-for-small-only profile-buttons clearfix">
                              <div class="fav-button-wrap">
                                 <div class="button new-fav-btn " data-id="33651"> <i class="fa fa-heart"></i>&nbsp;<span>Favourite</span>
                                 </div>
                              </div>
                              <div class="video-wrap"></div> <a class="button contact-me" href="profile/sonia.html"><i class="fa fa-info-circle"></i>&nbsp;More
                                 Info</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <section id="escort" class="escort row">
                  <div class="escort-profile-wrap-gallgold">
                     <div class="row">
                        <div class="large-3 medium-4 small-12 columns">
                           <div class="escort-image">
                              <a class="wrap-link" href="profile/shruti.html">
                                 <div style="position: absolute; width: 100%; top: 0px; text-align: center;">
                                    <img alt="Mumbai Escorts Book Now" title="Mumbai Escorts Book Now" src="<?php echo base_url() ?>assets/img/now_touring_15.png">
                                 </div>
                                 <img class=" lazyload" src="https://res.cloudinary.com/sygm/image/upload/f_auto/img/shruti4.jpg" data-src="https://res.cloudinary.com/sygm/image/upload/f_auto/img/shruti4.jpg" alt="Call girl Mumbai">
                                 <div class="badges">
                                    <div class="escort-type right">
                                       <img src="<?php echo base_url() ?>assets/img/ml_gold_badge.png" alt="Mumbai Escorts Gold" border="0">
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="large-9 medium-8 small-12 columns">
                           <header class="name">
                              <p class="name-gallgold">
                                 <img style="width:80px; float:right;" title="Escort Photos are 100% Verified" src="<?php echo base_url() ?>assets/img/photos_verified_black.png" alt="Photos have been verified" border="0"> <a class="name-gallgold" href="profile/shruti.html" target="_self">Shruti 28 &nbsp;<span class="red" style="font-size:0.8em;">
                                       Private Escorts </span><br>
                                    <span style="font-size:0.8em;">Andheri, Mumbai</span></a>
                              </p>
                           </header>
                           <article class="details">
                              <p><span itemprop="description">Hello There Gentlemans!<br>
                                    I'm Alisna, and I Wish to Begin by inviting you to my website<br>
                                    I expect, later seeing my portfolio you are going to have a far superior
                                    concept of that.
                                    If you're searching for an attractive, pleasant, smart companion that
                                    supplies the supreme Girlfriend Experience, then I'm just the only one
                                    for you personally! I enjoy using hot lingerie, stylish gowns and heels.
                                    I am like a perfectionist, and I love to have time for you to earn
                                    matters flawless.<br> This is precisely the reason why I will be
                                    renowned because of the superb, great provider along with my pleasing
                                    personality. Hygiene is essential for me personally this is precisely
                                    why to get the gentleman who'd like to relish my companion that I hope
                                    the very same.<br> I enjoy experienced and acute gentlemen that
                                    understand to honor that a female such as me personally.<br>
                                    You'll Love to see me personally and you are welcome to my Luxurious
                                    Apartment Located In Mumbai - Incredibly near Andheri.</span>
                              </p>
                              <p class="exclusive"><img width="20" src="https://img.icons8.com/flat-round/64/undefined/star--v1.png" />&nbsp;IT Girl</p>
                           </article>
                           <div class="hide-for-small-only profile-buttons clearfix">
                              <div class="fav-button-wrap">
                                 <div class="button new-fav-btn " data-id="33651"> <i class="fa fa-heart"></i>&nbsp;<span>Favourite</span>
                                 </div>
                              </div>
                              <div class="video-wrap"></div> <a class="button contact-me" href="profile/shruti.html"><i class="fa fa-info-circle"></i>&nbsp;More
                                 Info</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <section id="escort" class="escort row">
                  <div class="escort-profile-wrap-gallgold">
                     <div class="row">
                        <div class="large-3 medium-4 small-12 columns">
                           <div class="escort-image">
                              <a class="wrap-link" href="profile/sweta.html">
                                 <div style="position: absolute; width: 100%; top: 0px; text-align: center;">
                                    <img alt="Mumbai Escorts Book Now" src="<?php echo base_url() ?>assets/img/now_touring_15.png">
                                 </div>
                                 <img class=" lazyload" src="https://res.cloudinary.com/sygm/image/upload/f_auto/img/sweta2.jpg" data-src="https://res.cloudinary.com/sygm/image/upload/f_auto/img/sweta2.jpg" alt="Escorts in Mumbai">
                                 <div class="badges">
                                    <div class="escort-type right">
                                       <img src="<?php echo base_url() ?>assets/img/ml_gold_badge.png" alt="Mumbai Escorts Gold" border="0">
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="large-9 medium-8 small-12 columns">
                           <header class="name">
                              <p class="name-gallgold">
                                 <img style="width:80px; float:right;" title="Escort Photos are 100% Verified" src="<?php echo base_url() ?>assets/img/photos_verified_black.png" alt="Photos have been verified" border="0"> <a class="name-gallgold" href="profile/sweta.html" target="_self">Sweta 23 &nbsp;<span class="red" style="font-size:0.8em;">
                                       Private Escorts </span><br>
                                    <span style="font-size:0.8em;">North Mumbai</span></a>
                              </p>
                           </header>
                           <article class="details">
                              <p><span itemprop="description">I work from 9 am to 5 pm some time more till 9
                                    pm. I love to organize your free time using a romantic and intimate
                                    sensual massage which you have never thought of.<br>
                                    Book me for your trip to outstation, and I will show you the real
                                    entertainment. If you are spending a full time at home and want to
                                    uncover sexual energy, then I am here to fulfill and offer a variety of
                                    services like CIM, HJ, BJ, 69 Style, Doggie Style, etc.<br>
                                    I can also offer you a variety of sensual massages that range from human
                                    anatomy massage to Lingam massage one of others, enabling you to unlock
                                    your good sense.<br>
                                    I'm Sweta a hot title that you are going to find I'm more alluring than
                                    my title, I'm pleased, and considerate, helpful and certainly will do
                                    job play for you. You will enjoy my companion in my Double mattress
                                    bed.</span>
                              </p>
                              <p class="exclusive"><img width="20" src="https://img.icons8.com/flat-round/64/undefined/star--v1.png" />&nbsp;Model</p>
                           </article>
                           <div class="hide-for-small-only profile-buttons clearfix">
                              <div class="fav-button-wrap">
                                 <div class="button new-fav-btn " data-id="33651"> <i class="fa fa-heart"></i>&nbsp;<span>Favourite</span>
                                 </div>
                              </div>
                              <div class="video-wrap"></div> <a class="button contact-me" href="profile/sweta.html"><i class="fa fa-info-circle"></i>&nbsp;More
                                 Info</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <section id="escort" class="escort row">
                  <div class="escort-profile-wrap-gallgold">
                     <div class="row">
                        <div class="large-3 medium-4 small-12 columns">
                           <div class="escort-image">
                              <a class="wrap-link" href="profile/trisha.html">
                                 <div style="position: absolute; width: 100%; top: 0px; text-align: center;">
                                    <img alt="Mumbai Escorts Book Now" src="<?php echo base_url() ?>assets/img/now_touring_15.png">
                                 </div>
                                 <img class=" lazyload" src="https://res.cloudinary.com/sygm/image/upload/f_auto/img/trisha1.jpg" data-src="https://res.cloudinary.com/sygm/image/upload/f_auto/img/trisha1.jpg" alt="Mumbai call girls">
                                 <div class="badges">
                                    <div class="escort-type right">
                                       <img src="<?php echo base_url() ?>assets/img/ml_gold_badge.png" alt="Call Girls" border="0">
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="large-9 medium-8 small-12 columns">
                           <header class="name">
                              <p class="name-gallgold">
                                 <img style="width:80px; float:right;" title="Escort Photos are 100% Verified" src="<?php echo base_url() ?>assets/img/photos_verified_black.png" alt="Photos have been verified" border="0"> <a class="name-gallgold" href="profile/trisha.html" target="_self">Trisha 25 &nbsp;<span class="red" style="font-size:0.8em;">Private Escorts </span><br><span style="font-size:0.8em;">Juhu, Mumbai</span></a>
                              </p>
                           </header>
                           <article class="details">
                              <p><span itemprop="description">Are you staying in Mumbai or arriving soon after
                                    searching for a few girls to perform, let us match!!
                                    My name is Trisha, An attractive woman that prefer to fulfill with a man
                                    as well as the pair (Two Men ). The desire to Try out something
                                    particular, however, also you cant perform together with your
                                    girlfriend, or Whether You're a few of feeling a small Naughty wish to
                                    complete Threesome yeah we could play this. I drive to every location in
                                    Mumbai which becomes easy to catch the things up.</span>
                              </p>
                              <p class="exclusive"><img width="20" src="https://img.icons8.com/flat-round/64/undefined/star--v1.png" />&nbsp;Elite Model</p>
                           </article>
                           <div class="hide-for-small-only profile-buttons clearfix">
                              <div class="fav-button-wrap">
                                 <div class="button new-fav-btn " data-id="33651"> <i class="fa fa-heart"></i>&nbsp;<span>Favourite</span>
                                 </div>
                              </div>
                              <div class="video-wrap"></div> <a class="button contact-me" href="profile/trisha.html"><i class="fa fa-info-circle"></i>&nbsp;More
                                 Info</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>

               <section id="escort" class="escort row">
                  <div class="escort-profile-wrap-gallgold">
                     <div class="row">
                        <div class="large-3 medium-4 small-12 columns">
                           <div class="escort-image">
                              <a class="wrap-link" href="profile/bhoomika.html">
                                 <div style="position: absolute; width: 100%; top: 0px; text-align: center;">
                                    <img alt="Mumbai Escorts Book Now" src="<?php echo base_url() ?>assets/img/now_touring_15.png">
                                 </div>
                                 <img class=" lazyload" src="https://res.cloudinary.com/sygm/image/upload/f_auto/img/bhoomika3.jpg" data-src="https://res.cloudinary.com/sygm/image/upload/f_auto/img/bhoomika3.jpg" alt="Female escorts Mumbai">
                                 <div class="badges">
                                    <div class="escort-type right">
                                       <img src="<?php echo base_url() ?>assets/img/ml_gold_badge.png" alt="Mumbai Escorts Gold" border="0">
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="large-9 medium-8 small-12 columns">
                           <header class="name">
                              <p class="name-gallgold">
                                 <img style="width:80px; float:right;" title="Escort Photos are 100% Verified" src="<?php echo base_url() ?>assets/img/photos_verified_black.png" alt="Photos have been verified" border="0"> <a class="name-gallgold" href="profile/bhoomika.html" target="_self">Bhoomika 23 &nbsp;<span class="red" style="font-size:0.8em;">
                                       Private Escorts </span><br>
                                    <span style="font-size:0.8em;">Powai, Mumbai</span></a>
                              </p>
                           </header>
                           <article class="details">
                              <p><span itemprop="description">If You're visiting Mumbai to get business or
                                    vacation, let's supply you with the Right holiday partner. Almost all of
                                    us concentrate at the supreme girl-friend Expertise (GFE) because we
                                    delight in achieving so.</span>
                              </p>
                              <p class="exclusive"><img width="20" src="https://img.icons8.com/flat-round/64/undefined/star--v1.png" />&nbsp;Call Girl</p>
                           </article>
                           <div class="hide-for-small-only profile-buttons clearfix">
                              <div class="fav-button-wrap">
                                 <div class="button new-fav-btn " data-id="33651"> <i class="fa fa-heart"></i>&nbsp;<span>Favourite</span>
                                 </div>
                              </div>
                              <div class="video-wrap"></div> <a class="button contact-me" href="profile/bhoomika.html"><i class="fa fa-info-circle"></i>&nbsp;More
                                 Info</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>


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
                  background: #b7021b;
                  padding: 6px 11px;
                  border-radius: 20px 0 0 20px;
                  color: #fff;
               }
            </style>
            <div class="container">
               <h3 class="main-heading text-warning ">OTHER FEMALE ESCORTS <span class="text-light">YOU MAY LIKE</span></h3>
               <div class="row">

                  <?php

                  foreach ($res as $results) {

                     $pro_post_imge = explode(',', $results['imge']);

                     $pro_alt_title = explode(',', $results['alt_title']);

                  ?>

                     <div class="col-6 col-sm-4 col-md-3 mb-3">

                        <a href="<?php echo base_url(); ?>escorts/<?php echo $results['title']; ?>/<?php echo $results['id']; ?>">
                           <div class="partners-item__thumb">
                              <h5 class="lc-name"><span class="icon-heart mr-1"></span><?php echo $results['title']; ?></h5>
                              <img id="subscrive_imge" class="blink-image img-fluid lazyload rounded" src="https://res.cloudinary.com/isabasu/image/upload/w_300/imgs/loading-newloc.svg" data-src="<?php echo base_url(); ?>uploads/profile/<?php echo $pro_post_imge[1]; ?>" alt="<?php echo $pro_alt_title[1]; ?>">
                           </div>
                        </a>

                     </div>

                  <?php } ?>

               </div>
            </div>
            <div class="mainopShadow"></div>
         </main>
      </div>
   </div>
   </div>
</section>