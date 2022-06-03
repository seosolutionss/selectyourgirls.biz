<!doctype html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title><?php if(!empty($row)) { foreach($row as $val) { echo $val[ 'meta_title'];} } ?></title>
    <meta name="description" content="<?php if(!empty($row)) { foreach($row as $val) { echo $val['meta_des'];} } ?>" />
    <link rel="shortcut icon" href="https://res.cloudinary.com/isabasu/image/upload/f_auto/assets/img/favicon.png" sizes="16x16">
    <link rel="canonical" href="<?php if(!empty($this->uri->segment(1))) {echo base_url().$this->uri->uri_string();} else {echo base_url();}  ?>" /> 
    <style><?php echo include('assets/css/bootstrap-4.6.css')?></style>
    <style><?php echo include('assets/css/fancybox.css')?></style>  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet"> 
    <style><?php echo include('assets/css/style.css')?></style>
    <style><?php echo include('assets/css/common.css')?></style>
    <style><?php include('assets/css/sidebar.css'); ?></style>
    <style>	<?php include('assets/css/quick-search.css'); ?></style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-RLS1V7CQ1J"></script>
 <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag("js",new Date());gtag("config","G-RLS1V7CQ1J");</script>
  </head>
  <body> 
   
<!-- section 1 header - for home page -->
<?php if(!empty($this->uri->segment(1))){?>
<style>.navbar{background:#000}.ban_img{margin-top: 3em;}</style> <?php }?>
   
    <nav class="navbar navbar-expand-lg navbar-dark sm-device" id="res-bg">
    <span class="icon-arrow-left" id="navPrev"></span>
       <div class="d-flex">
            <button onclick="myFunction()" class="navbar-toggler" type="button">
            <span class="icon-menu" id="icon-menu"></span>
            <span style="display:none" class="icon-cross" id="icon-cross"></span>
            </button>
             <a class="navbar-brand d-block d-lg-none" href="<?php echo base_url()?>"> 
                <img class="brand-logo" src="<?php echo base_url() ?>assets/img/logo.png" srcset="" alt="Selectyourgirls Mumbai">
              </a>
        </div> 
        <div class="d-block d-lg-none">
        <ul class="d-flex list-unstyled mb-0">
          <li class="child-social d-sm-block d-lg-none">
            
          <img src="https://img.icons8.com/material-outlined/24/ffffff/search--v1.png" onclick="openfilter()"/>
          </li>
            <li class="child-social d-none d-sm-block d-lg-none"><a href="<?php echo base_url()?>"><span class="icon-home3"></span></a></li>
            <li class="child-social"><a href="https://wa.me/919523402933"><span class="icon-whatsapp"></span></a></li>
            <li class="child-social"><a href="tel:+919523402933"><span class="icon-phone"></span></a></li>
            <li class="child-social d-none d-sm-block d-lg-none"><a href="<?php echo base_url()?>escorts-videos"><span class="icon-video-camera"></span></a></li>
          </ul>
          </div>
        <div class="collapse navbar-collapse" id="mobile-menu">
        
         <ul class="navbar-nav right-blow">
            <li class="nav-item">
              <span class="od-none" style="background-color: #f3f4f5;color: #000;">Menu <span class="float-right"><span class="icon-cross"></span> </span></span> 
            </li> 
            <li class="nav-item <?php if($this->uri->segment(1) == ''){echo 'active';}?>">
              <a class="nav-link" href="<?php echo base_url()?>"><img style="width:18px; margin-right:.25rem" src="https://img.icons8.com/glyph-neue/64/ffffff/home.png" alt="home icon" />Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(1) == 'mumbai-escorts'){echo 'active';} ?>">
             <a class="nav-link " href="<?php echo base_url()?>mumbai-escorts"><img style="width:18px; margin-right:.25rem;" src="https://img.icons8.com/material-sharp/48/ffffff/bodyguard-female.png" alt="gallery icon" />Mumbai Escorts</a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(1) == 'mumbai-call-girls'){echo 'active';} ?>">
              <a class="nav-link" href="<?php echo base_url().'mumbai-call-girls';?>"><img style="width:18px; margin-right:.25rem;" src="https://img.icons8.com/ios-filled/50/ffffff/teenager-female.png" alt="Female icon" />Call Girls</a>
            </li> 
            <li class="nav-item <?php if($this->uri->segment(1) == 'private-girls'){echo 'active';} ?>">
              <a class="nav-link" href="<?php echo base_url().'private-girls'?>"><img style="width:18px; margin-right:.25rem;" src="https://img.icons8.com/ios-filled/50/ffffff/service.png" alt="Private girl icon" />Private Girls</a>
            </li> 
            <li class="nav-item <?php if($this->uri->segment(1) == 'adult-room'){echo 'active';} ?>">
              <a class="nav-link " href="<?php echo base_url()?>adult-room"><img style="width:18px; margin-right:.25rem;" src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/ffffff/external-gallery-miscellaneous-kiranshastry-solid-kiranshastry.png" alt="Adult room icon" />Adult Rooms</a>
            </li>
           
            <li class="nav-item <?php if($this->uri->segment(1) == 'escorts-location'){echo 'active';} ?>">
              <a class="nav-link " href="<?php echo base_url()?>escorts-location"><img style="width:18px; margin-right:.25rem;" src="https://img.icons8.com/glyph-neue/64/ffffff/marker.png" alt="Location Icon" />Location</a>
            </li>
             <li class="nav-item <?php if($this->uri->segment(1) == 'escorts-category'){echo 'active';} ?>">
              <a class="nav-link " href="<?php echo base_url()?>escorts-category"><img style="width:18px; margin-right:.25rem;" src="https://img.icons8.com/ios-filled/50/ffffff/massage.png" alt="Massage icon" />Escorts Category</a>
            </li> 
            <li class="nav-item <?php if($this->uri->segment(1) == 'escorts-videos'){echo 'active';} ?>">
              <a class="nav-link " href="<?php echo base_url()?>escorts-videos"><img style="width:18px; margin-right:.25rem;" src="https://img.icons8.com/material/24/ffffff/video.png" alt="Video Icon" />Videos</a>
            </li>
            <!-- <li class="nav-item <?php if($this->uri->segment(1) == 'female-escorts-price'){echo 'active';} ?>">
              <a class="nav-link " href="<?php echo base_url()?>female-escorts-price"> <img style="width:18px; margin-right:.25rem;" src="https://img.icons8.com/glyph-neue/64/ffffff/rupee.png" alt="Price Icon" />Price</a>
            </li>  -->
            <li class="nav-item <?php if($this->uri->segment(1) == 'callgirl-phone-number'){echo 'active';} ?>">
              <a class="nav-link " href="<?php echo base_url()?>callgirl-phone-number"><img style="width:18px; margin-right:.25rem;" src="https://img.icons8.com/ios-glyphs/30/ffffff/duplicate-contacts.png" alt="Contact icon" />Contact us</a>
            </li> 
           
          </ul>
         <div class="main-sha"> 
          <ul class="sharing pl-0"> 
              <li class="sharing-li"><a href="#"><span class="icon-whatsapp mr-2"></span><span class="cont-text">WhatsApp Now</span></a></li>
              <li class="sharing-li"><a href="#"><span class="icon-phone mr-2"></span><span class="cont-text">Call Now</span></a></li> 
          </ul>
        </div>
        </div>
        <span class="icon-arrow-right" id="navNext"></span> 
      </nav>  
      <div class="container-fluid pt-5">
		<div class="row" id='mobbanner'>
			<div class="col-12 p-0 d-sm-block d-md-none d-lg-none">
				<img class="img-fluid" src="<?php echo base_url() . 'assets/images/selectyourgirls-mobile-banner.jpg'; ?>" alt="">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 d-none d-lg-block d-md-block text-center">
				<img src="<?php echo base_url() . 'assets/images/header-logo-2022.png'; ?>" class="img-fluid" alt="">
			</div>
		</div>
    
<section>

<div class="row py-3">
  <div class="d-none d-lg-block col-lg-3" id='filter'>

<div class="panel mb-3 text-center rounded d-none d-lg-block">
<img class="img-fluid" src="https://res.cloudinary.com/sygm/image/upload/f_auto/img/Mumbai.gif" alt="">
</div>
<div class="panel rounded text-center mb-3 d-none d-lg-block">
<p>Follow the whatsApp chat</p>
<img class="img-fluid p-4" src="https://res.cloudinary.com/sygm/image/upload/f_auto/img/wgatsapp.gif" alt="">
</div>


<div class="panel rounded mb-3">
<p class="text-uppercase">Quick <span class="text-primary">Search</span></p>
<div class="col-12 big-px-0 small-my-1 opt-sel icon-location">
  <div class="dropdown p-3">
     <button style="color: #00000069;" class="rounded-0 btn btn-light dropdown-toggle w-100 btn-srch-pad" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        All Location
     </button>
     <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
        <li class="selected"><a class="dropdown-item">All Locations</a></li>
        <?php $i = 1;
        foreach ($get_loc as $res) { ?>
           <li><a class="dropdown-item" href="<?php echo base_url(); ?>location/<?php echo str_replace(' ', '-', $res['loc_title']);  ?>/<?php echo $res['id'];  ?>"><?php echo $res['loc_title'];  ?></a></li>
        <?php $i++;
        } ?>
     </ul>
  </div>
</div>
<div class="col-12 big-px-0 small-my-1 opt-sel icon-profile">


  <div class="dropdown p-3">
     <button style="color: #00000069;" class="rounded-0 btn btn-light dropdown-toggle w-100 btn-srch-pad" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        All Category
     </button>
     <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
        <li class="selected"><a class="dropdown-item">All Categories</a></li>
        <?php $i = 1;
        foreach ($get_cat as $row) { ?>
           <!--remove a tag and use form -->
           <li><a class="dropdown-item" href="<?php echo base_url(); ?>category/<?php echo str_replace(' ', '-', $row['cat_title']);  ?>/<?php echo $row['id'] ?>"><?php echo $row['cat_title']; ?></a></li>
        <?php $i++;
        } ?>
     </ul>
  </div>

</div>

<div class="col-12 big-px-0 small-my-1 opt-sel icon-woman">


  <div class="dropdown p-3">
     <button style="color: #00000069;" class="rounded-0 btn btn-light dropdown-toggle w-100 btn-srch-pad" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        All Profile
     </button>
     <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
        <li class="selected"><a class="dropdown-item">All Profiles</a></li>
        <?php foreach ($all_prof as $all_prof) { ?>
           <li><a class="dropdown-item" href="<?php echo base_url(); ?>escorts/<?php echo str_replace(' ', '-', $all_prof['title']);  ?>/<?php echo $all_prof['id'] ?>"><?php echo $all_prof['title']; ?></a></li>
        <?php $i++;
        } ?>
     </ul>
  </div>

</div>

</div>

<div class="panel button-panel rounded text-center mb-3 p-3">

<a href="<?php echo base_url().'escorts-type/new-escorts/27';?>" class="big-button blue"><img width="30" src="https://img.icons8.com/ios-glyphs/30/ffffff/new.png" />&nbsp; New
  Escorts</a>
<a href="<?php echo base_url().'escorts-type/one-night-stand/28';?>" class="big-button blue"><img width="30" src="https://img.icons8.com/ios-glyphs/30/ffffff/1-c.png" />&nbsp;One Night Stand</a>
<a href="<?php echo base_url().'escorts-type/threesome/29';?>" class="big-button blue"><img width="30" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/30/ffffff/external-three-user-interface-tanah-basah-glyph-tanah-basah.png" />&nbsp;Threesome</a>
<a href="<?php echo base_url().'escorts-type/women-seeking-men/30';?>" class="big-button"><img width="30" src="https://img.icons8.com/material-two-tone/30/000000/granny-lesbian.png" />&nbsp;Women Seeking Men</a>

<a href="<?php echo base_url().'escorts-type/busty-girls/31';?>" class="big-button"><img width="30" src="https://img.icons8.com/fluency-systems-filled/48/000000/kim-kardashian.png" />&nbsp;Busty</a>
<a href="<?php echo base_url().'escorts-type/party-girls/32';?>" class="big-button"><img width="30" src="https://img.icons8.com/ios-filled/50/undefined/dancing-party.png" />&nbsp;Party Girls</a>
<a href="<?php echo base_url().'escorts-type/girlfriend-experience/33';?>" class="big-button"><img width="30" src="https://img.icons8.com/ios-filled/50/undefined/date.png" />&nbsp;GF Experience</a>
<a href="<?php echo base_url().'escorts-type/dating-girls/34';?>" class="big-button"><img width="30" src="https://img.icons8.com/ios-filled/50/undefined/novel--v1.png" />&nbsp;Dating Girl</a>

<a href="<?php echo base_url().'escorts-type/vip-girls/35';?>" class="big-button"><img width="30" src="https://img.icons8.com/ios-filled/50/undefined/vip.png" />&nbsp;VIP
  Girls</a>
<a href="<?php echo base_url().'escorts-type/massage-girls/36';?>" class="big-button"><img width="30" src="https://img.icons8.com/external-jumpicon-glyph-ayub-irawan/32/undefined/external-crown-investment-jumpicon-glyph-jumpicon-glyph-ayub-irawan.png" />&nbsp;Premium Massage</a>
<a href="<?php echo base_url().'escorts-type/call-girls/37';?>" class="big-button"><img width="30" src="https://img.icons8.com/fluency-systems-filled/48/undefined/call-female.png" />&nbsp;Call
  Girls</a>
<a href="<?php echo base_url().'escorts-type/teenage-escorts/38';?>" class="big-button"><img width="30" src="https://img.icons8.com/ios-filled/50/undefined/18.png" />&nbsp;18+ Teen Escort</a>
<a href="<?php echo base_url().'escorts-type/young-escorts/39';?>" class="big-button"><img width="30" src="https://img.icons8.com/ios-filled/50/undefined/teenager-female.png" />&nbsp;Young
  Escort</a>
<a href="<?php echo base_url().'escorts-type/strip-club/40';?>" class="big-button"><img width="30" src="https://img.icons8.com/ios-glyphs/30/undefined/womens-shoe.png" />&nbsp;Strip
  Clubs</a>
<a href="<?php echo base_url().'escorts-type/call-aunties/41';?>" class="big-button"><img width="30" src="https://img.icons8.com/ios-glyphs/30/undefined/womans-hair.png" />&nbsp;Call Aunties</a>
<a href="<?php echo base_url().'escorts-type/foreigner-escorts/42';?>" class="big-button"><img width="30" src="https://img.icons8.com/windows/32/undefined/globe.png" />&nbsp;Foreigner</a>
</div>

<div class="panel mb-3 text-center rounded social-icon">
<a href=""><span class="icon-twitter"></span></a>
<a href=""><span class="icon-instagram"></span></a>
<a href=""><span class="icon-youtube"></span></a>
<a href=""><span class="icon-facebook"></span></a>
</div>


</div>