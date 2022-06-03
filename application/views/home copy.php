<style>
	<?php echo include('assets/css/slick.css') ?>.cat-slider a img {
		height: 100%;
		width: 100%;
		padding: 10px;
	}
</style>
<!-- search section  -->
<style>
	<?php include('assets/css/leyer-2.css'); ?>
</style>
<div class="parallax-mirror">
	<!-- <img class="parallax-slider img-fluid" src="https://freiertreff.de/styles/xenith/xenith/bg.jpg" alt="Bangalore Escorts"> -->
	<div class="leyer-2">
		<span class="bann-til">Mumbai Escorts</span>
		<span class="bann-sub-title">THE MOST STYLISH AND FASHIONABLE ELITE ESCORTS AGENCY</span>
		<a href="tel:919741351188" class="bann-btn"><span class="icon-phone mr-2"></span> 974 135 1188</a>
		<a href="tel:919523402933" class="bann-btn"><span class="icon-whatsapp mr-2"></span> 990 112 4050</a>

		<div class="cov">
			<div class="container">
				<h1 class="srch-til">Your Dream Escorts is Here</h1>
				<div class="text-center" id="errMsg"></div>
				<div class="row srch-boundry my-2">
					<div class="col-md-6 col-lg-4 col-12 big-px-0 small-my-1 opt-sel icon-location">
						<div class="dropdown" style="margin-bottom: 8px;">
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
					<div class="col-md-6 col-lg-4 col-12 big-px-1 small-my-0 opt-sel icon-profile">


						<div class="dropdown" style="margin-bottom: 8px;">
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
					<div class="col-md-6 col-lg-4 col-12 big-px-0 small-my-1 opt-sel icon-woman">


						<div class="dropdown" style="margin-bottom: 8px;">
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
					<!-- <div class="col-md-1 col-12"></div>   -->
					<div class="col-lg-12 col-md-6 px-lg-0 mt-lg-2">
						<div class="input-group btn-grp-margin">
							<span class="input-group-prepend">
								<div class="no-radius input-group-text bg-light border-right-0"><span class="icon-search"></span></div>
							</span>
							<input class="btn-srch-pad form-control py-2 border-left-0 border" type="search" placeholder="Search" id="search">
							<span class="input-group-append">
								<button class="no-radius btn btn-danger border-left-0" id="srch-btn" type="submit" name="submit" value="submit">
									Search
								</button>
							</span>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>


</div>









<!-- section 3 start now  -->
<style>
	.pera-style-1 {
		color: #000;
		font-size: 18px;
		argin-top: 15px;
	}

	#block_281 {
		overflow: hidden;
		min-height: auto;
		padding-bottom: 30px;
		padding-top: 30px;
		background: #fff;
	}

	#block_281 .divider-top {
		background-image: none;
		width: 100%;
		position: absolute;
		top: 0px;
		transform: rotateY(180deg);
		background-repeat: repeat-x;
		background-position: 0px 0px;
		background-size: 100% 58px;
		height: 58px;
		z-index: 0;
	}

	#block_281 .divider-bottom {
		background-image: none;
		width: 100%;
		position: absolute;
		bottom: 0px;
		transform: rotateY(180deg);
		background-repeat: repeat-x;
		background-position: 0px 0px;
		background-size: 100% 58px;
		height: 58px;
		z-index: 0;
	}




	#block_281 .text-block__image {
		display: flex;
		align-items: center;
		justify-content: center;
		max-width: 377.773px;
		margin-left: 18px;
	}

	#block_281 .text-block__image img {
		max-width: 377.773px;
		transform: rotate(0deg);
		filter: brightness(110%) contrast(129%) saturate(100%) blur(0px) hue-rotate(0deg);
	}

	#block_281 .text-block__description {
		width: 100%;
		padding-top: 12px;
		padding-left: 0px;
		padding-right: 0px;
	}

	@media (max-width: 768px) {
		#block_281 .text-block__image {
			margin-left: 0px;
			margin-right: 0px;
			max-width: 100%;
		}

		#block_281 .text-block__description {
			margin-bottom: 18px;
		}
	}

	@media (max-width: 600px) {
		#block_281 .text-block__image img {
			max-width: 100%;
		}
	}

	.text-bold {
		font-weight: 600;
	}

	#block_1 .component_filter_form_group input.form-control:-internal-autofill-selected {
		background-color: #e1f4fa !important;
		color: #334e6e !important;
	}

	.f18 {
		font-size: 18px;
	}
</style>
<div id="block_281">
	<div class="text-block-with-image ">
		<div class="bg"></div>
		<div class="divider-top"></div>
		<div class="divider-bottom"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="d-md-flex align-items-start">
						<div class="text-block__description style-text-white">
							<h1 class="main-heading text-left text-danger">Mumbai Escorts
								<span class="text-secondary"> Have it or Grab it!!!</span>
							</h1>
							<p class="pera-style-1 text-left">We are Mumbai's No.1 escorts service provider as it connects you with so many hot and attractive girls, which will force your banana to fire right away! 🤣🤣🤣</p>
							<p class="pera-style-1 text-left">We are in this escorts industry since 2010, and we are proud to say that no one can beat us in quality service because of our trained queens.
							</p>
							<h4 class="text-left text-bold text-danger">Some Walkthroughs to our SYG Mumbai Escorts</h4>

							<ul class="text-dark f18">
								<li>Damn sure! You will like the service.</li>
								<li>The college girls you select will be the same you will meet.</li>
								<li>There are also some Dummy Profiles listed below, Why Dummy Profile escorts?</li>
								<li>24/7 service,</li>
								<li>We offer only real profiles. Get a list of escorts on <a class="text-danger" href="https://wa.me/919523402933">WhatsApp now</a>.</li>

							</ul>
							<p><br></p>
							<a class="btn btn-danger mb-1" href="tel:+919523402933"> <span class="icon-phone mr-1"></span> Call Now</a>
							<a class="btn btn-success mb-1" href="https://wa.me/919523402933"> <span class="icon-whatsapp mr-1"></span> WhatsApp Now</a>

						</div>
						<div class="text-block__image">
							<img src="<?php echo base_url() ?>assets/images/sexy-girl.jpg" alt="" title="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- section 2 where to begin  -->
<style>
	.begin_heading {
		color: #fff;
		font-size: 60px;
		font-weight: 900;
		text-transform: uppercase;
		line-height: 70px
	}

	.begin_box_number {
		color: #ffffff;
		font-size: 5rem;
		text-align: center;
		margin: 0 auto;
		display: block;
		font-weight: 700
	}

	.begin_box_heading {
		font-size: 18px;
		text-transform: uppercase;
		font-weight: 600;
		color: rgb(255, 255, 255)
	}

	.begin_box_para {
		color: rgb(255, 255, 255);
		font-weight: 400;
		width: 100%;
		font-size: 16px;
	}

	@media screen and (max-width: 767px) {
		.begin_box_para {
			font-size: 15px;
		}
	}

	@media screen and (max-width: 575px) {
		.begin_box_para {
			width: 310px;
			margin: 0 auto;
		}
	}

	@media screen and (max-width: 374px) {
		.begin_box_para {
			width: 100%;

		}
	}

	@media(max-width:425px) {
		.begin_heading {
			text-align: center;
			line-height: .923em;
			font-size: 50px;
		}
	}



	.book-now-btn {
		margin: 0 auto;
		display: block
	}
</style>
<section class="bg-danger py-5">
	<div class="container">
		<div class="text-center">
			<h2 class="begin_heading text-sm-center">HOW TO BEGIN?</h2>
			<p class="text-center">Want to book a Mumbai Escorts on our panel? Follow these 4 easy steps.</p>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-3 col-sm-6">
				<div class="begin_box text-center">
					<span class="begin_box_number"> 1 </span>
					<h6 class="begin_box_heading mt-2">Incall or Outcall</h6>
					<p class="begin_box_para mt-2">In Incall you visit our hotel & in Outcall girl visit your residence.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 col-sm-6">
				<div class="begin_box text-center">
					<span class="begin_box_number"> 2 </span>
					<h6 class="begin_box_heading mt-2">Choose an Escort</h6>
					<p class="begin_box_para mt-2">Select your favrouite escorts from available profiles.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 col-sm-6">
				<div class="begin_box text-center">
					<span class="begin_box_number"> 3 </span>
					<h6 class="begin_box_heading mt-2">Confirm Booking</h6>
					<p class="begin_box_para mt-2">Our receptionist will confirm by calling you on the mobile.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 col-sm-6">
				<div class="begin_box text-center">
					<span class="begin_box_number"> 4 </span>
					<h6 class="begin_box_heading mt-2">25 minutes to go </h6>
					<p class="begin_box_para mt-2">Our escorts will arrive within few minutes!</p>
				</div>
			</div>
			<div class="book-now-btn mt-4 mb-3">
				<a href="#" class="btn-style-1 btn"><img class="mr-2" style="width: 24px;" src="https://img.icons8.com/glyph-neue/64/000000/check-all.png" alt="select icon">Select your Escorts Now!</a>
			</div>
		</div>
	</div>
</section>
<!--next section  -->
<style>
	.style-text-features-title {
		color: #ffffff;
		margin-bottom: 10px;
		padding-left: 0;
		padding-right: 0;
	}

	#block_217 {
		position: relative;
		min-height: auto;
		padding-bottom: 40px;
		padding-top: 55px;
	}




	#block_217 .bg:after {
		content: ' ';
		display: block;
		position: absolute;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100%;
	}

	#block_217 .block-features__title {
		margin-bottom: 8px;
		padding-left: 0px;
		padding-right: 0px;
	}

	#block_217 .feature-block__icon {
		display: flex;
		justify-content: center;
		align-items: center;
		box-sizing: content-box;
		margin-left: auto;
		margin-right: auto;
	}

	#block_217 .block-features__cards {
		margin-bottom: -30px;
	}

	#block_217 .block-features__cards .card {
		transition: background 0.15s ease-in-out;
	}

	#block_217 .block-features__cards .card:hover {
		background: inherit !important;
	}

	#block_217 .block-features__cards .card:hover .feature-block__icon {
		color: inherit !important;
	}

	#block_217 .features-card {
		margin-bottom: 30px;
	}

	#block_217 .features-card .block-features__card {
		display: flex;
		padding: 17px 20px 0px;
	}

	@media screen and (max-width: 1200px) and (min-width: 992px) {
		#block_217 .features-card .block-features__card {
			flex-flow: column
		}

		.card-content__desc {
			font-size: 16px;
		}
	}

	#block_217 .block-features__card-icon {
		margin-bottom: 10px;
		height: 75px;
		margin-right: 24px;
		align-self: flex-start;
		display: flex;
		align-items: center;
	}

	#block_217 .block-features__description {
		padding-left: 0px;
		padding-right: 0px;
	}

	@media (max-width: 992px) {
		#block_217 .block-features__content {
			margin-bottom: 30px;
		}

		#block_217 .features-card .block-features__card {
			flex-wrap: wrap;
		}
	}

	#block_1 .component_filter_form_group input.form-control:-internal-autofill-selected {
		background-color: #e1f4fa !important;
		color: #334e6e !important;
	}

	.font-icon-css {
		font-size: 55px;
		width: 55px;
		height: 55px;
		transform: rotate(0deg);
		color: #f3a806;
		text-shadow: none;
		border-radius: 0px;
		background: transparent;
		padding: 10px;
	}

	.res-card-desn {
		background: #181818;
		border: 1px solid #373737;
		box-shadow: 1px 1px 16px 0 rgb(0 0 0 / 16%);
		border-style: solid;
	}

	.styled-card-hover {
		background: rgba(20, 23, 21, 1);
	}
</style>
<div id="block_217" class="bg-dark">
	<div class="block-features ">

		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4">
					<div class="col-lg-10 pl-0 block-features__content">
						<div class="block-features__title style-title-features">
							<h4 class="main-heading text-warning">Reasons why <span class="text-light">you should try our escorts</span></h2>
						</div>
						<div class="block-features__description style-desc-features">
							<p><span style="color:#d9d9d9"><em style="font-style: italic">Our goal is to provide you with the perfect companionship at an affordable price.</em></span></p>
						</div>
					</div>
				</div>
				<div class="col-lg-8 block-features__cards">
					<div class="row">
						<div class="col-md-6 style-features-card">
							<span class="styled-card-hover">
								<div class="card features-card res-card-desn">
									<div class="block-features__card">
										<div class="block-features__card-icon">
											<span class="styled-card-icon-hover">
												<span class="feature-block__icon icon-images font-icon-css"></span>
											</span>
										</div>
										<div class="block-features__card-content">
											<div class="card-content__head style-text-features-title">
												<p><strong style="font-weight: bold">Genuine Profiles</strong></p>
											</div>
											<div class="card-content__desc style-text-features-desc" style="padding-left: 0px; padding-right: 0px;">
												<p><span style="color: #d9d9d9;">Get real photos directly to your email or WhatsApp.</span></p>
												<p><br></p>
											</div>
										</div>
									</div>
								</div>
							</span>
						</div>
						<div class="col-md-6 style-features-card">
							<span class="styled-card-hover">
								<div class="card features-card res-card-desn">
									<div class="block-features__card">
										<div class="block-features__card-icon">
											<span class="styled-card-icon-hover">
												<span class="feature-block__icon icon-heart font-icon-css"></span>
											</span>
										</div>
										<div class="block-features__card-content">
											<div class="card-content__head style-text-features-title">
												<p><strong style="font-weight: bold">Attractive Models</strong></p>
											</div>
											<div class="card-content__desc style-text-features-desc" style="padding-left: 0px; padding-right: 0px;">
												<p><span style="color: #d9d9d9;">Our hot & sexy escorts are simply impossible to resist. </span></p>
												<p><br></p>
											</div>
										</div>
									</div>
								</div>
							</span>
						</div>
						<div class="col-md-6 style-features-card">
							<span class="styled-card-hover">
								<div class="card features-card res-card-desn">
									<div class="block-features__card">
										<div class="block-features__card-icon">
											<span class="styled-card-icon-hover">
												<span class="feature-block__icon icon-coin-dollar font-icon-css"></span>
											</span>
										</div>
										<div class="block-features__card-content">
											<div class="card-content__head style-text-features-title">
												<p><strong style="font-weight: bold">Affordable prices</strong></p>
											</div>
											<div class="card-content__desc style-text-features-desc" style="padding-left: 0px; padding-right: 0px;">
												<p><span style="color: #d9d9d9;">All escort services you will find here are super affordable.</span></p>
												<p><br></p>
											</div>
										</div>
									</div>
								</div>
							</span>
						</div>
						<div class="col-md-6 style-features-card">
							<span class="styled-card-hover">
								<div class="card features-card res-card-desn">
									<div class="block-features__card">
										<div class="block-features__card-icon">
											<span class="styled-card-icon-hover">
												<span class="feature-block__icon icon-location2 font-icon-css"></span>
											</span>
										</div>
										<div class="block-features__card-content">
											<div class="card-content__head style-text-features-title">
												<p><strong style="font-weight: bold">40+ Locations</strong></p>
											</div>
											<div class="card-content__desc style-text-features-desc" style="padding-left: 0px; padding-right: 0px;">
												<p><span style="color: #d9d9d9;">We provide escorts services within 50 km of Bengaluru.</span></p>
												<p><br></p>
											</div>
										</div>
									</div>
								</div>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<!-- section 4 gallery  -->
<style>
	.girl-profile-thumb {
		position: relative;
		margin-bottom: 30px;
		overflow: hidden;
		border-top-left-radius: 2px;
		border-top-right-radius: 2px
	}

	.girl-profile-thumb .pic {
		position: relative;
		/* background: url(https://freiertreff.de//images/imageplaceholder.jpg) no-repeat; */
		background-size: cover;
		background-position: center
	}

	.girl-profile-thumb .pic img {
		width: 100%
	}

	.girl-profile-thumb .girl-info {
		display: none
	}

	.girl-profile-thumb:hover .girl-info {
		background: #f3a806;
		color: #fff;
		padding: 10px;
		text-align: center;
		position: absolute;
		left: 0;
		top: 0;
		height: 100%;
		display: inline-block;
		width: 80%
	}

	.girl-profile-thumb .girl-info .h5 {
		font-size: 20px;
		font-weight: 600;
		text-transform: uppercase
	}

	.girl-profile-thumb .girl-info table {
		text-align: left
	}

	.girl-profile-thumb .girl-info table tr td {
		font-size: 14px;
		padding: 8px 0;
		width: 50%;
		font-weight: 500
	}

	.girl-profile-thumb .girl-info table tr td:last-child {
		text-transform: capitalize
	}

	.inner-page {
		padding: 30px 0 30px
	}

	.available-inner .col-md-3 {
		margin-bottom: 30px
	}

	.book-now {
		padding: 0.7em 3em;
		;
		font-size: 16px;
		color: #000;
		text-transform: uppercase;
		font-weight: 500;
		border: 0;
		display: inline !important;
		text-align: center;
		width: 100%;
		margin-top: 10px;
		border-radius: 20px !important;
		line-height: 36px;
		background: #f3a806;
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#cfd1d2', GradientType=0);
		font-family: 'Montserrat', sans-serif
	}

	.available-inner .col-md-3 {
		margin-bottom: 30px
	}

	.book-now:hover,
	.book-now:active,
	.book-now:focus {
		text-decoration: none
	}

	.available-book {
		margin-bottom: 0
	}


	@keyframes blinker1 {
		0% {
			color: transparent
		}

		50% {
			color: #400
		}

		100% {
			color: transparent
		}
	}

	.ribbon {
		border: -13px solid transparent;
		border-bottom: 49px solid #f3a806;
		position: absolute;
		display: none;
		bottom: -12px;
		left: -29px;
		padding: 0 10px;
		width: 102px;
		text-align: center;
		color: #450000;
		size: 14px;
		-webkit-transform: rotate(-45deg);
		-moz-transform: rotate(-45deg);
		-ms-transform: rotate(-45deg);
		-o-transform: rotate(-45deg);
		transform: rotate(41deg)
	}

	.ribbon .txt {
		position: absolute;
		top: 2px;
		left: -11px;
		color: #400;
		font-size: 12px;
		text-transform: capitalize;
		right: 0;
		animation: blinker1 1s infinite;
		line-height: 20px
	}

	.row.available-inner {
		position: relative
	}

	.card-ft.name {
		text-transform: uppercase;
		text-align: center;
		width: 100%;
		display: inline-block;
		padding: 15px 0;
		color: #fff;
		background: #151515;
		font-size: 14px;
		position: relative;
		line-height: 22px
	}

	.videoicon {
		position: relative;
		height: auto;
		width: 30px;
		margin-top: 15px;
		left: 0;
		background: #00000094;
		padding: 4px;
		border-radius: 4px;
		text-align: center;
		color: #fff;
		font-size: 14px;
		right: auto
	}

	.videoicon img {
		height: 22px !important;
		width: 22px !important
	}



	input[type=submit] {
		-webkit-appearance: button;
		cursor: pointer
	}

	a,
	a:hover {
		color: #f3a806
	}

	.catlocation {
		animation: locationblinker 1s infinite;
		color: #ed1c24;
		margin-top: 10px;
		display: block;
		letter-spacing: 0
	}

	@keyframes locationblinker {
		0% {
			color: transparent
		}

		50% {
			color: #3e0000
		}

		100% {
			color: transparent
		}
	}

	.inner-page .card-ft.name {
		border-radius: 0
	}

	.inner-page input.book-now {
		border-bottom-left-radius: 6px;
		border-bottom-right-radius: 6px;
		border-top-left-radius: 0;
		border-top-right-radius: 0
	}

	.inner-page input.book-now:hover {
		color: #000
	}

	input[type=submit] {
		font-family: 'Montserrat', sans-serif
	}

	.media_icon {
		top: 4px;
		right: 2px
	}

	::-webkit-input-placeholder {
		color: #ffffff80
	}

	.inner-page .nationality {
		text-align: left;
		padding-left: 15px;
		text-transform: initial;
		font-size: .9em;
		height: 8em;
	}

	.inner-page span.catlocation {
		text-align: left;
		padding-left: 15px
	}

	.inner-page .card-ft.name .age ul {
		padding-left: 0
	}

	.inner-page .card-ft.name .name {
		color: #f3a806;
		text-align: left;
		position: relative;
		margin-bottom: 5px;
		font-size: 14px;
		margin-top: 9px
	}

	.inner-page .card-ft.name .name:before {
		content: '';
		height: 1px;
		width: 50px;
		background: #f3a806;
		display: inline-block;
		position: absolute;
		bottom: -3px
	}

	@media(min-width:1199px) {





		.girl-profile-thumb .girl-info table tr td {
			font-size: 10px;
			padding: 0;
			width: 50%;
			font-weight: 500
		}

		.girl-profile-thumb:hover .girl-info {
			width: 100%
		}
	}

	@media(max-width:1199px) {
		.girl-profile-thumb:hover .girl-info {
			width: 100%
		}

		.girl-profile-thumb .girl-info table tr td {
			padding: 5px 5px
		}


	}

	@media(max-width:767px) {



		.girl-profile-thumb:hover .girl-info {
			width: 90%;
			display: none
		}

		.book-now,
		.card-ft.name {
			font-size: 14px;
			padding: 5px 10px
		}

		.ribbon {
			display: block
		}

		.card-ft.name {
			font-size: 12px;
			line-height: 22px;
			text-transform: none
		}

		.card-ft.name .age ul li {
			list-style: none;
			display: inline;
			text-align: left;
			width: 100%;
			font-weight: 300;
			text-transform: capitalize;
			font-size: 12px;
		}

		.card-ft.name .age ul li span {
			display: block
		}

		.nationality {
			text-align: left;
			padding-left: 15px
		}

		span.catlocation {
			text-align: left;
			padding-left: 15px
		}

		.card-ft.name .age ul {
			padding-left: 0
		}

		.card-ft.name .name {
			color: #f3a806;
			text-align: left;
			position: relative;
			margin-bottom: 17px;
			font-size: 14px;
			margin-top: 9px
		}

		.card-ft.name .name:before {
			content: '';
			height: 1px;
			width: 50px;
			background: #f2f2f2;
			display: inline-block;
			position: absolute;
			bottom: -3px
		}
	}

	@media only screen and (max-width:767px) {
		.inner-page .nationality {
			height: 11em;
		}

		.inner-page input.book-now {
			border-radius: 6px;
			font-family: Arial
		}

		.book-now,
		.card-ft.name {
			padding: 5px 5px
		}

		.girl-profile-thumb .pic {
			height: auto !important
		}

		.card-ft.name {
			font-size: 12px;
			line-height: 22px
		}

		.book-now {
			font-size: 15px;
			padding: 10px;
			line-height: normal
		}

		.catlocation {
			margin-top: 0
		}

		.row.available-inner {
			margin-top: 30px
		}

		.inner-page .card-ft.name .age ul li {
			font-size: 14px
		}
	}

	@media screen and (max-width: 390px) {
		.inner-page .nationality {
			height: 13em;
		}
	}







	.i-1.i-img {
		top: 0;
		right: 0;
		background: #333;
		padding: 5px;
		border-radius: 50%;
		margin: 3px 5px 3px 3px
	}

	.i-img {
		position: absolute !important;
		height: 45px;
		width: 45px;
		z-index: 6
	}

	.i1-svg {
		height: 100%;
		width: 100%;
		border: 1px solid #ffd400;
		border-radius: 50%;
		color: #ffd400
	}

	.mtop {
		font-size: 12px;
	}

	.fa-crown:before,
	.fa-st:before {
		position: relative;
		top: -9px;
		background: #333;
		padding: 0 8px;
		border-radius: 50%;
		font-size: .8rem
	}

	.profile-category {
		position: absolute;
		z-index: 3;
		top: 0;
		left: 0;
		margin: 6px 0 0 5px;
		padding: 0;
		background: #1b1b1b;
		border-radius: 0 0 3px 0;
		box-shadow: 0 0 6px 0 #000;
		font-size: 12px;
		text-transform: uppercase;
		padding-left: 2px;
		padding-right: 2px
	}

	.profile-category strong {
		color: #f00;
		font-size: .8em;
		text-transform: initial
	}

	.img-rate {
		width: 15px;
		display: inline-block;
		margin-top: 5px
	}

	.img-rate path {
		fill: #fca200
	}

	.rateus {
		list-style: none;
		margin: 0;
		left: 0;
		right: 0;
		padding: 0
	}

	.rateus li {
		display: inline;
		padding: 1px;
		color: #fff
	}

	.col-xl-24 {
		position: relative;
		width: 100%;
		padding-right: 15px;
		padding-left: 15px
	}

	@media(min-width:10000) {
		.col-xl-24 {
			-ms-flex: 0 0 20%;
			flex: 0 0 20%;
			max-width: 20%
		}
	}
</style>
<style>
	.button-pulse button {
		background: #fca200;
		width: 100%;
		height: 100%;
		position: absolute;
		top: 0;
		left: 0;
		z-index: 2;
		font-weight: 700;
	}

	.g-search {
		text-align: center !important;
		font-size: 1.2rem !important
	}

	.button__wrapper {
		display: inline-block;
		position: relative;
		width: 220px;
		height: 55px;
		display: flex;
		justify-content: center;
		align-items: center
	}

	button {
		background: transparent;
		color: #fff;
		border: 3px solid #fff;
		border-radius: 50px;
		padding: .8rem 2rem;
		outline: 0;
		cursor: pointer;
		position: relative;
		transition: .2s ease-in-out;
		letter-spacing: 0px
	}

	.pulsing:after {
		animation: pulsing1 .2s linear infinite
	}

	.pulsing {
		width: 99%;
		height: 99%;
		border-radius: 50px;
		z-index: 1;
		position: relative
	}

	.pulsing:before,
	.pulsing:after {
		content: "";
		position: absolute;
		width: 100%;
		height: 100%;
		border: inherit;
		top: 0;
		left: 0;
		z-index: 0;
		background: #fff;
		border-radius: inherit;
		animation: pulsing 2.5s linear infinite
	}

	.pulsing:after {
		animation: pulsing1 2.5s linear infinite
	}

	@keyframes pulsing {
		0% {
			opacity: 1;
			transform: scaleY(1) scaleX(1)
		}

		20% {
			opacity: .5
		}

		70% {
			opacity: .2;
			transform: scaleY(1.8) scaleX(1.4)
		}

		80% {
			opacity: 0;
			transform: scaleY(1.8) scaleX(1.4)
		}

		90% {
			opacity: 0;
			transform: scaleY(1) scaleX(1)
		}
	}

	@keyframes pulsing1 {
		0% {
			opacity: 1;
			transform: scaleY(1) scaleX(1)
		}

		20% {
			opacity: .5
		}

		70% {
			opacity: .2;
			transform: scaleY(1.3) scaleX(1.15)
		}

		80% {
			opacity: 0;
			transform: scaleY(1.3) scaleX(1.15)
		}

		90% {
			opacity: 0;
			transform: scaleY(1) scaleX(1)
		}
	}

	.main-content {
		display: grid;
		width: 100%
	}

	.main-content .item {
		display: grid;
		grid-template-rows: 1fr min-content;
		align-items: center;
		justify-content: center;
		height: 100px;
		flex-wrap: wrap;
		background: var(--bg-color)
	}

	.button-pulse .button__wrapper:hover .pulsing:after {
		animation: pulsing1 .2s linear infinite
	}

	@media screen and (max-width:590px) {
		.even-odd:nth-child(even) {
			padding: 0 10px 0 5px;
		}

		.even-odd:nth-child(odd) {
			padding: 0 5px 0 10px;
		}
	}

	#profile18,
	#profile19 {
		display: block;
	}

	@media screen and (max-width: 767px) {

		#profile18,
		#profile19 {
			display: block;
		}
	}

	@media screen and (max-width: 992px) {

		#profile18,
		#profile19 {
			display: none;
		}
	}

	.ico-center {
		display: flex !important;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		margin-top: -4px;
	}

	.cust-heart {
		font-size: 14px;
	}

	@media screen and (max-width: 575px) {
		.cust-heart {
			font-size: 11px;
		}

		.mtop {
			font-size: 8px;
		}

		.i-img {
			height: 35px;
			width: 35px;
		}
	}
</style>
<div class="inner-page headerdi mt-4 bg-red">
	<div class="container">
		<h2 class="main-heading">View our Popular <span class="text-light">Mumbai Escorts list, 2022</span> </h2>
		<div class="row available-inner" id="more_res">
			<?php $i = 0;
			$j = 0;
			function get_words($sentence, $count = 15)
			{
				preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
				return $matches[0];
			}
			foreach ($lim_prof as $row) {
				$pro_post_imge = explode(',', $row['imge']);
				$pro_alt_title = explode(',', $row['alt_title']);
				$avg_rate = round($row['rating']);
				$clodnary = explode('.', $pro_post_imge[0]);
			?>
				<div id="profile<?php echo $j; ?>" class="col-xl-3 col-lg-3 col-md-4  col-sm-6 col-6 my-3 even-odd">
					<div class="girl-profile-thumb available-book">
						<div class="pic">
							<div class="media_icon">
								<div class="i-1 i-img">
									<div class="i1-svg">
										<div class="ico-center">
											<i class="icon-heart cust-heart" aria-hidden="true"></i>
											<!-- <img src="https://img.icons8.com/ios-filled/50/ffd400/crown.png" alt="crown icon"/> -->
											<span class="mtop"><?php echo $row['p_type'] ?></span>
										</div>
									</div>
								</div>
								<a href="<?php echo base_url(); ?>escorts/<?php echo $row['title']; ?>/<?php echo $row['id']; ?>">
									<div class="profile-category"><a href="<?php echo base_url(); ?>escorts/<?php echo $row['title']; ?>/<?php echo $row['id']; ?>"><strong><?php echo strtoupper($row['state_name']) ?></strong></a>
									</div>
							</div>
							<a href="<?php echo base_url(); ?>escorts/<?php echo $row['title']; ?>/<?php echo $row['id']; ?>">
								<img class="lazyload rounded-top" data-src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/<?php echo $clodnary[0]; ?>.webp" src="https://res.cloudinary.com/esrvb/image/upload/f_auto/loading/profile_loading.svg" alt="<?php echo $pro_alt_title[0]; ?>">
							</a>
							<div class="ribbon">
								<div class="txt">Available</div>
							</div>
						</div>
						</a>
					</div>
					<div class="name card-ft mb-2 rounded-bottom">
						<div class="name ml-2 ml-md-3"><?php echo $row['title']; ?></div>
						<div class="text-left ml-2 ml-md-3">
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
						</div>
						<div class="nationality mt-2 px-2 px-md-3 py-3"><?php if (!empty($row['abt_profile'])) {
																															echo get_words(strip_tags($row['abt_profile'])) . '...';
																														} ?></div>
					</div>

				</div>
			<?php $j++;
			} ?>
			<div class="clearfix"></div>
		</div>
		<div class="main-content">
			<div class="d-sm-block d-md-none">
				<div class="item button-pulse " style="--bg-color:#f0710100;">
					<div class="button__wrapper">
						<div class="pulsing"></div>
						<button type="button" id="load_more_mobilee">More Escorts</button>
					</div>
				</div>
			</div>
			<div class="d-none d-md-block d-lg-none">
				<div class="item button-pulse " style="--bg-color:#f0710100;">
					<div class="button__wrapper">
						<div class="pulsing"></div>
						<button type="button" id="load_more_tab">More Escorts</button>
					</div>
				</div>
			</div>
			<div class="d-none d-lg-block">
				<div class="item button-pulse " style="--bg-color:#f0710100;">
					<div class="button__wrapper">
						<div class="pulsing"></div>
						<button type="button" id="load_more_desktopp">More Escorts</button>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>




<!-- section 5 followers like  -->
<style>
	.followers_box {
		background-image: url('assets/images/isabasu-bg.jpg');
		background-size: cover;
		background-position-x: left;
		width: 100%
	}

	.followers_heading {
		color: #fff;
		font-family: roboto, Sans-serif;
		font-size: 50px;
		font-weight: 900;
		text-transform: capitalize;
		line-height: 1em
	}

	.followers_para {
		color: #fff
	}

	.followers_anchor {
		font-weight: 900;
		text-transform: uppercase;
		padding: 20px 40px 20px;
	}

	.social_box_anchor {
		fill: #fff;
		color: #fff;
		border-color: #fff
	}

	.social_box_anchor:hover {
		color: #fff
	}

	.font_icon {
		font-size: 3em
	}

	.social_box_heading {
		margin-bottom: 0;
		color: #fff;
		font-size: 28px;
		font-weight: 900
	}

	.social_box_small {
		color: #fff;
		font-family: roboto, Sans-serif;
		font-size: 14px;
		font-weight: 400
	}

	.socia_big_box {
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		grid-gap: 10px;
		margin: 80px 0
	}

	.social_box_blue {
		background-color: #4676ed;
		padding: 10px;
		border-radius: 5px
	}

	.social_box_insta {
		padding: 10px;
		border-radius: 5px;
		background-color: transparent;
		background-image: linear-gradient(210deg, #ff0808 0, #f97f23 100%);
	}

	.social_box_youtube {
		padding: 10px;
		border-radius: 5px;
		background-color: #da0000
	}

	.social_box_tiktok {
		padding: 10px;
		border-radius: 5px;
		background-color: #ff0084
	}

	.social_box_linkedin {
		padding: 10px;
		border-radius: 5px;
		background-color: #44a4ad
	}

	.social_box_twitter {
		padding: 10px;
		border-radius: 5px;
		background-color: #5a99ec
	}

	.social_box_mail {
		padding: 10px;
		border-radius: 5px;
		background-color: #fca200
	}

	.social_box_google {
		padding: 10px;
		border-radius: 5px;
		background-color: #8e00ff
	}

	.social_box_other {
		padding: 10px;
		border-radius: 5px;
		background-color: #1906ff
	}

	@media(max-width:425px) {
		.socia_big_box {
			grid-gap: 8px;
			grid-template-columns: 1fr 1fr;
			overflow-x: hidden
		}
	}

	@media(max-width:320px) {
		.socia_big_box {
			grid-gap: 5px;
			grid-template-columns: 1fr 1fr;
			overflow-x: hidden
		}

		.social_box_heading {
			font-size: 21px
		}
	}

	.followers_heading {
		margin-top: 20px
	}

	.social_row {
		background-color: #0006
	}
</style>
<section class="followers_box">
	<div class="container-fluid social_row  ">
		<div class="row pt-4">
			<div class="col-md-12 col-lg-6 col-sm-12 my-auto">
				<h2 class="main-heading">New and Featured <span class="text-light">Services you may like...</span></h2>
				<p class="followers_para">Take advantage of our exclusive escorts services from below and explore them to have real fun. Our escort services are the most comprehensive in the industry. Below you will find just a selection of our services.</p>
				<a href="tel:+919523402933" class="btn followers_anchor bg-danger text-light">Call Now to Book</a>
			</div>
			<div class="col-md-12 col-lg-6 col-sm-12">
				<div class="socia_big_box">
					<div class="social_box_blue">
						<a class="social_box_anchor" href="<?php echo base_url() ?>escorts-type/phone-sex-mumbai-escorts">
							<img src="https://img.icons8.com/external-stick-figures-gan-khoon-lay/51/ffffff/external-couple-people-sex-social-group-text-word-stick-figures-gan-khoon-lay.png" alt="Phone sex in Mumbai" />

							<p class="social_box_heading">Phone Sex</p>
						</a>
						<!-- <span class="social_box_small">Hire Casual Sex Girls in Bangalore.</span> -->
					</div>
					<div class="social_box_insta">
						<a class="social_box_anchor" href="<?php echo base_url() ?>escorts-type/indian-anal-girl-escorts-in-mumbai">
							<img src="https://img.icons8.com/ios-filled/50/ffffff/bottom.png" alt="anal escorts" />

							<p class="social_box_heading">Anal Escorts</p>
						</a>
						<!-- <span class="social_box_small">Get Naughty and Big Ass Escorts in Bangalore.</span> -->
					</div>
					<div class="social_box_youtube">
						<a class="social_box_anchor" href="<?php echo base_url() ?>escorts-type/call-aunties">
							<img src="https://img.icons8.com/pastel-glyph/64/ffffff/user-female--v3.png" alt="Call Aunty" />

							<p class="social_box_heading">Call Aunty</p>
						</a>
						<!-- <span class="social_box_small">Book Mature and Experience Mallu Aunty. </span> -->
					</div>
					<div class="social_box_tiktok">
						<a class="social_box_anchor" href="<?php echo base_url() ?>escorts-type/dating-girls">
							<img src="https://img.icons8.com/ios-filled/50/ffffff/novel--v1.png" alt="Dating Girls" />

							<p class="social_box_heading">Dating Girls</p>
						</a>
						<!-- <span class="social_box_small">Ultimate Dating Experience with Best Girls.</span> -->
					</div>
					<div class="social_box_linkedin">
						<a class="social_box_anchor" href="<?php echo base_url() ?>escorts-type/young-escorts">
							<img src="https://img.icons8.com/ios-filled/50/ffffff/plus-1day.png" alt="Young Girls" />

							<p class="social_box_heading">Young Girls</p>
						</a>
						<!-- <span class="social_box_small">Enjoy Full Day with Our Escorts Bangalore.</span> -->
					</div>
					<div class="social_box_twitter">
						<a class="social_box_anchor" href="<?php echo base_url() ?>escorts-type/vip-girls">
							<img src="https://img.icons8.com/external-itim2101-fill-itim2101/64/ffffff/external-premium-mobile-payment-itim2101-fill-itim2101.png" alt="VIP escorts" />

							<p class="social_box_heading">VIP Escorts</p>
						</a>
						<!-- <span class="social_box_small">Get laid with phenomenal high class companions.</span> -->
					</div>
					<div class="social_box_mail">
						<a class="social_box_anchor" href="<?php echo base_url() ?>escorts-type/foreigner-escorts">
							<img src="https://img.icons8.com/glyph-neue/64/ffffff/near-me.png" alt="Foreigner escorts" />

							<p class="social_box_heading">Foreigner Girls</p>
						</a>
						<!-- <span class="social_box_small">Are You Looking for Some Romance Girls Near Me?</span> -->
					</div>
					<div class="social_box_google">
						<a class="social_box_anchor" href="<?php echo base_url() ?>escorts-type/housewife-escorts-in-mumbai">
							<img src="https://img.icons8.com/ios-filled/50/ffffff/person-female--v1.png" alt="Housewife escorts" />

							<p class="social_box_heading">Housewife Escorts</p>
						</a>
						<!-- <span class="social_box_small">Meet the Hottest Shemale Escort in Bangalore.</span> -->
					</div>
					<div class="social_box_other">
						<a class="social_box_anchor" href="<?php echo base_url() ?>escorts-type/north-indian-girls-sex-videos">
							<img src="https://img.icons8.com/ios-filled/50/ffffff/video-message.png" alt="Sex Video" />

							<p class="social_box_heading">Sex Video</p>
						</a>
						<!-- <span class="social_box_small">Sex Chat with Our Female Escort Bangalore.</span> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>










<!-- section  category sections  -->
<style>
	.gl__container {
		width: var(--container-width);
		max-width: 100%;
		margin: 0 auto;
		padding: 0 1rem
	}

	.gl__row {
		--gap-between-col: 2rem;
		display: flex;
		flex-wrap: wrap;
		width: 100%;
		align-items: flex-start
	}

	@media screen and (max-width:920px) {
		.gl__row {
			--gap-between-col: 1rem
		}
	}

	.gl__col {
		flex: 1 0 0%
	}

	[class^=gl__col] {
		padding-left: calc(var(--gap-between-col) * 0.5);
		padding-right: calc(var(--gap-between-col) * 0.5)
	}



	.main__section:first-child {
		margin-top: 0
	}

	.content-list__header {
		display: flex;
		align-items: baseline;
		margin-bottom: 3rem
	}

	.content-list__title {
		margin: 0;
		font-size: 3rem;
		letter-spacing: 1px;
		color: rgb(255, 255, 255);
		position: relative;
		padding: 0 2rem;
		font-weight: 500
	}

	.content-list__title:before {
		content: '';
		height: 100%;
		width: .2rem;
		background-color: #e9bf3a;
		position: absolute;
		top: 0;
		left: 0
	}

	.content-list__see-more {
		color: var(--main-color);
		font-size: 1.8rem;
		padding: 0;
		font-weight: 400
	}

	.content-list__custom-layout {
		display: grid;
		grid-template-areas: "A A B B B B""A A B B B B"
	}

	.content-list__custom-layout .gl__col:nth-child(1) {
		grid-area: A
	}

	.content-list__custom-layout .gl__col:nth-child(1) .video-item {
		padding-bottom: calc((390/280) * 100% + 1.5rem)
	}

	@media screen and (max-width:920px) {
		.content-list__header {
			flex-wrap: wrap;
			justify-content: center
		}

		.content-list__title {
			font-size: 2rem;
			width: 100%;
			text-align: center
		}

		.content-list__title:before {
			display: none
		}

		.content-list__see-more {
			text-align: center;
			border: 1px solid var(--main-color);
			border-radius: 2rem;
			margin: 0 auto;
			padding: .25rem 2rem;
			font-size: 1.5rem
		}



		.content-list__custom-layout .gl__col:nth-child(1) {
			grid-area: unset
		}

		.content-list__custom-layout .gl__col:nth-child(1) .video-item {
			padding-bottom: calc((390/280) * 100%)
		}



		.content-list__custom-layout .video-item--last {
			padding-bottom: calc((390/280) * 25%)
		}

		.content-list__custom-layout .video-item--last .video-item__thumb {
			-o-object-fit: cover;
			object-fit: cover;
			-o-object-position: center;
			object-position: center
		}
	}

	@media screen and (max-width:920px) {
		.content-list__custom-layout {
			grid-template-areas: unset;
			grid-template-columns: 1fr 1fr 1fr
		}

		.content-list__custom-layout .gl__col:last-child {
			grid-column-end: 3 !important;
			grid-column-start: 3 !important
		}
	}

	@media screen and (max-width:575px) {
		.content-list__custom-layout {
			grid-template-areas: unset;
			grid-template-columns: 1fr 1fr;
		}

		.content-list__custom-layout .gl__col:last-child {
			grid-column-end: 3 !important;
			grid-column-start: 1 !important
		}
	}

	.video-item {
		display: block;
		position: relative;
		width: 100%;
		padding-bottom: calc((390/280) * 100%);
		border-radius: 5px;
		overflow: hidden;
		transition: all ease 500ms;
		margin-bottom: 1.5rem;
		background: #232323
	}

	.video-item__thumb {
		position: absolute;
		width: 100%;
		height: 100%;
		left: 0;
		top: 0
	}

	.video-item__infos {
		position: absolute;
		width: 100%;
		z-index: 1;
		background: #232323;
		display: flex;
		flex-direction: column;
		top: 100%;
		padding: 2rem;
		transition: all ease-out 250ms
	}

	.video-item__title {
		font-size: 1.5rem;
		margin: 0;
		font-weight: 600;
		color: #fff
	}

	.video-item__subtitle {
		color: #9e9e9e;
		font-size: 1.2rem;
		margin: 0
	}

	.video-item__play {
		cursor: pointer;
		background: #e9bf3a;
		border-radius: 50%;
		position: absolute;
		width: 4rem;
		height: 4rem;
		align-items: center;
		justify-content: center;
		display: flex;
		right: 1rem;
		top: 0;
		transition: all ease 1000ms;
		color: #fff
	}

	.video-item__play .fas {
		left: 1px;
		position: relative
	}

	.video-item__see-more {
		position: absolute;
		top: 50%;
		width: 100%;
		text-align: center;
		z-index: 1;
		transform: translateY(-50%);
		color: var(--main-color);
		text-transform: uppercase;
		font-size: 2rem;
		font-weight: 700
	}

	.video-item:hover {
		transform: scale(1.1);
		box-shadow: 0 5px 15px rgba(0, 0, 0, .2), 0 15px 35px rgba(0, 0, 0, .15);
		z-index: 2
	}

	.video-item:hover .video-item__play {
		top: -2rem
	}

	.video-item:hover .video-item__infos {
		transform: translateY(-100%)
	}

	.video-item--last .video-item__thumb {
		opacity: .15
	}



	.video-detail__notation__stars:not(:checked)>input {
		position: absolute;
		top: -9999px;
		clip: rect(0, 0, 0, 0)
	}

	.video-detail__notation__stars:not(:checked)>label {
		width: 2.5rem;
		padding: 0 .05em;
		overflow: hidden;
		white-space: nowrap;
		cursor: pointer;
		font-size: 2rem;
		color: rgba(255, 255, 255, .3);
		margin-bottom: 0;
		float: right
	}

	.video-detail__notation__stars:not(:checked)>label:before {
		content: "\f005";
		font-weight: 900;
		font-family: 'font awesome 5 pro'
	}

	.video-detail__notation__stars:not(:checked)>label:hover,
	.video-detail__notation__stars:not(:checked)>label:hover~label {
		color: #e9bf3a;
		text-shadow: 0 0 3px #e9bf3a
	}
</style>

<style>
	.gl__row--col-2 .gl__col {
		flex: 0 0 auto;
		width: calc(100%/2)
	}

	@media screen and (max-width:920px) {
		.gl__row {
			--gap-between-col: 1rem
		}
	}

	@media screen and (min-width:920px) {
		.gl__row--col-sm-4 .gl__col {
			flex: 0 0 auto;
			width: calc(100%/4)
		}
	}

	@media screen and (min-width:1280px) {
		.gl__row--col-md-6 .gl__col {
			flex: 0 0 auto;
			width: calc(100%/6)
		}
	}

	.gl__col {
		flex: 1 0 0
	}

	[class^=gl__col] {
		padding-left: calc(var(--gap-between-col) * .5);
		padding-right: calc(var(--gap-between-col) * .5)
	}



	.main__section:first-child {
		margin-top: 0
	}

	.content-list__header {
		display: flex;
		align-items: baseline;
		margin-bottom: 3rem
	}

	.content-list__title {
		margin: 0;
		font-size: 3rem;
		letter-spacing: 1px;
		color: rgb(255, 255, 255);
		position: relative;
		padding: 0 2rem;
		font-weight: 500
	}

	.content-list__title:before {
		content: '';
		height: 100%;
		width: .2rem;
		background-color: #e9bf3a;
		position: absolute;
		top: 0;
		left: 0
	}

	.content-list__see-more {
		color: var(--main-color);
		font-size: 1.8rem;
		padding: 0;
		font-weight: 400
	}

	@media screen and (max-width:920px) {
		.content-list__header {
			flex-wrap: wrap;
			justify-content: center
		}

		.content-list__title {
			font-size: 2rem;
			width: 100%;
			text-align: center
		}

		.content-list__title:before {
			display: none
		}

		.content-list__see-more {
			text-align: center;
			border: 1px solid var(--main-color);
			border-radius: 2rem;
			margin: 0 auto;
			padding: .25rem 2rem;
			font-size: 1.5rem
		}
	}

	.partners-item {
		display: block;
		margin-bottom: 2rem
	}

	.partners-item__thumb {
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		position: relative;
		overflow: hidden;
		border-radius: 3px;
		width: 100%;
		padding-bottom: 100%;
		box-shadow: 0 5px 15px rgba(0, 0, 0, .15)
	}

	.partners-item__thumb__img {
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0
	}

	.video-detail__notation__stars:not(:checked)>input {
		position: absolute;
		top: -9999px;
		clip: rect(0, 0, 0, 0)
	}

	.video-detail__notation__stars:not(:checked)>label {
		width: 2.5rem;
		padding: 0 .05em;
		overflow: hidden;
		white-space: nowrap;
		cursor: pointer;
		font-size: 2rem;
		color: rgba(255, 255, 255, .3);
		margin-bottom: 0;
		float: right
	}

	.video-detail__notation__stars:not(:checked)>label:before {
		content: "\f005";
		font-weight: 900;
		font-family: 'font awesome 5 pro'
	}

	.video-detail__notation__stars:not(:checked)>label:hover,
	.video-detail__notation__stars:not(:checked)>label:hover~label {
		color: #e9bf3a;
		text-shadow: 0 0 3px #e9bf3a
	}

	.content-list__see-more {
		color: gold !important;
		font-size: 1.4rem !important;
		padding: 0;
		font-weight: 400
	}
</style>
<section class="main__section bg-red py-5">
	<div class="gl__container">
		<div class="content-list">
			<div class="mb-3">
				<h2 class="main-heading">Other Categories <span class="text-light">you may like</span></h2>
			</div>

			<div class="autoplay cat-slider">
				<a href="https://www.selectyourgirls.net/category/18+-teenage-escorts.html">
					<img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/teenage-escorts1.jpg"  alt="teenage-escorts"  style="padding:10px; height:100%; width:100%"></a>
				<a href="https://www.selectyourgirls.net/category/vip-girls.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/vip-girls1.jpg" alt="vip-girls"   style="padding:10px; height:100%; width:100%"></a>
				<a href="https://www.selectyourgirls.net/category/women-seeking-men.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/women-seeking-men1.jpg"  style="padding:10px; height:100%; width:100%"  alt="women-seeking-men"></a>

				<a href="https://www.selectyourgirls.net/category/threesome.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/threesome1.jpg" alt="threesome"   style="padding:10px; height:100%; width:100%"></a>
				<a href="https://www.selectyourgirls.net/category/party-girls.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/party-girls1.jpg"  style="padding:10px; height:100%; width:100%"  alt="party-girls"></a>
				<a href="https://www.selectyourgirls.net/category/new-escorts.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/new-escorts1.jpg"  style="padding:10px; height:100%; width:100%"  alt="new-escorts"></a>
				<a href="https://www.selectyourgirls.net/category/one-night-stand.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/one-night-stand1.jpg"  style="padding:10px; height:100%; width:100%"  alt="one-night-stand"></a>
				<a href="https://www.selectyourgirls.net/category/massage-girls.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/massage-girls1.jpg"  style="padding:10px; height:100%; width:100%"  alt="massage-girls"></a>
				<a href="https://www.selectyourgirls.net/category/foreigner-girls.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/foreigner-girls1.jpg"  style="padding:10px; height:100%; width:100%"  alt="foreigner-girls"></a>
				<a href="https://www.selectyourgirls.net/category/girlfriend-experience.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/girlfriend-experience1.jpg" alt="girlfriend-experience"   style="padding:10px; height:100%; width:100%"></a>
				<a href="https://www.selectyourgirls.net/category/call-girls.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/call-girls1.jpg"  style="padding:10px; height:100%; width:100%"  alt="call-girls"></a>
				<a href="https://www.selectyourgirls.net/category/dating-girls.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/dating-girls1.jpg"  style="padding:10px; height:100%; width:100%"  alt="dating-girls"></a>
				<a href="https://www.selectyourgirls.net/category/call-aunties.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/call-aunties1.jpg"  style="padding:10px; height:100%; width:100%"  alt="call-aunties"></a>
				<a href="https://www.selectyourgirls.net/category/young-girls.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/young-girls1.jpg"  style="padding:10px; height:100%; width:100%"  alt="young-girls"></a>
				<a href="https://www.selectyourgirls.net/category/busty-girls.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/busty-girls1.jpg"  style="padding:10px; height:100%; width:100%"  alt="busty-girls"></a>
			</div>
		</div>
	</div>
</section>


<!-- content 1  -->
<section class="bg-light py-5">
	<div class="container">
		<h2 class="main-heading text-danger">Escorts in Mumbai :
			<span class="text-secondary">The Ultimate Guide for Men</span>
		</h2>
		<p class="text-dark">Are you unhappy with your wife's performance in bed? Our independent Mumbai escort service can provide professional, sexy partners for an erotic companion. We have college girls who are eager to please and do whatever it takes!
			<br> <br>
			Looking for independent call girls? Your search is over, escort girls are waiting to make your dreams come true.


		</p>
		<p class="text-dark">With our independent girls in Mumbai escorts, you can get to engage with Mumbai elite model escorts and Housewife escorts who are hot and sexy and can provide any type of service to make it more enjoyable and satisfying!
		</p>
		<br>
		<h2 class="main-heading text-danger"> <span class="text-secondary">Erotic relationship with Mumbai call girls</span></h2>
		<p class="text-dark">There are many things in life that you can keep to yourself. There are also things that must be shared with others, whether they're close or not. Your secret desires for an erotically-charged relationship are no exception.
		</p>
		<p class="text-dark">Our escorts in Mumbai will do the research to find the features most fetching in Mumbai escorts, and provide you with a great variety of hot <a href="<?php echo base_url() . 'mumbai-call-girls'; ?>">Independent Mumbai call girls</a>.
		</p>
		<p class="text-dark">Whether it's for some company at your lonely bachelor pad or if you need someone new in your social circle, SYG is standing by 24 hours a day to help fulfill what society dictates as taboo yet secretly craves deep down inside.
		</p>
	</div>
</section>


<style>
	.partners-item__thumb {
		position: relative;
	}

	.lc-name {
		position: absolute;
		bottom: -2px;
		right: 0;
		z-index: 9;
		font-weight: 700;
		text-transform: uppercase;
		font-size: 12px;
		background: #810000;
		padding: 6px 11px;
		border-radius: 20px 0 0 20px;
		color: #fff;
	}

	.gredient {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		z-index: 2;
		height: 100%;
		background: linear-gradient(180deg, rgba(0, 0, 0, .16), rgb(0 0 0 / 48%));
	}
</style>
<section class="py-5">
	<div class="container-fluid">
		<h2 class="main-heading mb-3">Top Escorts Locations <span class="text-light">Mumbai escorts near me</span></h2>
		<div class="row">
			<?php foreach ($get_loc_lim as $locs) {
				$clod_img_loc = explode('.', $locs['loc_img']); ?>
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a class="partners-item" href="<?php echo base_url(); ?>location/<?php echo str_replace(' ', '-', $locs['loc_title']);  ?>/<?php echo $locs['id'];  ?>">
						<div class="partners-item__thumb">
							<!-- <div class="gredient"></div> -->
							<!-- <h5 class="lc-name"><span class="icon-location mr-1"></span><?php echo $locs['only_loc'];  ?></h5> -->
							<img class="partners-item__thumb__img lazyload" data-src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/loc/<?php echo $clod_img_loc[0] ?>.webp" alt="<?php $locs['img_alt_title'] ?>">
						</div>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</section>



<!-- section 8 area list  -->
<style>
	.text {
		color: #fff;
		font-size: 16px;
		line-height: 28px;
		margin-bottom: 21px
	}

	.text h2 {
		color: #f3a806;
		margin: 25px 0;
		font-family: 'Montserrat', sans-serif
	}

	h1,
	h2 {
		color: #f3a806;
		font-family: 'Montserrat', sans-serif
	}

	.text ul {
		padding: 0;
		margin-top: 25px;
		margin-bottom: 20px
	}

	.text ul li {
		list-style: none;
		padding-left: 20px;
		position: relative;
		margin-bottom: 10px;
		display: inline-block;
		margin-right: 10px
	}

	.text ul li:before {
		display: inline-block;
		font: normal normal normal 14px/1 FontAwesome;
		font-size: inherit;
		text-rendering: auto;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		content: "\f105";
		position: absolute;
		left: 0;
		top: 6px;
		color: #f3a806;
		font-size: 18px
	}

	.title {
		margin: 0 auto 60px;
		font-size: 49px;
		font-weight: bold;
		color: #cfd1d2;
		font-family: 'Poppins', sans-serif;
		display: inline-block;
		position: relative
	}

	.title:before {
		position: absolute;
		content: '';
		width: 100%;
		height: 2px;
		background: #f3a806;
		bottom: -10px
	}

	.escorts_locations {
		width: 100%;
		display: block;
		padding: 0 0 15px 0;
		border-bottom: 1px solid #ffc107;
		margin-bottom: 37px
	}

	.escorts_locations h4 {
		color: #ffffff;
		font-weight: 300;
		font-size: 24px;
		text-transform: uppercase;
		margin-top: 0;
		margin-bottom: 15px;
	}

	.escorts_locations ul {
		display: inline-block;
		width: 100%;
		margin: 0;
		padding: 0;
		margin-top: 10px;
	}

	.escorts_locations ul li {
		display: inline-block;
		padding: 0 25px 0 0;
		position: relative
	}

	.escorts_locations ul li::before {
		content: "";
		position: absolute;
		left: 0;
		background: url(ges/check.png/images/check.png);
		height: 15px;
		width: 15px;
		background-size: contain;
		top: 6px
	}

	.escorts_locations ul li a {
		padding-left: 25px
	}

	.escorts_locations ul li a:hover {
		color: #fff
	}

	.inner-page {
		padding: 30px 0 30px
	}

	.contact {
		position: relative;
		height: auto;
		display: table;
		padding: 40px 0 40px;
		width: 100%
	}

	.headerdiv {
		background: #000
	}

	a,
	a:hover {
		color: #f3a806
	}

	::-webkit-input-placeholder {
		color: #ffffff80
	}

	@media(max-width:767px) {
		.escorts_locations ul li {
			width: 100%
		}

		.escorts_locations {
			margin-top: 20px
		}
	}

	@media only screen and (max-width:992px) {
		.title:before {
			left: 0;
			bottom: -5px
		}

		.title {
			font-size: 25px;
			margin: 0 auto 65px;
			line-height: 35px
		}
	}

	@media only screen and (max-width:767px) {
		.title {
			font-size: 25px;
			margin: 0 auto 25px;
			line-height: 35px
		}

		.contact {
			padding: 0
		}

		.title {
			font-size: 25px;
			margin: 30px auto 55px
		}

		.headerdiv .title {
			margin-top: 0
		}
	}

	@media only screen and (max-width:680px) {
		.escorts_locations ul li a {
			padding-left: 25px;
			font-size: 14px
		}
	}

	.escorts_locations a {
		color: #fff;
		margin-left: 2em;
	}
</style>
<div class="inner-page bg-red">
	<div class="container">
		<h3 class="main-heading text-warning">Other Escort areas <span class="text-light"> Nearby Mumbai</span></h3>
		<div class="contact">
			<div class="col-md-12 col-sm-12">
				<div class="escorts_locations text">

					<div class="row">
						<div class="col-md-6 col-lg-4 col-xl-4">
							<a href="<?php echo base_url() ?>location/kurla/18"> <span class="icon-checkmark mr-1"></span> Kurla Call Girls</a>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4">
							<a href="<?php echo base_url() ?>location/wadala/19"> <span class="icon-checkmark mr-1"></span> Wadala escorts</a>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4">
							<a href="<?php echo base_url() ?>location/dadar/20"> <span class="icon-checkmark mr-1"></span> Dadar Girls</a>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4">
							<a href="<?php echo base_url() ?>location/byculla/21"> <span class="icon-checkmark mr-1"></span> Byculla Call Girls</a>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4">
							<a href="<?php echo base_url() ?>location/thane/22"> <span class="icon-checkmark mr-1"></span> Thane Escorts </a>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4">
							<a href="<?php echo base_url() ?>location/colaba/23"> <span class="icon-checkmark mr-1"></span> Colaba Call Girls</a>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4">
							<a href="<?php echo base_url() ?>location/bhiwadi/24"> <span class="icon-checkmark mr-1"></span> Bhiwadi Escorts</a>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4">
							<a href="<?php echo base_url() ?>location/mira-road/25"> <span class="icon-checkmark mr-1"></span>Mira Road Call Girls</a>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4">
							<a href="<?php echo base_url() ?>location/kandivali/26"> <span class="icon-checkmark mr-1"></span> Kandivali Call Girls</a>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4">
							<a href="<?php echo base_url() ?>location/malad/27"> <span class="icon-checkmark mr-1"></span> Malad Call Girls</a>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4">
							<a href="<?php echo base_url() ?>location/lokhandwala/28"> <span class="icon-checkmark mr-1"></span> Lokhandwala Escorts</a>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4">
							<a href="<?php echo base_url() ?>location/kalyan/29"> <span class="icon-checkmark mr-1"></span>Kalyan Call Girls</a>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
</div>




<!-- content 2  -->
<section class="bg-light py-5bg-red py-5">
	<div class="container">
		<h2 class="main-heading text-danger">Magic Isn't Rare- <span class="text-secondary">All our Mumbai Escorts Are Magicians of Pleasure</span></h2>
		<p class="text-dark">From the moment you walk through those doors, our sexy and attractive Mumbai Escorts girls are ready to bring out your true sexual desires. Our call girls will help energize both body and soul with a sensual experience that has been proven time again: Erotic pleasure is powerful enough to keep us refreshed and happy! <br><br>We at <a href="<?php echo base_url(); ?>">Mumbai escorts</a> are here for you to provide all the <a href="<?php echo base_url() . 'escorts-category'; ?>">escort category</a> girls that you have dreamt of.
		</p>

		<p class="text-dark">Just tell us your taste and we will do it! Our Call Girls in 46+ sensual Kamasutra positions, trained rigorously by our experts who take great pride in their work to ensure Our Mumbai Escort girls never disappoint a client's needs or desires.
		</p>
		<p class="text-dark">From hot-looking women, right up to platinum blonde ladies if this is what takes your fancy then give us a ring today on 9523402933. So Why to wait? We're ready for you.
			<br><br>Wait- Do you know we as one of the leading escort agency ranked no 1 escort providers in Mumbai for five consecutive years now.
		</p>
		<br>
		<h2 class="main-heading"> <span class="text-dark">Advantages of spending time with Mumbai escorts
			</span></h2>
		<p class="text-dark">Being in one of the largest cities in India, our <a href="<?php echo base_url() . 'private-girls'; ?>">Mumbai escort girls</a> know well about your desires.</p>
		<p class="text-dark">And what you expect from them, the Mumbai girl is with you like your girlfriend and fulfills all your fantasies with much happiness and fun. She involves you in the beautiful world of pleasure through her remarkable Mumbai south Indian beauty and makes you enjoy it.
		</p>
		<p class="text-dark">
			Her way of speaking, behavior, method of creating excitement in you to enjoy her in your style, are the key points that you will experience while you are with the girl.
		</p>
		<p class="text-dark">
			Moreover, those things that you enjoy with her in excitement give you immense satisfaction, and until the full time because of her cute act, you will enjoy each moment with ultimate erotic pleasure.
		</p>
	</div>
</section>



<!-- section 9 customer say  -->
<style>
	.body h4 {
		color: rgba(56, 132, 255, 1);
	}





	.body .style-review-card-desc {
		color: #afaeaf;
	}

	.body .style-review-card-title h2 {
		color: #f3a806;
	}

	.body .style-review-card-author {
		color: #ffffff;
	}

	.body .style-review-block-image {
		background-color: #29272b;
	}

	.slick-dots li button {
		background: #efc846;
	}

	#block_241 .bg {
		background-color: rgba(55, 53, 57, 1);
	}

	#block_241 {
		position: relative;
		overflow: hidden;
		min-height: auto;
	}

	#block_241 .divider-top {
		background-image: none;
		width: 100%;
		position: absolute;
		top: 0px;
		transform: rotateY(180deg);
		background-repeat: repeat-x;
		background-position: 0px 0px;
		background-size: 100% 58px;
		height: 58px;
		z-index: 0;
	}

	#block_241 .divider-bottom {
		background-image: none;
		width: 100%;
		position: absolute;
		bottom: 0px;
		transform: rotateY(180deg);
		background-repeat: repeat-x;
		background-position: 0px 0px;
		background-size: 100% 58px;
		height: 58px;
		z-index: 0;
	}

	#block_241 .bg {
		position: absolute;
		top: 0px;
		left: 0px;
		width: 100%;
		height: 100%;
		background-color: transparent;
		background-size: cover;
		background-position: 49% 26%;
		background-repeat: no-repeat;
		background-attachment: scroll;
		opacity: 1;
		filter: blur(0px);
	}

	#block_241 .bg:after {
		content: ' ';
		display: block;
		position: absolute;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100%;
		background: transparent;
	}

	#block_241 .reviews-picture {
		position: absolute;
		left: 50%;
		right: 0px;
		top: 0px;
		bottom: 0px;
	}

	#block_241 .reviews-picture__img {
		width: 100% !important;
		height: 100% !important;
		background-repeat: no-repeat;
		background-size: cover;
	}

	#block_241 .slider__wrap {
		margin-left: -50px;
		margin-right: -50px;
	}

	#block_241 .reviews-slider .reviews-slider__title {
		margin-bottom: 40px;
		padding-left: 0px;
		padding-right: 0px;
	}

	#block_241 .slider__item {
		padding: 0 50px;
	}

	#block_241 .slider__item .item__author {
		margin-bottom: 48px;
	}

	#block_241 .slick-slider .slick-dots {
		position: static;
		text-align: left;
		padding: 0 8%;
		display: flex;
	}

	#block_241 .slick-slider .slick-dots li {
		opacity: 0.1;
		width: 24px;
		height: 6px;
		margin-left: 1em;
	}

	#block_241 .slick-slider .slick-dots li.slick-active {
		opacity: 1;
	}

	#block_241 .slick-slider .slick-dots li button {
		padding: 0px;
		/*left:0px;top:0px;*/
		position: absolute;
		font-size: 0px;
		width: 24px;
		height: 6px;
		border-radius: unset;
		background-color: #f3a806;
		border: none;
	}

	@media (max-width: 992px) {
		#block_241 .reviews-picture {
			display: none;
		}
	}

	#block_1 .component_filter_form_group input.form-control:-internal-autofill-selected {
		background-color: #e1f4fa !important;
		color: #334e6e !important;
	}

	.slick-dots li::marker {
		font-size: 0px;
	}
</style>
<div class="body pt-5">
	<div class="wrapper  wrapper-navbar">
		<div class="wrapper-content">
			<div class="wrapper-content__body">
				<div id="block_241">
					<div class="reviews-slider ">
						<div class="bg"></div>
						<div class="divider-top"></div>
						<div class="divider-bottom"></div>
						<div class="reviews-picture">
							<div class="reviews-picture__img style-review-block-image" style="background-image: url('<?php echo base_url() ?>assets/images/review-girl.webp');"></div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-lg-6 mb-5">
									<div class="reviews-slider">
										<div class="reviews-slider__title style-review-card-title">
											<h4 class="main-heading text-warning">What do our customers say?</h4>
										</div>
										<div class="slider__wrap">
											<div>
												<div class="slider__item" style="width: 100%; display: inline-block;">
													<div class="item__desc style-review-card-desc" style="padding-left: 0px; padding-right: 80px; margin-bottom: 24px;">
														<p><span style="color: #d9d9d9">I first encountered Selectyourgirls Mumbai escorts in February 2022. I have visited other escort agencies but talking about this one is great. The female escort was very friendly, hot and attractive. </span></p>
													</div>
													<div class="item__author style-review-card-author" style="padding-left: 0px; padding-right: 0px;">
														<h4><span style="color: #ffffff"><strong style="font-weight: bold">Anand Ingalagi</strong></span></h4>
													</div>
												</div>
											</div>
											<div>
												<div class="slider__item" style="width: 100%; display: inline-block;">
													<div class="item__desc style-review-card-desc" style="padding-left: 0px; padding-right: 80px; margin-bottom: 24px;">
														<p><span style="color: #d9d9d9">The first thing I noticed was the authentic profile picture. Both the picture and the reviews brought me to the website.</span></p>
													</div>
													<div class="item__author style-review-card-author" style="padding-left: 0px; padding-right: 0px;">
														<h4><span style="color: #ffffff"><strong style="font-weight: bold">Venkata Rama Raju</strong></span></h4>
													</div>
												</div>
											</div>
											<div>
												<div class="slider__item" style="width: 100%; display: inline-block;">
													<div class="item__desc style-review-card-desc" style="padding-left: 0px; padding-right: 80px; margin-bottom: 24px;">
														<p><span style="color: #d9d9d9">I am very impressed. One of the best decisions I made was moving forward with Selectyourgirls Mumbai Escort Agency.</span></p>
													</div>
													<div class="item__author style-review-card-author" style="padding-left: 0px; padding-right: 0px;">
														<h4><span style="color: #ffffff"><strong style="font-weight: bold">Shamsher</strong></span></h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>





<section class="bg-red py-5">
	<div class="container">
		<h2 class="main-heading">Igniting True Masculinity <span class="text-light">A Rare Gift from our Mumbai Escorts to You</span></h2>
		<p class="text-light">What if we say, Our Call girls in Mumbai can be your true sexual Doctor? In today's world, men are losing their erection power due to stress, tensions, and performance anxiety. Don't worry- Our Call girls are naturally gifted and artificially trained with anti-stress techniques and massages.
		</p>
		<p class="text-light">Our College girl stress-relieving techniques by our call girls will not only relieve you from stress but also will aid you to get the hardest of boners- You have ever got. With our Mumbai Escort Agencies, you will witness a stress-free session of true intercourse with your true manly erection.
		</p>
		<p class="text-light">Our College girl stress-relieving techniques by our call girls will not only relieve you from stress but also will aid you to get the hardest of boners- You have ever got. With our Mumbai Escort Agencies, you will witness a stress-free session of true intercourse with your true manly erection.

			<br><br>Trust Us- Our Independent Call girls have treated more erection issues than any sexual doctor in Mumbai.
		</p>

		<br>
		<h2 class="main-heading text-danger"> <span class="text-light"> Call Girl in Mumbai for dirty desire
			</span></h2>
		<p class="text-light">Our famous call girl in Mumbai will assist you with your dirty desire and erotic fantasies, whether you’re looking to treat yourself or show up your partner. Our Mumbai escorts are hot and passionate, eager to please, and ready to satisfy your every need with their body. Call us today to see how we can help!
		</p>
		<h2 class="main-heading text-danger"> <span class="text-light"> Call Girl in Mumbai
			</span></h2>
		<p class="text-light">Call girls are popular amongst men who wish to spend some time with them outside their homes or hotels. Our lovely and spicy Independent girls in Mumbai Escorts are available at many locations in Mumbai but are most commonly found in urban areas, where customers tend to congregate. It’s quite common for high-end call girls to live in expensive condos or apartments close to their work. Although prices vary widely based on location and services offered, most Mumbai escorts charge at least several hundred dollars per hour. Book independent Call girls and escort services in Mumbai with no hidden charges.
		</p>
	</div>
</section>


<!-- content 2  -->
<section class="bg-light py-5bg-red py-5">
	<div class="container">
		<h2 class="main-heading text-danger">Call girl near me
		</h2>
		<p class="text-dark">Getting a call girl near me isn’t as easy as picking up your phone and dialing a number. Many agencies require potential clients to fill out an application before they can set up an appointment with one of their call girls. It’s not surprising, though: Independent Mumbai Escorts and call girls want to ensure they select clients who share their values and interests so everyone feels safe and comfortable.
			<br><br>If you plan on using Mumbai escorts services frequently, you might consider becoming a member of an escort in Mumbai that screens new clients.
		</p>
		<h2 class="main-heading"> <span class="text-dark">Call Girls Service
			</span></h2>
		<p class="text-dark">A call girl provides sex services to clients, typically paid by the hour. Some call girls to be independent and work for themselves. Call girls often advertise their services in small ads in magazines and via personal websites, or Mumbai escorts agencies.


		</p>
		<p class="text-dark">A client will typically contact a call girl through telephone or email, agree on a fee for her services, including specific sex acts, schedule an appointment at a star hotel or private residence, and pay after receiving sexual services. Prices are negotiated beforehand between the customer and the service provider.
			<br>
			<br>
			Sex partner operating through an agency typically pay a commission (determined as a percentage) to the agency based on their earnings.


		</p>
		<br>
		<h2 class="main-heading"> <span class="text-dark">Witness Your New Sexual Prowess with our VIP <a href="<?php echo base_url(); ?>">escorts in Mumbai</a>

			</span></h2>
		<p class="text-dark">If you are ready to gain that excitement, happiness, intensity, and curiosity of erotic-ness, then get into our <a href="<?php echo base_url();?>">escorts Mumbai</a> because it is such a place to regain sexual pleasure with one of the beautiful and attractive outfit party girls.


		</p>
		<p class="text-dark">
			Select any of the girls you like, and once you saw her in front, then you feel so impressive because of her outfit. Her style with attitude attracts you at a very high level so it's difficult for you to wait for a second and she, being mature knows well about how to maintain that beginning moments of your pleasure so she engages you in her unique style and you can't be tired because her way of behaviors and joy creating manners makes you enjoy her again and again in your different styles.


		</p>

	</div>
</section>

<!-- section 6 price card  -->
<section class="bg-red py-5">
	<div class="container">
		<h3 class="main-heading text-warning mb-4">5 steps to impress our escort girl
		</h3>

		<p class="text-light"> <img src="<?php echo base_url() . 'assets/img/right-thumb.png'; ?>" alt="" height="30px"> The <a href="<?php echo base_url();?>">independent escort girl</a> you book through us feels the same like as your girlfriend because she casually appears in front of you with impressive looks, which attracts you.
		</p>
		<p class="text-light"> <img src="<?php echo base_url() . 'assets/img/right-thumb.png'; ?>" alt="" height="30px">At first, you need to make her love through speaking some words which have both emotions and attraction means share your experience you have in your life and then shift the conversation by admiring her about the way she dressed and her beauty, for that time she'll really fall for your attitude and think of giving you the pleasure with pure love rather than just giving herself to you.
		</p>
		<p class="text-light"> <img src="<?php echo base_url() . 'assets/img/right-thumb.png'; ?>" alt="" height="30px"> You may need to make her talk whatever she likes, and you have to hear it until she stops, there you can observe her original mind, and slowly you can start romancing her then she will come into that world and she, with from her heart provides her erotic kinds to make you enjoy.
			<br><br> <img src="<?php echo base_url() . 'assets/img/right-thumb.png'; ?>" alt="" height="30px">The feeling that you get at the time will feel like heaven because the intimacy has created to that level in both of you.

			<br><br> <img src="<?php echo base_url() . 'assets/img/right-thumb.png'; ?>" alt="" height="30px">Pro Tip: Treat her like a Royal King Treats her Charming Queen. Our Escort girls are Queens of Hearts- All she expects a King by heart.


		</p>

		<h3 class="main-heading text-warning mb-4"> <span class="text-light"> What Else our Mumbai Escorts Got? </span></h3>

		<ul>
			<li>46+ Kamasutra Positions</li>
			<li>10+ Body Massages Proficiency (Body Rubbing Massages too, In case you Wondered)</li>
			<li>Pole Dance</li>
			<li>Strip Dance</li>
			<li>15 Day Erection Course from Our Sexual Experts</li>
			<li>20+ Medical Tests before Induction in Our Escort Agency</li>
			<li>10+ Identity Verification Tests before Inclusion in our Organisation</li>
		</ul>


		<a style="min-width: 220px;" class="btn btn-warning mb-2" href="https://wa.me/919523402933"><img class="mr-1" style="width: 20px;" src="https://img.icons8.com/material-outlined/24/000000/outgoing-call.png" alt="Outcall" /> Book Outcall Service</a>

		<a style="min-width: 220px;" class="btn btn-success mb-2" href="tel:+919523402933"><img class="mr-1" style="width: 20px;" src="https://img.icons8.com/material-outlined/24/ffffff/incoming-call.png" alt="Incall" />Book Incall Service</a>


		<br>
		<br>
		<br>

		<h3 class="main-heading text-warning mb-4"> <span class="text-light ml-1">High-Class <a href="<?php echo base_url().'mumbai-call-girls';?>">Call girls</a> from heaven for you
			</span></h3>
		<p class="text-light">The days were always be tired and stressful in this modern world, and without a definite pleasure, one cannot get that enthusiasm required to move this life that's why <a href="<?php echo base_url().'mumbai-call-girls';?>">call girls Mumbai</a> is here for you to give that enthusiasm.
			<br> <br>
			The way Mumbai escort girls are beautiful and attractive in real life, so your pictures also tell the same.
		</p>

		<p class="text-light">Our escort agency girls are so beautiful that you'll forget all your troubles when in their presence. From a young girl to an attractive housewife, they're here for whatever it is that turns YOU on! Let us know what kind of beauty will give you the ultimate experience and we'll make sure she's ready.

		</p>

		<p class="text-light">Secrets Revealed: We have connections with high-class Bollywood actresses, TV actresses, and glamorous top Model escorts. You wish, we will make it happen with our prime escort services in Mumbai.

		</p>

		<h3 class="main-heading text-warning mb-4"> <span class="text-light ml-1">Hassle-Free Premium Outcall services in Mumbai Escorts
			</span></h3>
		<p class="text-light">Book your personal Queen online within 5 minutes with our fast and secure online outcall services. Your sensual fun is just a few clicks away. (The king shouldn't wait for claiming his queen).

		</p>
	</div>
</section>


<!-- section 2 faq  -->
<style>
	#block_244 .block-faq__title {
		padding-left: 0;
		padding-right: 0;
		margin-bottom: 16px
	}

	.body h1 {
		color: rgba(56, 132, 255, 1)
	}

	#block_244 .block-faq__description {
		padding-left: 0;
		padding-right: 0
	}
</style>
<style>
	.accordion .accordion-item {
		border-bottom: 1px solid #e5e5e5
	}


	.accordion button {
		position: relative;
		display: block;
		text-align: left;
		width: 100%;
		padding: 15px 0px;
		color: #4b4b4b;
		font-size: 1.15rem;
		font-weight: 400;
		border: 0;
		background: 0;
		outline: 0
	}

	.accordion button:hover,
	.accordion button:focus {
		cursor: pointer;
		color: #fb0404;
	}

	.accordion button:hover::after,
	.accordion button:focus::after {
		cursor: pointer;
		color: #03b5d2;
		border: 1px solid #03b5d2
	}

	.accordion button .accordion-title {
		padding: 0;
		font-weight: 700;
	}

	.accordion button .icon {
		display: inline-block;
		position: absolute;
		top: 18px;
		right: -35px;
		width: 22px;
		height: 22px;
		border: 1px solid #db0a00;
		background: #db0a00;
		border-radius: 22px;
		color: #ffffff;
	}

	.accordion button .icon::before {
		display: block;
		position: absolute;
		content: '';
		top: 9px;
		left: 5px;
		width: 10px;
		height: 2px;
		background: currentColor
	}

	.accordion button .icon::after {
		display: block;
		position: absolute;
		content: '';
		top: 5px;
		left: 9px;
		width: 2px;
		height: 10px;
		background: currentColor
	}


	.accordion button[aria-expanded='true'] .icon::after {
		width: 0
	}

	.accordion button[aria-expanded='true']+.accordion-content {
		opacity: 1;
		max-height: 16em;
		transition: all 200ms linear;
		will-change: opacity, max-height
	}

	.accordion .accordion-content {
		opacity: 0;
		max-height: 0;
		overflow: hidden;
		transition: opacity 200ms linear, max-height 200ms linear;
		will-change: opacity, max-height
	}

	.accordion .accordion-content p {
		font-size: 1rem;
		font-weight: 300;
		margin: 10px 0
	}

	.h1_heading {
		font-size: 3rem;
		font-family: "Montserrat", sans-serif;
		font-weight: 700;
		font-style: normal
	}

	.accordion-content p {
		color: #000;
		font-weight: bold
	}
</style>
<div class="bg-light py-5">
	<div class="faq">
		<div class="bg"></div>
		<div class="divider-top"></div>
		<div class="divider-bottom"></div>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5">
					<div class="col-lg-10 pl-0 block-faq__content">
						<div class="block-faq__title style-faq-title">
							<h4 class="main-heading text-danger">Frequently Asked Questions</h4>
						</div>
						<div class="block-faq__description style-faq-desc">
							<p><span style="color:#000"><em style="font-style: italic">We gathered 5 of the most asked questions from our panel visitors and replied to them.</em></span></p>
						</div>
					</div>
				</div>
				<div class="col-11 col-lg-7">

					<div class="accordion">
						<div class="accordion-item">
							<button id="accordion-button-1" aria-expanded="false">
								<span class="accordion-title">How to choose a genuine service provider in Mumbai?</span>
								<span class="icon" aria-hidden="true"></span>
							</button>
							<div class="accordion-content">
								<p>
									There are a variety of service providers that appear on the results page of a search engine, but deciding on a genuine one could be difficult. To make sure that you are choosing a reliable provider, you can read reviews and ratings from existing or previous clients. </p>

								<p>This will help you learn more about the quality of the service and the reliability of the service provider.</p>
							</div>
						</div>
					</div>
					<div class="accordion">
						<div class="accordion-item">
							<button id="accordion-button-1" aria-expanded="false">
								<span class="accordion-title">What is the cost of an escort service in Mumbai?</span>
								<span class="icon" aria-hidden="true"></span>
							</button>
							<div class="accordion-content">
								<p>
									The cost of an escort service can vary considerably depending on what you are looking for, but the average price hovers around ₹8000-₹10000 per hour, although in some cases it can be as low as ₹5000 or as high as ₹20,000 per hour or more.
								</p>
							</div>
						</div>
					</div>

					<div class="accordion">
						<div class="accordion-item">
							<button id="accordion-button-1" aria-expanded="false">
								<span class="accordion-title">How do you make an appointment?</span>
								<span class="icon" aria-hidden="true"></span>
							</button>
							<div class="accordion-content">
								<p>
									Click the Call Now button to make the booking. However, it is advisable not to make any transaction before the escort arrives. Provide all your details so that the booking can be confirmed.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-1"></div>
			</div>
		</div>
	</div>
</div>

<!-- section 11 term-services  -->
<style>
	ul.tabs {
		margin: 0;
		padding: 0;
		float: left;
		list-style: none;
		height: auto;
		border-bottom: 1px solid #7a0000;
		width: 100%
	}

	ul.tabs li {
		float: left;
		margin: 0;
		cursor: pointer;
		padding: 3px 21px;
		height: auto;
		line-height: 31px;
		border-top: 1px solid #7a0000;
		border-left: 1px solid #7a0000;
		border-bottom: 0;
		background-color: #000;
		color: #ccc;
		overflow: hidden;
		position: relative;
		height: auto
	}

	.tab_last {
		border-right: 1px solid #7a0000
	}

	ul.tabs li:hover {
		background-color: #f3a806;
		color: #fff
	}

	ul.tabs li.active {
		background-color: #db0a00;
		color: #fff !important;
		display: block
	}

	.tab_container {
		border: 1px solid #7a0000;
		border-top: 0;
		clear: both;
		float: left;
		width: 100%;
		background: transparent;
		overflow: auto;
		color: #fff
	}

	.tab_content {
		padding: 20px;
		display: none
	}

	.tab_drawer_heading {
		display: none
	}

	.tabcontainer {
		height: auto;
		overflow: hidden;
		margin-bottom: 20px
	}

	.tab_container h2 {
		margin: 10px 0 20px;
		padding: 0;
		font-size: 22px;
		font-weight: 900;
		text-transform: uppercase;
		color: #db0a00;
	}

	.tab_container p {
		color: #000;
	}

	::-webkit-input-placeholder {
		color: #ffffff80
	}

	@media only screen and (max-width:767px) {
		.tabs {
			display: none
		}

		.tab_drawer_heading {
			background-color: #242424;
			color: #fff;
			border-top: 1px solid #7a0000;
			margin: 0;
			padding: 10px 20px;
			font-size: 18px;
			display: block;
			cursor: pointer;
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			margin-bottom: 1px
		}

		.d_active {
			background-color: #db0a00;
			color: #fff
		}
	}

	@media screen and (max-width: 992px) and (min-width: 768px) {
		ul.tabs li {
			padding: 2px 9px;
			font-size: 14px
		}
	}
</style>
<div class="bg-light py-5">
	<div class=" container">
		<div class="tabcontainer">
			<ul class="tabs">
				<li class="active" rel="tab1"><img class="mr-2 mb-1" style="width: 20px;" src="https://img.icons8.com/ios-filled/50/ffffff/privacy-policy.png" alt="Privacy policy" />Terms of Service:</li>

				<li rel="tab2" class=""><img class="mr-2 mb-1" style="width: 20px;" src="https://img.icons8.com/glyph-neue/64/ffffff/taxi.png" alt="Taxi" /> Taxi Charges: </li>

				<li rel="tab3" class=""><span class="icon-blocked mr-2"></span> Cancellation Fees: </li>

				<li rel="tab4" class="tab_last"><img class="mr-2 mb-1" style="width: 20px;" src="https://img.icons8.com/glyph-neue/64/ffffff/card-in-use.png" alt="card payment" /> Payment Method:</li>
			</ul>
			<div class="tab_container">
				<h3 class="tab_drawer_heading d_active" rel="tab1"><img class="mr-2 mb-1" style="width: 20px;" src="https://img.icons8.com/ios-filled/50/ffffff/privacy-policy.png" alt="Privacy policy" /> Terms of Service</h3>
				<div id="tab1" class="tab_content" style="display: block;">
					<h2>Terms and Conditions</h2>
					<p>This website is owned and operated by Isabasu Pvt Ltd By using this website, you agree to be bound by these terms and conditions. The images, content, infographics and other material are the property of Isabasu Pvt Ltd.</p>
					<p>All content is copyrighted and may not be used for personal and non-commercial purposes.</p>
				</div>
				<h3 class="tab_drawer_heading" rel="tab2"><img class="mr-2 mb-1" style="width: 20px;" src="https://img.icons8.com/glyph-neue/64/ffffff/taxi.png" alt="Taxi" /> Taxi Charges</h3>
				<div id="tab2" class="tab_content" style="display: none;">
					<h2>Taxi Charges</h2>
					<p>If you book a outcall service or if our escorts travel from one location to another, there will be some travel charges that will be included in the final amount. For full night service there is no extra charges and it is completely free of charge.</p>
				</div>
				<h3 class="tab_drawer_heading" rel="tab3"><span class="icon-blocked mr-2"></span> Cancellation Fees</h3>
				<div id="tab3" class="tab_content" style="display: none;">
					<h2>Cancellation Fees</h2>
					<p>Cancellation fees apply if you cancel the service after the escorts have arrived at your location. That is, if you have confirmed the booking and the female escorts have already arrived at your location and you have canceled the booking then you will have to pay the cancellation amount.</p>
				</div>
				<h3 class="tab_drawer_heading" rel="tab4"><img class="mr-2 mb-1" style="width: 20px;" src="https://img.icons8.com/glyph-neue/64/ffffff/card-in-use.png" alt="card payment" />Payment Method</h3>
				<div id="tab4" class="tab_content" style="display: none;">
					<h2>Payment Method</h2>
					<p>All our escorts accept cash payment, but you can also use UPI, Paytm, Amazon Pay, Google Pay, Phone Pay, Internet Banking, Mobile Banking, etc to pay the service fees. We ask you to make the payment as soon as the escorts arrive at the location to avoid any inconvenience during your date.</p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- section 6 price card  -->
<section class="bg-red py-5">
	<div class="container">
		<h3 class="main-heading text-warning mb-4">Turn your fantasies into reality with our female escorts</h3>

		<p class="text-light"> Are you a bachelor who has recently moved into the city place of dreams to start a new life? Or are you an existing resident of the town?
		</p>
		<p class="text-light"> No matter whomsoever you are, a man is always willing to act on his fantasies. And what better place could be than Mumbai to fulfill your fantasy? Our exclusive Mumbai female escorts will help you accomplish your fantasies.
		</p>
		<p class="text-light"> Whatever may be your fantasy, it is worth acting upon. And why wait another day when you can get laid today? Our <a href="<?php echo base_url(); ?>">sexy escorts in Mumbai</a> will help you fulfill the following of these fantasies: <br> <br>
			You get to choose from 10+ varieties of premium escorts with our highest-rated Mumbai Escort Agency. Russian, Indian, Blonde, Asian, Models, Housewife- You say it, We will make it happen for you.


		</p>

		<h3 class="main-heading text-warning mb-4"> <span class="text-light"> Bondage & BDSM </span></h3>
		<p class="text-light">Our talented ladies and Mumbai teen escorts are always eager to get into some action. <br> <br>
			And the best way to get some action in your sex life is by engaging in BDSM. Our talented ladies will take your breath away by becoming your obedient submissive.
			<br><br>
			You can tie her up, or be tied up, it’s all up to you. Treat our sexy <a href="<?php echo base_url();?>">sexy Mumbai escorts</a> like your own sex slaves in these BDSM sessions.
		</p>

		<h3 class="main-heading text-warning mb-4"> <span class="text-light ml-1">Lesbian Threesome
			</span></h3>
		<p class="text-light">Are you looking for some kink with not one but two pairs of mind-boggling breasts? Then our <a href="<?php echo base_url();?>">Mumbai escort service</a> has an excellent duo for you. You can hire any of our two Mumbai call girls.
		</p>
		<p class="text-light">Our spicy call girls will come to the venue and will please you so much that you’ll want to grind their holes so hard that you’ll come pounding. We have sensational ladies that will gear up and have mesmerizing foreplay with each other to make your soft manhood hard like a rock. <br>
			<br>
			Once you have an erection, you can pound them for hours and hours, call us today and book some hot & pretty girls in Mumbai escorts for your pleasure.
		</p>


		<h3 class="main-heading text-warning mb-4"> <span class="text-light ml-1">Newly Married Housewife or Bhabhi is here to Escort you
			</span></h3>
		<p class="text-light">We have a beautiful collection of sexy <a href="<?php echo base_url();?>">Mumbai housewife escorts</a> who will escort your the whole night to please your manhood. These magnificent independent Mumbai escorts have superb moves to make you come. <br><br>Along with that, they also know how to please themselves with their manhood. You will definitely want to hang out with these enthralling ladies.
			<br><br>
			So what are you waiting for? Above are only some of the fantasies that will be fulfilled in the city of dreams. Don’t be shy and call us today to book your exclusive lady, customized just for you.
		</p>
	</div>
</section>

<!-- content 2  -->
<section class="bg-light py-5bg-red py-5">
	<div class="container">
		<h2 class="main-heading text-danger">Special Services available below: </h2>
		<p class="text-dark">
			<span><img data-src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" height="25" width="25" class="blur-up ls-is-cached lazyloaded" alt="ring image">69: Partners perform oral sex on each
				other
				simultaneously</span>
		</p>
		<p class="text-dark">
			<span><img data-src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" height="25" width="25" class="blur-up ls-is-cached lazyloaded" alt="ring image">A Level: Reference to anal sex</span>
		</p>
		<p class="text-dark">
			<span><img data-src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" height="25" width="25" class="blur-up ls-is-cached lazyloaded" alt="ring image">ATM: Ass to mouth. Penis, finger or toy
				comes out of her
				ass, and goes directly into her</span>
		</p>

		<p class="text-dark">
			<span><img data-src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" height="25" width="25" class="blur-up ls-is-cached lazyloaded" alt="ring image">BBBJ: Bareback Blow Job, oral
				stimulation of the penis
				without a condom</span>
		</p>

		<p class="text-dark">
			<span><img data-src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" height="25" width="25" class="blur-up ls-is-cached lazyloaded" alt="ring image">BBBJTC: Bareback Blow Job To Completion,
				oral stimulation of
				the penis to orgasm without a condom.</span>
		</p>
		<p class="text-dark">
			<span><img data-src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" height="25" width="25" class="blur-up ls-is-cached lazyloaded" alt="ring image">BDSM: Bondage, Discipline,
				Sado-Masochism</span>
		</p>
		<p class="text-dark">
			<span><img data-src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" height="25" width="25" class="blur-up ls-is-cached lazyloaded" alt="ring image">CBJ: Covered Blow Job, fellatio with a
				condom</span>
		</p>
		<p class="text-dark">
			<span><img data-src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" height="25" width="25" class="blur-up ls-is-cached lazyloaded" alt="ring image">CID: Cum In Deep with no condom</span>
		</p>
		<p class="text-dark">
			<span><img data-src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" height="25" width="25" class="blur-up ls-is-cached lazyloaded" alt="ring image">DFK: Deep French Kissing, kissing with
				tongue</span>
		</p>
		<p class="text-dark">
			<span><img data-src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" height="25" width="25" class="blur-up ls-is-cached lazyloaded" alt="ring image">DT: Deep throat fellatio where the whole
				length of the penis
				is "swallowed"</span>
		</p>
		<p class="text-dark">
			<span><img data-src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" height="25" width="25" class="blur-up ls-is-cached lazyloaded" alt="ring image">FUSS: Having an extreme fixation,
				usually sexually
				satisfying on something</span>
		</p>
		<p class="text-dark">
			<span><img data-src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" height="25" width="25" class="blur-up ls-is-cached lazyloaded" alt="ring image">HJ: Hand Job, stimulation of the penis
				using hand and
				fingers</span>
		</p>
		<p class="text-dark">
			<span><img data-src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" height="25" width="25" class="blur-up ls-is-cached lazyloaded" alt="ring image">RIM: To lick someone's anus with your
				tongue. Called
				"rimming" because it's done around the rim of the anus.</span>
		</p>
		<p class="text-dark">
			<span><img data-src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" src="https://res.cloudinary.com/sygm/image/upload/img/gif/ring.gif" height="25" width="25" class="blur-up ls-is-cached lazyloaded" alt="ring image">Role play: When someone dresses up as a
				character of any
				kind while having sex</span>
		</p>
	</div>
</section>


<!-- section 6 price card  -->
<section class="bg-red py-5">
	<div class="container">
		<h3 class="main-heading text-warning mb-4">Get in touch with us. Let's have a chat</h3>

		<p class="text-light"> Getting in touch with us is also a better way for you to clarify so many doubts that still lingering in your mind. More than anything we give you an exact detail of everything that happens from the beginning of the booking until the end.


		</p>
		<p class="text-light"> Because we also want you to feel free about our service and we don't want you to keep doubts in mind and thinking of it always rather than clearing it, when that happens you'll get some strength and that makes your mind free and fresh.
			<br><br>
			So, call us for any of the particular reasons and Mumbai escort service girl will always be ready to chat with you until you feel ok.

			<br><br>
			Your Personal Door to Heaven awaits your presence. Your presence will be welcomed with a sensual treat from the god gifted angels.
		</p>

		<h3 class="main-heading text-warning mb-4"> <span class="text-light"> Safety Stands Most Required when It Comes to Physical Intercourse
			</span></h3>
		<p class="text-light">Mumbai is a bustling city that attracts people from all parts of India. In addition, it houses one of India’s busiest ports, making it a transit stop for travelers and businessmen alike.


			<br><br>
			If you are in Mumbai and desire more than a handshake, there are plenty of independent Mumbai Escorts offering beautiful women & girl with whom you can spend time and pleasure without any embarrassment or security worries.
			<br><br>
			Your personal privacy is as important as your physical health; be sure to ask about a woman’s safety measures before hiring her services.

			<br><br>We ensure complete privacy for our clients because that’s what they deserve. What are you waiting for? Call us today!
		</p>
		<p class="text-light">The information about escort service in Mumbai is sometimes a bit confusing, that’s why it is important for us to make some clarification: First of all, our beautiful and charming works only with professional female escorts in Mumbai.
		</p>
		<p class="text-light">In addition, we never give out contact data or share the name, sur name ,hair color , number, pictures, age, place any star hotel address, and review of a college girl outside our Navi Mumbai escort girls because we are concerned about their safety and comfort.
			<br><br>We look at every woman as an individual with her own set of characteristics and values ​​and help her find her place in society. You will enjoy every moment with one of our escort service girl because they are trained in modern skills and speak English fluently.

		</p>
		<p class="text-light">
			You can get naughty with them without worrying about being judged by them; they are sensitive to your needs and will do everything possible to make you feel better.


		</p>

		<h3 class="main-heading text-warning mb-4"> <span class="text-light ml-1">Advantages of alluring And amiable Escorts In Mumbai -
			</span></h3>
		<ul>
			<li>The importance of trust and security in our relationship -</li>
			<li>Physical intimacy is more important than love itself -</li>
			<li>We also value being honest with an intimate partner -</li>
			<li>Do not settle for less than 100% security -</li>
			<li>We use condoms to increase protection -</li>
		</ul>


		<h3 class="main-heading text-warning mb-4"> <span class="text-light ml-1">Enjoy Mouth-Watering Spicy Mumbai Call Girls and Have Fun & Sex
			</span></h3>
		<p class="text-light">Cheerful lovemaking experiences that you can enjoy with the scorching female partner are truly outstanding. Mumbai call girl with attractive figures is popular for elite services. Our sex goddesses work as per their own desires and serve others with great enthusiasm.
			<br><br>
			So, now hire such fantastic female escorts in Mumbai, who are not only beautiful but also serve men better than anyone girlfriend else with their striking body figures and excellent seductive skills.
		</p>
		<p class="text-light">
			If you want to make your erotic dreams a reality, then our escorts in Mumbai will be your best choice. Regardless of whether it is just friendship or hot charm at night, these fresh companions offer everything within one call!
			<br><br>
			Our female Escorts in Mumbai are extremely lively; any man would like to have sex with them once they have an interaction. It is extremely easy for them to convince a man as well as fulfill his enjoyment desire forever!


		</p>
	</div>
</section>


<!-- content 2  -->
<section class="bg-light py-5bg-red py-5">
	<div class="container">
		<h2 class="main-heading text-danger">Mumbai Call Girls provides you type of "sex" </h2>
		<p class="text-dark">
		Blowjob, Intercourse, and Sensual Massage. They are highly passionate about their clients. The Mumbai Escort girls are very professional and try to serve their clients at whatever price they charge them.

				<br><br>
				They make every attempt to keep their client happy with fun-filled services like warm wild sex, Group Sex, best oral sex, and hard-core shower sex.

				<br><br>
				Their agency offers you some freebies along with each call girl package such as free drinks (wine and beer), etc.
		</p>
		<p class="text-dark">And you can also avail of their hand-2-hand money-back guarantee service if you were not satisfied by particular escorts in Mumbai & call girls in Mumbai or if any teenager denied you further sexual interactions after completion of your paid time schedule.
			<br><br>
			Our hot and sexy Mumbai call girl with attractive figures are popular for elite services. We have all kinds of lovely Mumbai escorts gallery girls photos. They work as per their own desires and serve others with great enthusiasm.
			<br>
			Call us now! 900000000! You can get numerous types of sex in the Mumbai escort service:
	</p>
	<h3 class="main-heading text-warning mb-4"> <span class="text-dark ml-1">"Hard-Core Shower Sex"
			</span></h3>
			<p class="text-dark">If you're looking for a way to spice up your relationship, consider hard-core shower sex.</p>
			<p class="text-dark">While it's not as exciting as some of these other positions on our list, an easy option is to hop into the shower together and engage in some steamy foreplay. Whether that means kissing, rubbing soap on each other's bodies, or getting extremely handsy, who knows!</p>
			<p class="text-dark">A fun twist might be setting up a towel bar in your shower and seeing who can have sex hanging off it without slipping and falling.
			</p>
			<p class="text-dark">Mumbai Escort Service is one such agency that provides young call girls for romantic and erotic Hard-Core Shower Sex encounters. Such Mumbai Escort girls are professionally trained to give satisfaction and make their clients satisfied.
			</p>
			<h3 class="main-heading text-warning mb-4"> <span class="text-dark ml-1">"Warm Wild Sex"</span></h3>
			<p class="text-dark">Without caring about time and place, hot Mumbai Escorts Service girls will have wild sex with you. They not only offer you sensual kisses but also give excellent blowjobs to you. They are experienced enough to understand your needs and act accordingly.
			</p>
			<p class="text-dark">Whether it is female escorts on males or vice versa, they will give tough competition to each other in bed. Our Mumbai Escorts Service girls will make your lovemaking sessions warm, wild, and memorable for you to date!
				<br><br>So just wait no more and contact private call girls in Mumbai now! You cannot afford to miss out on such kinds of sexy experiences ever again in life.
			</p>
		
			<h3 class="main-heading text-warning mb-4"> <span class="text-dark ml-1">"Amazing and Hard Oral Sex"</span></h3>
			<p class="text-dark">This type of sexual activity involves stimulating a partner’s penis by mouth. Many men and women find it less intimate than other forms of intercourse. However, that may be because people tend to focus on their own pleasure while performing fellatio (oral stimulation).
			</p>
			<p class="text-dark">Experienced to give the best oral sex, Mumbai escorts love to suck on your manhood. Sex is considered a pleasurable activity and those who enjoy lovemaking experience truly commendable pleasure during such an act. <br> <br>
			As far as oral sex is concerned, you'll notice that there are many men who would like to enjoy it with their Mumbai Escorts Service girls.
			<br><br>But there are girl who don't take interest in it but they know that they have to satisfy their man by giving them what they like.
    </p>

	</div>
</section>

<!-- section 6 price card  -->
<section class="bg-red py-5">
	<div class="container">
		<h3 class="main-heading text-warning mb-4">How to discover your fantasy babe and seductive female escorts in Mumbai ?</h3>

		<p class="text-light"> You might be getting bored with the monotony of a relationship while on a business trip or passing some precious time after completion, so why delay anymore!
		</p>
		<p class="text-light"> Your happiness is of utmost to us and you can count on us to keep your data private, just between the two of you Finding the perfect Mumbai escort can be hard.<br><br>
		A decision like this is never made in haste and should be made with care and consideration.
			<br><br>
			Our "SYG" escorts agency offers you a wide range of exquisite Escorts in Mumbai who will make your every desire come true. An independent female Mumbai escort service girls can fulfill your wishes if you are interested in having sexual relationships with her.


		</p>

		<p class="text-light">She will provide different sensual pleasures which you always desired for. The city has beautiful bed partner & teenage call girls who offer high-class services at reasonable prices to clients for business or casual meetings.
			<br><br>
			Many independent models, college girls, and housewives also show interest in being a part of escort services as they get more benefits from it.
			<br><br>
			Our Mumbai escort service seductive ladies know how to tease their clients and drive them crazy by looking gorgeous and hot when they wear sexy dresses while attending parties.

			<br><br>These hot females also know lots of different sex positions which makes them perfect partners during adventurous lovemaking sessions. So, for the best outcall and erotic home service experiences in Mumbai,
		</p>
		<p class="text-light">If you are looking hot girl in Mumbai then you must visit our website only because we showcase all the latest photos of beautiful Mumbai Escorts Service girls and housewives that come from Mumbai only.


		</p>
		<p class="text-light">Our gallery section contains high profile girls which means these independent models are coming from Mumbai for man satisfaction. simply open your browser visit our "SYG " escorts service website and begin your new escorting adventure.

		</p>
	
	</div>
</section>


<!-- section 12 contact form  -->
<style>
	a {
		-webkit-transition: all .30s ease-in-out;
		-moz-transition: all .30s ease-in-out;
		-ms-transition: all .30s ease-in-out;
		-o-transition: all .30s ease-in-out
	}

	input[type=submit] {
		-webkit-appearance: button;
		cursor: pointer
	}

	a,
	a:hover {
		color: #f3a806
	}

	input[type=submit] {
		font-family: 'Montserrat', sans-serif
	}

	.home-contact {
		background: #29272b;
		background-size: cover;
		padding: 100px 0
	}

	.h-heading {
		display: inline-block;
		width: 100%;
		padding-bottom: 30px;
		position: relative;
		margin-bottom: 70px
	}

	.h-heading:after {
		height: 3px;
		width: 100px;
		background: #f3a806;
		content: '';
		display: block;
		position: absolute;
		bottom: 0
	}

	.contact-info ul {
		padding-left: 0
	}

	.contact-info ul li,
	.contact-info ul li a {
		font-size: 18px;
		font-weight: 300;
		line-height: 30px;
		list-style: none;
		margin-bottom: 30px
	}

	.contact-info ul li span {
		display: block;
		opacity: .65;
		font-size: 16px
	}

	.contact-info ul li img {
		margin-top: 8px
	}

	.h-email a {
		font-size: 24px
	}

	.contact-info .s-icon {
		display: inline-block;
		margin-top: 30px;
		width: 100%
	}

	.contact-info .s-icon a {
		color: #9c9c9c;
		font-size: 22px;
		padding: 0 4px;
		width: 47px;
		height: 47px;
		display: inline-block;
		line-height: 46px;
		text-align: center;
		border-radius: 50%;
		margin-right: 15px
	}

	.h-email {
		margin-top: 20px;
		display: inline-block;
		width: 100%
	}

	.h-form .wpcf7-form-control {
		background: transparent;
		border: 0;
		font-family: 'Poppins', sans-serif;
		font-size: 16px;
		border-bottom: 2px solid #f2f2f2;
		font-weight: 300;
		width: 100%;
		padding: 17px 0;
		margin-bottom: 25px;
		color: #fff;
		outline: 0
	}

	::-webkit-input-placeholder {
		color: #ffffff80
	}

	.h-form .wpcf7-form-control:-ms-input-placeholder {
		color: #ffffff80
	}

	.h-form textarea.wpcf7-form-control {
		height: 150px
	}

	.h-form input.wpcf7-form-control.wpcf7-submit {
		background: #fff;
		background: -moz-linear-gradient(top, #fff 0, #cfd1d2 100%);
		background: -webkit-linear-gradient(top, #fff 0, #cfd1d2 100%);
		background: linear-gradient(to bottom, #fff 0, #cfd1d2 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#cfd1d2', GradientType=0);
		color: #000;
		font-weight: 500;
		float: right;
		font-size: 18px;
		width: auto;
		padding: 15px 35px;
		border-bottom: 0;
		transition: .3s;
		border-radius: 30px
	}


	@media only screen and (max-width:992px) {
		.h-heading {
			margin-bottom: 30px
		}

		.home-contact {
			padding: 50px 0
		}

		.contact-info ul li,
		.contact-info ul li a {
			font-size: 16px;
			line-height: 27px
		}

		.h-email a {
			font-size: 20px
		}
	}

	@media only screen and (max-width:767px) {
		.h-form input.wpcf7-form-control.wpcf7-submit {
			background: #fff;
			background: -moz-linear-gradient(top, #fff 0, #cfd1d2 100%);
			background: -webkit-linear-gradient(top, #fff 0, #cfd1d2 100%);
			background: linear-gradient(to bottom, #fff 0, #cfd1d2 100%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#cfd1d2', GradientType=0);
			color: #000 !important;
			font-weight: 500;
			font-size: 16px;
			width: auto;
			padding: 10px 25px;
			border-bottom: 0;
			transition: .3s;
			display: inline-block
		}

		.contact-info .s-icon {
			margin-top: 30px;
			width: 100%;
			margin-bottom: 50px
		}

		.home-contact {
			padding: 50px 0 20px
		}
	}

	@media(max-width:359px) {
		.h-heading {
			margin-bottom: 23px;
			padding-bottom: 10px
		}
	}
</style>
<div class="home-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="h-heading main-heading text-warning">Contact Information</div>
				<div class="contact-info">
					<ul>
						<li><span>You can find us here:</span> Andheri Mumbai</li>
						<li><span>Phone:</span>
							<a href="tel:+919523402933">9523402933</a>
						</li>
						<li>
							<span>WhatsApp: </span>
							<a class="btn btn-warning" href="https://wa.me/919523402933" target="_blank">
								<span style="display: inline;opacity: 1;font-size: 18px;" class="icon-whatsapp mr-1"></span> WhatsApp Now
							</a>
						</li>
					</ul>
					<div class="h-email"><a href="email:mail4selectgirls@gmail.com">mail4selectgirls@gmail.com</a></div>
					<div class="s-icon">
						<a href="#"><span class="icon-facebook"></span></a>
						<a href="#"><span class="icon-twitter"></span></a>
						<a href="#"><span class="icon-instagram"></span></a>
					</div>
				</div>
			</div>
			<div class="col-md-6  col-sm-6">
				<div class="h-heading" style="font-size: 30px;font-weight: 700;text-transform: uppercase;">Get In Touch</div>
				<div class="h-form">
					<div role="form" class="wpcf7" id="wpcf7-f549-o1" lang="en-US" dir="ltr">
						<div class="screen-reader-response">
							<p role="status" aria-live="polite" aria-atomic="true"></p>
							<ul></ul>
						</div>
						<form action="contact" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
							<p><span class="wpcf7-form-control-wrap fullname">
									<input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name">
								</span><br>
								<span class="wpcf7-form-control-wrap emailaddress">
									<input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email address">
								</span><br>
								<span class="wpcf7-form-control-wrap Phonenumber">
									<input type="number" name="phone" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number" aria-required="true" aria-invalid="false" placeholder="Phone number">
								</span><br>
								<span class="wpcf7-form-control-wrap message">
									<textarea name="msg" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea>
								</span><br>
								<input type="submit" name="submit" value="Submit" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span>
							</p>
							<div class="wpcf7-response-output" aria-hidden="true"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>