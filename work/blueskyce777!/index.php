<!--?php @session_start();
get_includes('head');
get_includes('header');
get_includes('nav');
get_includes('banner');
?-->
<!--?php if ( is_front_page() ) { get_includes('middle'); }?-->

<!DOCTYPE html>
<!--[if lt IE 10]>      <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 10]>         <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 11]>         <html class="no-js lt-ie11"> <![endif]-->
<!--[if gt IE 11]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

	<title><?php //echo get_bloginfo('name');?>CompanyName</title>


	<link rel="stylesheet" href="style.min.css">
	<link rel="stylesheet" href="css/hamburgers.min.css">
	<link rel="stylesheet" href="css/media.min.css">
	<link rel="stylesheet" href="css/rslides.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/skitter.styles.min.css" type="text/css" media="all"  />

	<!--?php wp_head(); ?-->
</head>
	<body>
		<div class="protect-me">
		<div class="clearfix">

<!-- Header -->
<header>
	<div class="wrapper">
		<div class="header_con">
			<div class="main_logo">
			  <a href="<?php //echo get_home_url(); ?>"><figure><img src="images/main-logo.png" alt="<?php //echo get_bloginfo('name');?>"/></figure></a>
			</div>
			<!-- Navigation -->
			<div id="nav_area">
				<div class="nav_toggle_button">
				<div class="logo_wrap"></div>
					<div class="toggle_holder">
						<div class="hamburger hamburger--spin-r">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
						</div>
						<small>Menu</small>
					</div>
				<div class="clearfix"></div>
				</div>

				<div class="toggle_right_nav">
				<nav class="page_nav">
						<div class="menu_slide_right">
							<a href="<?php //echo get_home_url(); ?>" class="logo_slide_right"><figure><img src="images/main-logo.png" alt="<?php //echo get_bloginfo('name');?>"/></figure></a>
							<div class="toggle_holder">
								<div class="hamburger hamburger--spin-r">
								<div class="hamburger-box">
									<div class="hamburger-inner"></div>
								</div>
								</div>
								<small>Close</small>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="wrapper">
							<!--?php wp_nav_menu( array( 'container_class' => 'nav-menu', 'theme_location' => 'primary', 'after' => '<span><i class="fa fa-2x">&nbsp;&nbsp;&nbsp;&nbsp;</i></span>') ); ?-->
							<ul>
								<li class="current_page_item"><a href="">Home</a></li>
								<li><a href="">About Us</a></li>
								<li><a href="">Search Properties</a></li>
								<li><a href="">Featured Homes</a></li>
								<li><a href="">Our Realtors</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Contact Us</a></li>
							</ul>
						</div>
				</nav>
					<div class="toggle_nav_close"></div>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="insert"></div>
		</div>
	  <div class="clearfix"></div>
	</div>
</header>
<!-- End Header -->

<!-- Banner -->
<div id="banner">
	<div class="wrapper">
		<div class="bnr_con">
			
			<div class="slider">
				<ul class="rslides">
					<li><figure><img src="images/slider/1.jpg" alt="Modern house"/></figure></li>
					<li><figure><img src="images/slider/2.jpg" alt="brown house"/></figure></li>
					<li><figure><img src="images/slider/3.jpg" alt="black house"/></figure></li>
				</ul>

				<div class="box_skitter box_skitter_large">
					<ul>
						<li><figure><img src="images/slider/1.jpg" class="fade" alt="Modern house" /></figure></li>
						<li><figure><img src="images/slider/2.jpg" class="random" alt="brown house"/></figure></li>
						<li><figure><img src="images/slider/3.jpg" class="fade" alt="black house"/></figure></li>
					</ul>
				</div>
			</div>


			<div class="bnr_info">
				<h2><small>Simple Honest</small><span>Reliable</span></h2>
				<p>You are reading dummy text as placeholders for this layout. Dummy text for the reader to review.</p>
				<a href="javascript:;">Find Out More</a>
			</div>

		</div>
	</div>
</div>
<!-- End Banner -->

<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<div class="main_side_box">
				<div class="main_side_box2">
					<section class="box1">
						<figure><img src="images/main-bg1.jpg" alt="orange house with flower and blue sky"></figure>
						<div class="main_content_box">
							<h2><span>Talk to a </span><small>Real Estate Agent!</small></h2>
							<p>You are reading dummy text as placeholders for this layout.</p>
							<a href="#">Click Here</a>
						</div>
					</section>
					<section class="box2">
						<div class="main_content_box">
							<h2><span>Submit Your </span><small>Client Referrals</small></h2>
							<p>You are reading dummy text as placeholders for this layout.</p>
							<a href="#">Click Here</a>
						</div>
						<figure><img src="images/main-bg2.jpg" alt="modern house"></figure>
					</section>
				</div>
			</div>
			<main>
				<h1 class="h1_title"><span>Introducing</span><small>Blue Sky Real Estate</small></h1>
				<p>You are reading dummy text as placeholders for this layout. Dummy text for the reader to review. Words shown on this layout are placeholders. More information about the company will be posted soon.</p>

				<div class="main_sub_content">
					<p>Contents are for display purposes only.  This space is reserved for more details.</p>
				</div>
			</main>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->

<!-- Bottom -->
<div id="bottom1">
	<div class="wrapper">
	<div class="btm1_parallax">
		<figure><img src="images/btm1-bg.jpg" alt="kitchen"></figure>
	</div>
		<div class="btm1_con">
			<div class="btm1_info">
				<h2>
					<small>Our Commitment</small>
					<span>Our Mission Statement</span>
				</h2>
				<p>These dummy texts are for display purposes only to show the volume of content that will be placed on this particular page. Thank you for visiting our website.</p>
				<a href="#">About Us</a>
			</div>
			<div class="btm1_boxes">
				<section class="btm1_box1">
					<h2><small>01</small> <span>Selling</span></h2>
					<p>You are reading dummy text as placeholders for this layout. </p>
					<a href="javascript:;">Click Here</a>
				</section>
				<section class="btm1_box2">
					<h2><small>02</small> <span>Buying</span></h2>
					<p>You are reading dummy text as placeholders for this layout. </p>
					<a href="javascript:;">Click Here</a>
				</section>
				<section class="btm1_box3">
					<h2><small>03</small> <span>Renting</span></h2>
					<p>You are reading dummy text as placeholders for this layout. </p>
					<a href="javascript:;">Click Here</a>
				</section>
				<section class="btm1_box4">
					<h2><small>04</small> <span>View More</span></h2>
					<p>You are reading dummy text as placeholders for this layout. </p>
					<a href="javascript:;">Click Here</a>
				</section>
			</div>
		</div>
	</div>
</div>

<div id="bottom2">
	<div class="wrapper">
		<div class="btm2_con">
			<div class="btm2_info">
				<h2><small>Reach Out With Us</small><span>Send Us a Message</span></h2>
			</div>
			<form action="#">
				<input type="text" name="" id="" placeholder="Full Name*" required>
				<input type="email" name="" id="" placeholder="Email Address*" required>
				<textarea name="" id="" placeholder="Message(s)"></textarea>
				<button type="submit">Submit</button>
			</form>
		</div>
	</div>
</div>
<!-- End Bottom -->

<!--Footer -->
<footer>
<div class="footer_top">
	<div class="wrapper">
		<div class="footer_top_con">
			<div class="contact_info">
				<h2 class="contact_details">
					<small>Get in Touch</small>
					<span>Contact Details</span>
				</h2>
				<p class="service_covered">Service Areas Covered: St. Louis County, St. Louis City, St. Charles County</p>
				<ul class="phone_location">
					<li class="phone">
						<h2>Call or Email Us:</h2>
						<span class="phone_inside">
							<p>Phone:</p> <mark>314-456-6541</mark>
						</span>
						<span class="email_inside">
							<p>Email:</p> <a href="mailto:blueskyrealty2020@gmail.com">blueskyrealty2020@gmail.com</a>
						</span>
					</li>
					<li class="location">
						<h2>Our Location:</h2>
						<address>932 Justice Court. <span>Florissant, Missouri 63034</span></address>
					</li>
				</ul>

				<div class="copyright_social">
				<div class="copyright">
					<span class="footer_comp"><?php //echo get_bloginfo('name');?>Blue Sky Real Estate</span>
					<span class="footer_comp1">
					&copy; Copyright
							<?php
							$start_year = '2021';
							$current_year = date('Y');
							$copyright = ($current_year == $start_year) ? $start_year : $start_year.' - '.$current_year;
							echo $copyright;
							?>
						<p class="designed">Designed by</p> <a href="https://proweaver.com" target="_blank" rel="nofollow">Proweaver</a>
					</span>
				</div>
				<div class="social_media">
					<p>Stay Connected</p>
					<ul>
						<li><a href="https://facebook.com"><figure><img src="images/fb-icon.png" alt="facebook"></figure></a></li>
						<li><a href="https://twitter.com"><figure><img src="images/twitter-icon.png" alt="twitter"></figure></a></li>
					</ul>
				</div>
			</div>
			</div>

			<div class="footer_top_img">
				<figure><img src="images/footer-top-bg.jpg" alt="agent showing the house to the couple"></figure>
			</div>
		</div>
	</div>
</div>

<div class="footer_btm">
  <div class="wrapper">
			<div class="footer_btm_con">
				<div class="footer_nav">
					<ul>
						<li class="current_page_item"><a href="index.php">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Search Properties</a></li>
						<li><a href="#">Featured Homes</a></li>
						<li><a href="#">Our Realtors</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
</div>
</footer>

	<span class="back_top"></span>

  </div> <!-- End Clearfix -->
  </div> <!-- End Protect Me -->

  <!--?php get_includes('ie');?-->

  <!--
  Solved HTML5 & CSS IE Issues
  -->
  <script src="js/modernizr-custom-v2.7.1.min.js"></script>
  <script src="js/jquery-2.1.1.min.js"></script>

  <!--
  Solved Psuedo Elements IE Issues
  -->
  <script src="js/calcheight.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.skitter.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  <script src="js/plugins.js"></script>
  <!--?php wp_footer(); ?-->
</body>
</html>
<!-- End Footer -->
