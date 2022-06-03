
   <style type="text/css">
      *,
      ::after,
      ::before {
         box-sizing: border-box
      }

      ol {
         margin-top: 0;
         margin-bottom: 1rem
      }

      small {
         font-size: 80%
      }

      button {
         border-radius: 0
      }

      button:focus {
         outline: 1px dotted;
         outline: 5px auto -webkit-focus-ring-color
      }

      button,
      input,
      textarea {
         margin: 0;
         font-family: inherit;
         font-size: inherit;
         line-height: inherit
      }

      button,
      input {
         overflow: visible
      }

      button {
         text-transform: none
      }

      textarea {
         overflow: auto;
         resize: vertical
      }

      ::-webkit-file-upload-button {
         font: inherit;
         -webkit-appearance: button
      }

      .lead {
         font-size: 1.25rem;
         font-weight: 300
      }

      small {
         font-size: 80%;
         font-weight: 400
      }

      .container {
         width: 100%;
         padding-right: 15px;
         padding-left: 15px;
         margin-right: auto;
         margin-left: auto
      }

      @media(min-width:576px) {
         .container {
            max-width: 540px
         }
      }

      @media(min-width:768px) {
         .container {
            max-width: 720px
         }
      }

      @media(min-width:992px) {
         .container {
            max-width: 960px
         }
      }

      @media(min-width:1200px) {
         .container {
            max-width: 1140px
         }
      }

      .row {
         display: -ms-flexbox;
         display: flex;
         -ms-flex-wrap: wrap;
         flex-wrap: wrap;
         margin-right: -15px;
         margin-left: -15px
      }

      /* .col-custom,
      .col-12-custom,
      .col-sm-4-custom {
         position: relative;
         width: 100%;
         padding-right: 15px;
         padding-left: 15px
      } */

      /* .col-custom {
         -ms-flex-preferred-size: 0;
         flex-basis: 0;
         -ms-flex-positive: 1;
         flex-grow: 1;
         max-width: 100%
      } */

      .col-12-custom {
         -ms-flex: 0 0 100%;
         flex: 0 0 100%;
         max-width: 100%
      }

      @media(min-width:576px) {
         .col-sm-4-custom {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
         }
      }

      .form-control {
         display: block;
         width: 100%;
         height: calc(1.5em+.75rem+2px);
         padding: .375rem .75rem;
         font-size: 1rem;
         font-weight: 400;
         line-height: 1.5;
         color: #495057;
         background-color: #fff;
         background-clip: padding-box;
         border: 1px solid #ced4da;
         border-radius: .25rem;
         transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
         /* font-family: 'Francois One', sans-serif */
      }

      @media(prefers-reduced-motion:reduce) {
         .form-control {
            transition: none
         }
      }

      .form-control::-ms-expand {
         background-color: transparent;
         border: 0
      }

      .form-control:focus {
         color: #495057;
         background-color: #fff;
         border-color: #80bdff;
         outline: 0;
         box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
      }

      .form-control::-webkit-input-placeholder {
         color: #6c757d;
         opacity: 1
      }

      .form-control::-moz-placeholder {
         color: #6c757d;
         opacity: 1
      }

      .form-control:-ms-input-placeholder {
         color: #6c757d;
         opacity: 1
      }

      .form-control::-ms-input-placeholder {
         color: #6c757d;
         opacity: 1
      }

      .form-control:disabled {
         background-color: #e9ecef;
         opacity: 1
      }

      textarea.form-control {
         height: auto
      }

      .form-group {
         margin-bottom: 1rem
      }

      .form-text {
         display: block;
         margin-top: .25rem
      }


      @media(prefers-reduced-motion:reduce) {
         .btn {
            transition: none
         }
      }

      .btn:hover {
         /* color: #212529; */
         text-decoration: none
      }

      .btn:focus {
         outline: 0;
         box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
      }

      .btn:disabled {
         opacity: .65
      }

      .btn-primary {
         color: #fff;
         background-color: #ff6402 !important;
         border-color: #007bff
      }

      .btn-primary:hover {
         color: #fff;
         background-color: #0069d9;
         border-color: #0062cc
      }

      .btn-primary:focus {
         box-shadow: 0 0 0 .2rem rgba(38, 143, 255, .5)
      }

      .card {
         position: relative;
         display: -ms-flexbox;
         display: flex;
         -ms-flex-direction: column;
         flex-direction: column;
         min-width: 0;
         word-wrap: break-word;
         background-color: #0000006b;
         background-clip: border-box;
         border: 1px solid rgba(0, 0, 0, .125);
         border-radius: .25rem;
         margin-bottom: 10px
      }

      .card-body {
         -ms-flex: 1 1 auto;
         flex: 1 1 auto;
         padding: 7px
      }

      .card-header {
         padding: .75rem 1.25rem;
         margin-bottom: 0;
         background-color: rgba(0, 0, 0, .03);
         border-bottom: 1px solid rgba(0, 0, 0, .125)
      }

      .card-header:first-child {
         border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
      }

      .breadcrumb {
         display: -ms-flexbox;
         display: flex;
         -ms-flex-wrap: wrap;
         flex-wrap: wrap;
         padding: .75rem 1rem;
         margin-bottom: 1rem;
         list-style: none;
         background-color: #e9ecef;
         border-radius: .25rem
      }

      .breadcrumb-item+.breadcrumb-item {
         padding-left: .5rem
      }

      .breadcrumb-item+.breadcrumb-item::before {
         display: inline-block;
         padding-right: .5rem;
         color: #6c757d;
         content: "/"
      }

      .breadcrumb-item+.breadcrumb-item:hover::before {
         text-decoration: underline
      }

      .breadcrumb-item+.breadcrumb-item:hover::before {
         text-decoration: none
      }

      .breadcrumb-item.active {
         color: #6c757d
      }

      .jumbotron {
         margin-bottom: 2rem;
         border-radius: .3rem;
         background-color: transparent !important
      }

      @media(min-width:576px) {
         .jumbotron {
            padding: 4rem 2rem
         }
      }


  

      .bg-light {
         background-color: transparent !important
      }

      .mb-0 {
         margin-bottom: 0 !important
      }

      .mb-3 {
         margin-bottom: 1rem !important
      }

      .mx-auto {
         margin-right: auto !important
      }

      .mx-auto {
         margin-left: auto !important
      }

      .text-right {
         text-align: right !important
      }

      .text-center {
         text-align: center !important
      }

      .text-uppercase {
         text-transform: uppercase !important
      }

      .text-white {
         color: #fff !important
      }

      .text-muted {
         color: #fff !important;
         /* font-family: 'Francois One', sans-serif */
      }

      label {
         font-size: 16px;
         /* font-family: 'Francois One', sans-serif; */
         color: #fff
      }

      .stats {
         /* font-family: 'Francois One', sans-serif; */
         font-size: 20px;
         color: #feb500;
         text-align: left
      }



      .title-model {
         font-size: 25px;
         color: #fca200;
         /* font-family: 'Francois One', sans-serif; */
         font-weight: normal;
         margin: 5px 5px
      }

      #suc_msg {
         color: #fff
      }



    

   </style>
<div class="col-12 col-sm-12 col-md-12 col-lg-9" id="block_281">
      <main>
      <div class="container">
         <h1 class="main-heading text-warning"> Contact Mumbai Escorts Girls 24/7
         <span class="text-light">phone number</span> </h1>
         <p>If you have any query about us or want to book , please fill the form below.</p>
         <p>
         For any advertising requirements or to discuss business, please contact us by phone or email.


         </p>
      </div>

   
   <div class="container my-5">
      <div class="row">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header bg-danger text-white"><i class="fa fa-envelope" aria-hidden="true"></i> Contact us.</div>
               <div class="card-body">
                  <form action="contact" method="post">
                     <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" name="name" placeholder="Enter name" required="">
                     </div>
                     <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp" name="email" placeholder="Enter email" required="">
                     </div>
                     <div class="form-group">
                        <label for="email">Mobile No</label>
                        <input type="number" class="form-control" aria-describedby="emailHelp" name="phone" placeholder="Enter Mobile No">
                     </div>
                     <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="6" name="message" required="" value=""></textarea>
                     </div>
                     <div class="mx-auto">
                        <button type="submit" name="submit" value="submit" class="btn btn-danger text-right">
                            <img class="mr-1" style="width: 20px;" alt="contact our Mumbai escorts"
                src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/ffffff/external-send-essentials-tanah-basah-glyph-tanah-basah.png"/> 
                Submit</button>
                     </div>
                  </form>
               </div>
               <span id="suc_msg" style="display: none;"></span>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card bg-light mb-3">
               <div class="card-header bg-danger text-white text-uppercase"><i class="fa fa-home" aria-hidden="true"></i> Address</div>
               <div class="card-body">
                  <p class="stats">Please feel free to contact us by telephone or e-mail</p>
                  <p>Andheri,Mumbai</p>
                  <p>Maharashtra,IN</p>
                  <p>India</p>
                  <p>Email : <a href="mailto:contacts@isabasu.com">mail4selectgirls@gmail.com</a></p>
                  <p>phone 1: <a href="tel:+91 9523402933">+91 9523402933</a></p>
                  <!-- <p>phone 2: <a href="tel:+91 9523402933">+91 9523402933</a></p> -->
               </div>
            </div>
         </div>
      </div>
   </div>
   <script>
      setTimeout(function() {
         $('#suc_msg').fadeOut('fast');
      }, 3000);
   </script>
</main>
      </div>
   </div>
</div>
</section>

