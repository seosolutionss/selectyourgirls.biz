<style>
	<?php include('assets/css/slick.css'); ?>
</style>
<style>
	<?php include('assets/css/gallery.css'); ?>
</style>


		<div class="col-12 col-sm-12 col-md-12 col-lg-9 p-0">
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
											<span class="text-light"> Have it or Grab it!!!</span>
										</h1>
										<p class="pera-style-1 text-left">We are Mumbai's No.1 escorts service provider as it connects you with so many hot and attractive girls, which will force your banana to fire right away! 🤣🤣🤣</p>
										<p class="pera-style-1 text-left">We are in this escorts industry since 2010, and we are proud to say that no one can beat us in quality service because of our trained queens.
										</p>
										<h4 class="text-left text-bold text-danger">Some Walkthroughs to our SYG Mumbai Escorts</h4>

										<ul class="f18">
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

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			<div class="inner-page headerdi mt-4" id="block_281">
				<div class="container">
					<h2 class="main-heading text-warning">View our Popular <span class="text-light">Mumbai Escorts list, 2022</span> </h2>
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
									<div class="name text-warning ml-2 ml-md-3 font-weight-bold"><?php echo $row['title']; ?></div>
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
									<div class="nationality px-2 px-md-3 py-3"><?php if (!empty($row['abt_profile'])) {
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
		</div>
	</div>
	</div>
</section>




<section class="container-fluid bg-red py-5">
	<div class="gl__container">
		<div class="content-list">
			<div class="mb-3">
				<h2 class="main-heading">Other Categories <span class="text-light">you may like</span></h2>
			</div>

			<div class="autoplay cat-slider">
				<a href="https://www.selectyourgirls.net/category/18+-teenage-escorts.html">
					<img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/teenage-escorts1.jpg" alt="teenage-escorts" style="padding:10px; height:100%; width:100%"></a>
				<a href="https://www.selectyourgirls.net/category/vip-girls.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/vip-girls1.jpg" alt="vip-girls" style="padding:10px; height:100%; width:100%"></a>
				<a href="https://www.selectyourgirls.net/category/women-seeking-men.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/women-seeking-men1.jpg" style="padding:10px; height:100%; width:100%" alt="women-seeking-men"></a>

				<a href="https://www.selectyourgirls.net/category/threesome.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/threesome1.jpg" alt="threesome" style="padding:10px; height:100%; width:100%"></a>
				<a href="https://www.selectyourgirls.net/category/party-girls.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/party-girls1.jpg" style="padding:10px; height:100%; width:100%" alt="party-girls"></a>
				<a href="https://www.selectyourgirls.net/category/new-escorts.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/new-escorts1.jpg" style="padding:10px; height:100%; width:100%" alt="new-escorts"></a>
				<a href="https://www.selectyourgirls.net/category/one-night-stand.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/one-night-stand1.jpg" style="padding:10px; height:100%; width:100%" alt="one-night-stand"></a>
				<a href="https://www.selectyourgirls.net/category/massage-girls.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/massage-girls1.jpg" style="padding:10px; height:100%; width:100%" alt="massage-girls"></a>
				<a href="https://www.selectyourgirls.net/category/foreigner-girls.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/foreigner-girls1.jpg" style="padding:10px; height:100%; width:100%" alt="foreigner-girls"></a>
				<a href="https://www.selectyourgirls.net/category/girlfriend-experience.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/girlfriend-experience1.jpg" alt="girlfriend-experience" style="padding:10px; height:100%; width:100%"></a>
				<a href="https://www.selectyourgirls.net/category/call-girls.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/call-girls1.jpg" style="padding:10px; height:100%; width:100%" alt="call-girls"></a>
				<a href="https://www.selectyourgirls.net/category/dating-girls.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/dating-girls1.jpg" style="padding:10px; height:100%; width:100%" alt="dating-girls"></a>
				<a href="https://www.selectyourgirls.net/category/call-aunties.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/call-aunties1.jpg" style="padding:10px; height:100%; width:100%" alt="call-aunties"></a>
				<a href="https://www.selectyourgirls.net/category/young-girls.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/young-girls1.jpg" style="padding:10px; height:100%; width:100%" alt="young-girls"></a>
				<a href="https://www.selectyourgirls.net/category/busty-girls.html"><img class="cld-responsive" src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/banner/busty-girls1.jpg" style="padding:10px; height:100%; width:100%" alt="busty-girls"></a>
			</div>
		</div>
	</div>
</section>

<section class="py-5">
	<div class="container-fluid">
		<h2 class="main-heading mb-3">Top Escorts Locations <span class="text-light">Mumbai escorts near me</span></h2>
		<div class="row">
			<?php foreach ($get_loc_lim as $locs) {
				$clod_img_loc = explode('.', $locs['loc_img']); ?>
				<div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
					<a class="partners-item" href="<?php echo base_url(); ?>location/<?php echo str_replace(' ', '-', $locs['loc_title']);  ?>/<?php echo $locs['id'];  ?>">
						<div class="partners-item__thumb">
							<!-- <div class="gredient"></div> -->
							<!-- <h5 class="lc-name"><span class="icon-location mr-1"></span><?php echo $locs['only_loc'];  ?></h5> -->
							<img class="img-fluid	partners-item__thumb__img lazyload" data-src="https://res.cloudinary.com/sygm/image/upload/w_auto,c_scale,f_auto/img/loc/<?php echo $clod_img_loc[0] ?>.webp" alt="<?php $locs['img_alt_title'] ?>">
						</div>
					</a>
				</div>
			<?php } ?>
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
<!-- <div class="body pt-5">
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
</div> -->





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
		<p class="text-dark">If you are ready to gain that excitement, happiness, intensity, and curiosity of erotic-ness, then get into our <a href="<?php echo base_url(); ?>">escorts Mumbai</a> because it is such a place to regain sexual pleasure with one of the beautiful and attractive outfit party girls.


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

		<p class="text-light"> <img src="<?php echo base_url() . 'assets/img/right-thumb.png'; ?>" alt="" height="30px"> The <a href="<?php echo base_url(); ?>">independent escort girl</a> you book through us feels the same like as your girlfriend because she casually appears in front of you with impressive looks, which attracts you.
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

		<h3 class="main-heading text-warning mb-4"> <span class="text-light ml-1">High-Class <a href="<?php echo base_url() . 'mumbai-call-girls'; ?>">Call girls</a> from heaven for you
			</span></h3>
		<p class="text-light">The days were always be tired and stressful in this modern world, and without a definite pleasure, one cannot get that enthusiasm required to move this life that's why <a href="<?php echo base_url() . 'mumbai-call-girls'; ?>">call girls Mumbai</a> is here for you to give that enthusiasm.
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
<!-- <div class="bg-light py-5">
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
</div> -->

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
<!-- <div class="bg-light py-5">
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
</div> -->


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
			You can tie her up, or be tied up, it’s all up to you. Treat our sexy <a href="<?php echo base_url(); ?>">sexy Mumbai escorts</a> like your own sex slaves in these BDSM sessions.
		</p>

		<h3 class="main-heading text-warning mb-4"> <span class="text-light ml-1">Lesbian Threesome
			</span></h3>
		<p class="text-light">Are you looking for some kink with not one but two pairs of mind-boggling breasts? Then our <a href="<?php echo base_url(); ?>">Mumbai escort service</a> has an excellent duo for you. You can hire any of our two Mumbai call girls.
		</p>
		<p class="text-light">Our spicy call girls will come to the venue and will please you so much that you’ll want to grind their holes so hard that you’ll come pounding. We have sensational ladies that will gear up and have mesmerizing foreplay with each other to make your soft manhood hard like a rock. <br>
			<br>
			Once you have an erection, you can pound them for hours and hours, call us today and book some hot & pretty girls in Mumbai escorts for your pleasure.
		</p>


		<h3 class="main-heading text-warning mb-4"> <span class="text-light ml-1">Newly Married Housewife or Bhabhi is here to Escort you
			</span></h3>
		<p class="text-light">We have a beautiful collection of sexy <a href="<?php echo base_url(); ?>">Mumbai housewife escorts</a> who will escort your the whole night to please your manhood. These magnificent independent Mumbai escorts have superb moves to make you come. <br><br>Along with that, they also know how to please themselves with their manhood. You will definitely want to hang out with these enthralling ladies.
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