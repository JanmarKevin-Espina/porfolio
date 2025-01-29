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


	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/hamburgers.min.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="css/rslides.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/skitter.styles.css" type="text/css" media="all"  />

	<!--?php wp_head(); ?-->
</head>
	<body>
		<div class="protect-me">
		<div class="clearfix">

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
					<li class="current_page_item"><a href="">Home<small>Welcome</small></a></li>
					<li><a href="">About Us<small>Who We Are</small></a></li>
					<li><a href="">Services<small>What We Do</small></a></li>
					<li><a href="">Careers<small>Employment</small></a></li>
					<li><a href="">Resources<small>Useful Links</small></a></li>
					<li><a href="">Contact Us<small>Get In Touch</small></a></li>
				</ul>
			</div>
	  </nav>
		<div class="toggle_nav_close"></div>
	</div>
</div>
<!-- End Navigation -->

<!-- Header -->
<header>
	<div class="wrapper">
		<div class="header_con">
			<div class="main_logo">
			  <a href="<?php //echo get_home_url(); ?>"><figure><img src="images/main-logo.png" alt="<?php //echo get_bloginfo('name');?>"/></figure></a>
			</div>

			<div class="head_info">
				<div class="header_info">
					<h2>
						Should you have inquiries? Call us now 
						<span><mark>281-980-2009</mark></span>
						or email us at: <a href="mailto:info@tandemhs.com">info@tandemhs.com</a>
					</h2>
				</div>
				<div class="social_media">
					<ul>
						<li><a href="https://www.facebook.com" target="_blank"><figure><img src="images/fb-icon.png" alt="facebook"/></figure></a></li>
						<li><a href="https://www.twitter.com" target="_blank"><figure><img src="images/twitter-icon.png" alt="twitter"/></figure></a></li>
					</ul>
				</div>
			</div>
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
					<li><figure><img src="images/slider/1.jpg" alt="two women chatting"/></figure></li>
					<!-- <li><figure><img src="images/slider/2.jpg" alt="nurse checking blood pressure"/></figure></li>
					<li><figure><img src="images/slider/3.jpg" alt="nurse reading"/></figure></li> -->
				</ul>
			</div>

			<div class="mobi_ban">
				<figure><img src="images/slider/1.jpg" alt=""></figure>
			</div>

			<div class="bnr_info">
				<figure><img src="images/bnr-bg.png" alt="two women smiling"></figure>
				<h2><span>we care<q>,</q></span>we serve <small>in your home.</small></h2>
				<p>dummy text for the reader to review. words shown on this layout are placeholders. more information about the company willbe posted soon.</p>
				<a href="javascript:;">find out more</a>
			</div>

		</div>
	</div>
</div>
<!-- End Banner -->

<!-- Middle -->
<div id="middle">
	<div class="wrapper">
		<div class="middle_con">
			<div class="middle_boxes">
				<div class="middle_info">
					<h2><span>what we do</span>Services We Offer</h2>
					<p>you are reading dummy text as placeholders for this layout. dummy text for the reader to review. words shown on this layout are placeholders.</p>
					<a href="#">view more servies</a>
				</div>

				<div class="middle_box">
					<section class="mid_box1">
						<figure><img src="images/middle-bg.jpg" alt="two people smiling"></figure>
							<div class="mid_box_info">
								<h2>Skilled <span>Nursing</span></h2>
								<p> You are reading dummy text as placeholders for this layout. </p>
							</div>
						<a href="javascript:;">
							<figure><img src="images/green-arrow-icon.png" alt="arrow"></figure>
						</a>
					</section>
					<section class="mid_box1">
						<figure><img src="images/middle-bg2.jpg" alt="two people smiling"></figure>
							<div class="mid_box_info">
								<h2>Physical <span>Therapy</span></h2>
								<p> You are reading dummy text as placeholders for this layout. </p>
							</div>
						<a href="javascript:;">
							<figure><img src="images/green-arrow-icon.png" alt="arrow"></figure>
						</a>
					</section>
					<section class="mid_box1">
						<figure><img src="images/middle-bg3.jpg" alt="two people smiling"></figure>
							<div class="mid_box_info">
								<h2>Home Health <span>Aide</span></h2>
								<p> You are reading dummy text as placeholders for this layout. </p>
							</div>
						<a href="javascript:;">
							<figure><img src="images/green-arrow-icon.png" alt="arrow"></figure>
						</a>
					</section>
					<section class="mid_box1">
						<figure><img src="images/middle-bg4.jpg" alt="two people smiling"></figure>
							<div class="mid_box_info">
								<h2>Medical Social <span>Worker</span></h2>
								<p> You are reading dummy text as placeholders for this layout. </p>
							</div>
						<a href="javascript:;">
							<figure><img src="images/green-arrow-icon.png" alt="arrow"></figure>
						</a>
					</section>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Middle -->

<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main>
				<h1 class="h1_title"><span>Welcome to </span>Tandem Health<small>Services Inc.</small></h1>
				<p>We are excited to post contents on the website. This space is reserved for more information about the company. These dummy text is intended to show you the volume of content that will be used on this particular page.</p>
				<p>Thank you for visiting our website. These contents are temporary and are for display purposes only.  We can post company information here. We are using these temporary contents on the website.</p>
			</main>

			<div class="main_icon_con">
				<figure><img src="images/main-icon.png" alt="couple setting in a soffa"></figure>
			</div>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->

<!-- Bottom -->
<div id="bottom1">
	<div class="wrapper">
		<div class="btm1_con">
			<div class="btm1_info_con">
				<div class="btm1_info">
					<div class="btm1_content">
					<h2><span>our commitment</span>Mission Statement</h2>
					<p>Our mission is to be the premier Home Health Care Agency in this area, best known for the provision of great quality care to our clients within the comfort of their homes. We are letting the quality of our services be a testament to our professional integrity.</p>
					<a href="#">about us</a>
					<a href="#">
						<span>SCHEDULE AN</span>
						Assessment
					</a>
					</div>
				</div>
			</div>
			<div class="btm1_boxes">
				<section class="btm1_box1">
					<figure><img src="images/btm1-bg1.jpg" alt="two people smiling"></figure>
					<h2>Insurance Accepted</h2>
					<p>You are reading dummy text as placeholders for this layout. Dummy text for the reader to review.</p>
					<a href="javascript:;">Click Here</a>
				</section>

				<section class="btm1_box2">
				<figure><img src="images/btm1-bg2.jpg" alt="two people smiling"></figure>
					<h2>Meet Our Staff</h2>
					<p>You are reading dummy text as placeholders for this layout. Dummy text for the reader to review.</p>
					<a href="javascript:;">Click Here</a>
				</section>

				<section class="btm1_box3">
				<figure><img src="images/btm1-bg3.jpg" alt="two people smiling"></figure>
					<h2>Send Your Referrals</h2>
					<p>You are reading dummy text as placeholders for this layout. Dummy text for the reader to review.</p>
					<a href="javascript:;">Click Here</a>
				</section>
			</div>
			<div class="btm1_services">
				<h2>Service Areas Covered</h2>
				<p>Houston, Spring, Fulshear, Pasedena, Cypress, Richmond, Galverston, Humble, Katy, Sealy, Fort Bend, Tomball, Waller, Conroe</p>
			</div>
		</div>
	</div>
</div>
<!-- End Bottom -->

<!--Footer -->
<footer>
<div class="footer_top">
	<div class="wrapper">
		<div class="footer_top_con">
			<div class="contact_info1">
				<h2 class="contact"><span>Reach out to us</span>Contact Details</h2>
				<div class="copyright">
					<h2>Tandem Health Services Inc.</h2>
				  &copy; Copyright
						<?php
						$start_year = '2021';
						$current_year = date('Y');
						$copyright = ($current_year == $start_year) ? $start_year : $start_year.' - '.$current_year;
						echo $copyright;
						?>
				  <p>Design by <a href="http://proweaver.com" target="_blank" rel="nofollow">Proweaver</a></p>
				</div>
			</div>
			<div class="contact_info2">
				<ul>
					<li><h2>Locate Us</h2>
						<address>7202 Desert Bluff Lane, Richmond, Texas 77407</address>
					</li>
					<li>
						<h2>Call or Email Us</h2> 
						<p>phone: <mark>602-358-7106</mark></p><q>|</q>
						<p>Email: <a href="mailto:info@tandemhs.com">info@tandemhs.com</a></p>
					</li>
				</ul>
			</div>

			<!-- <div class="footer_logo">
				<a href="<?php //echo get_home_url(); ?>"><figure><img src="images/footer-logo.png" alt="<?php //echo get_bloginfo('name');?>"></figure></a>
			</div> -->
		</div>
	</div>
</div>

<div class="footer_btm">
  <div class="wrapper">
			<div class="footer_btm_con">
				<div class="footer_nav">
					<ul>
						<li class="current_page_item"><a href="">Home<small>Welcome</small></a></li>
						<li><a href="">About Us<small>Who We Are</small></a></li>
						<li><a href="">Services<small>What We Do</small></a></li>
						<li><a href="">Careers<small>Employment</small></a></li>
						<li><a href="">Resources<small>Useful Links</small></a></li>
						<li><a href="">Contact Us<small>Get In Touch</small></a></li>
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
