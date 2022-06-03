<style type="text/css">
   .container-model {
      width: 80%;
      margin: 0 auto;
      margin-bottom: 30px
   }

   .secondary-text {
      
      color: #fff;
      font-size: 16px;
      font-weight: normal
   }

   .secondary-header {
      font-size: 30px;
      color: #fca200;
      border-bottom: 2px solid #fff;
      text-transform: uppercase
   }

   @media(max-width:426px) {
      .container-model {
         width: 96%;
         margin: 0 auto
      }

      h1.secondary-header {
         font-size: 28px;
         color: #fca200
      }
   }

   h1.secondary-header {
      margin-top: 25px
   }

   p.MsoNormal {
      color: #fff;
      font-size: 15px;
     
   }

   .faq-heading h3 {
      color: #ff6400;
      font-weight: normal
   }

   ul.faqs.list-unstyled {
      list-style: none;
      padding: 0
   }

   img.img-responsive {
      width: 100%
   }

   span.news-date-block.text-golden {
      color: #fca200;
     
   }
</style>


 <picture>
    <source media="(max-width: 767px)" data-srcset="https://res.cloudinary.com/isabasu/image/upload/f_auto/imgs/blog-det-s.webp" 
    alt="Escorts Bangalore" srcset="https://res.cloudinary.com/isabasu/image/upload/f_auto/imgs/blog-det-s.webp">
    <img class="ban_img" src="https://res.cloudinary.com/isabasu/image/upload/f_auto/imgs/blog-det.webp" 
    data-src="https://res.cloudinary.com/isabasu/image/upload/f_auto/imgs/blog-det.webp" alt="Escorts service Bangalore">
 </picture>

<div class="container-model pt-5">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-12 col-12">
            <?php foreach ($res as $row) { ?>
               <h1 class="main-heading text-warning"><?php echo $row['blog_title'] ?></h1>
               <?php echo $row['blog_des'] ?>
            <?php } ?>
         </div>
      </div>
   </div>
</div>