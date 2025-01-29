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
					<li><a href="">Careers<small>Apply Now</small></a></li>
					<li><a href="">Resources<small>Useful Links</small></a></li>
					<li><a href="">Contact Us<small>Get in Touch</small></a></li>
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
					<h2><small>Reach Out to Us:</small>
						<span>Phone: <mark>123-456-7890</mark></span>
						<small>Email: <a href="mailto:yettyayo@hotmail.com">yettyayo@hotmail.com</a></small>
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
					<li><figure><img src="images/slider/1.jpg" alt="elderly smiling with nurse on his side reading something"/></figure></li>
					<li><figure><img src="images/slider/2.jpg" alt="loving wife taking care of her husband"/></figure></li>
					<li><figure><img src="images/slider/3.jpg" alt="father and son setting on a sofa while laughing"/></figure></li>
					<li><figure><img src="images/slider/3.jpg" alt="elderly holding a cup with nurse on her side"/></figure></li>
				</ul>

				<div class="box_skitter box_skitter_large xr_parallax70">
						<ul>
							<li><figure><img src="images/slider/1.jpg" class="random" alt="elderly smiling with nurse on his side reading something"/></figure></li>
							<li><figure><img src="images/slider/2.jpg" class="random" alt="loving wife taking care of her husband"/></figure></li>
							<li><figure><img src="images/slider/3.jpg" class="random" alt="father and son setting on a sofa while laughing"/></figure></li>
							<li><figure><img src="images/slider/4.jpg" class="random" alt="elderly holding a cup with nurse on her side"/></figure></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="mobi_ban">
				<figure><img src="images/slider/1.jpg" alt=""></figure>
			</div>

			<div class="bnr_info">
				<div class="bnr_info_content">
					<h2><span>This is a Dummy Text</span>For Your Own Catchy Slogan</h2>
					<p>We are excited to post contents on the website. This space is reserved.</p>
					<a class='bnr_btn' href="javascript:;">Find Out More</a>
				</div>
				<div class="appointment">
					<h3>Set an Appointment</h3>
					<p>We are excited to post contents on the website. This space is reserved.</p>
					<a href="#">[ Click Here ›› ]</a>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- End Banner -->

<!-- Middle -->
<div id="middle">
	<div class="wrapper">
		<div class="middle_con">
			<div class="middle_info">
				<h2><span>What We Do</span>Services We Offer</h2>
				<p>Thank you for visiting our website. These contents are temporary and are for display purposes only.</p>
			</div>
			<div class="middle_boxes">
				<section class="mid_box1">
					<a href="javascript:;">
						<h2>Companion <span>Care</span></h2>
						<p>We are excited to post contents on the website. This space is reserved.</p>
					</a>
				</section>
				<section class="mid_box2">
					<a href="javascript:;">
						<h2>Personal <span>Care</span></h2>
						<p>We are excited to post contents on the website. This space is reserved.</p>
					</a>
				</section>
				<section class="mid_box3">
					<a href="javascript:;">
						<h2>Nursing <span>Care</span></h2>
						<p>We are excited to post contents on the website. This space is reserved.</p>
					</a>
				</section>
				<section class="mid_box4">
					<a href="javascript:;">
						<h2>View More <span>Services</span></h2>
						<p>We are excited to post contents on the website. This space is reserved.</p>
					</a>
				</section>
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
				<h1 class="h1_title"><span>Welcome to </span>All Caring Touch <small>Home Care, Inc.</small></h1>
				<p>We are excited to post contents on the website. This space is reserved for more information about the company. These dummy text is intended to show you the volume of content that will be used on this particular page. Thank you for visiting our website. These contents are temporary and are for display purposes only.</p>
				<div class="main_subContent">
					<p>We can post company information here. Such space is reserved for the reader to learn more about the business, its products and services.</p>
				</div>
			</main>
			<figure><img src="images/main-bg.png" alt=""></figure>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->

<!-- Bottom -->
<div id="bottom1">
	<div class="wrapper">
		<div class="btm1_con">
			<div class="btm1_info">
				<h2><span>Our Commitment</span>Mission Statement</h2>
				<p>We are excited to post contents on the website. This space is reserved for more information about the company. These dummy text is intended to show you the volume of content that will be used on this particular page. Thank you for visiting our website. These contents are temporary and are for display purposes only.</p>
				<a href="#">About Us</a>
			</div>
			<div class="btm1_boxes">
				<section class="btm1_box1">
					<figure><img src="images/btm1_bg1.jpg" alt="home nurse chatting with eldery"></figure>
					<h2>Insurance <span>Accepted</span></h2>
					<p>We are excited to post contents on the website. This space is reserved for more information.</p>
					<a href="javascript:;">Click Here</a>
				</section>

				<section class="btm1_box2">
					<figure><img src="images/btm1_bg2.jpg" alt="home nurse serving juice to eldery"></figure>
					<h2>Send Your <span>Referrals</span></h2>
					<p>We are excited to post contents on the website. This space is reserved for more information.</p>
					<a href="javascript:;">Click Here</a>
				</section>

				<section class="btm1_box3">
					<figure><img src="images/btm1_bg3.jpg" alt="home nurse attends to an old women's needs"></figure>
					<h2>Meet Our <span>Caregivers</span></h2>
					<p>We are excited to post contents on the website. This space is reserved for more information.</p>
					<a href="javascript:;">Click Here</a>
				</section>

			</div>
		</div>
	</div>
</div>

<div id="bottom2">
	<div class="wrapper">
		<div class="btm2_con">
			<div class="btm2_left_con">
				<h2><span>You're Important to Us</span>Send Us a Message</h2>
				<p>We are excited to post contents on the website. This space is reserved.</p>
			</div>

			<form action="">
				<input type="text" placeholder="*Full Name" required>
				<input type="text" placeholder="*Email Address" required>
				<input type="text" placeholder="Message(s)" required>
				<a href="#">Submit</a>
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
			<div class="footer_top_row1">
			<div class="contact_info">
				<h2><span>Reach Us Now</span>Contact Information</h2>
				<p>This space is reserved for more information about the company. These dummy text is intended</p>
			</div>
			<div class="footer_nav">
				<h2>Site Navigation</h2>
				<ul>
					<li class="current_page_item"><a href="index.php">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Careers</a></li>
					<li><a href="#">Resources</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
			</div>
			<div class="footer_top_row2">
			<div class="contact_details">
				<h2>Get More Details</h2>
				<ul>
					<li>Phone: <mark>123-456-7890</mark></li>
					<li>Email: <a href="mailto:yettyayo@hotmail.com">yettyayo@hotmail.com</a></li>
				</ul>
			</div>
			<div class="address">
				<h2>Visit Us at</h2>
					<address>123 Street Name, Suite A City Name, Georgia 12345</address>
			</div>
			</div>
		</div>
		<div class="footer_btm_con">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3439665.86758904!2d-85.42253821864992!3d32.658148196743674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f136c51d5f8157%3A0x6684bc10ec4f10e7!2sGeorgia%2C%20USA!5e0!3m2!1sen!2sph!4v1618083726082!5m2!1sen!2sph" width="44xpx" height="218px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					<h2 class="footer_comp"><?php //echo get_bloginfo('name');?>All Caring Touch Home Care, Inc.</h2>
					<div class="copyright">
						&copy; Copyright
								<?php
								$start_year = '2021';
								$current_year = date('Y');
								$copyright = ($current_year == $start_year) ? $start_year : $start_year.' - '.$current_year;
								echo $copyright;
								?>
						<p>Designed by</p> <a href="http://proweaver.com" target="_blank" rel="nofollow">Proweaver</a>
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
  <script src="js/jquery.easing.1.3.min.js"></script>
  <script src="js/jquery.skitter.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  <script src="js/plugins.min.js"></script>
  <!--?php wp_footer(); ?-->
</body>
</html>
<!-- End Footer -->
