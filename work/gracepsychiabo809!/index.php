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
			
			<div class="head_info">
				<div class="header_btn_con">
					<a href="" class="header_btn1">Set an appointment</a>
					<a href="" class="header_btn2">Patient Portal</a>
				</div>	
				<div class="social_media">
					<ul>
						<li><a href="https://www.twitter.com" target="_blank"><figure><img src="images/twitter-icon.png" alt="twitter"/></figure></a></li>
						<li><a href="https://www.facebook.com" target="_blank"><figure><img src="images/fb-icon.png" alt="facebook"/></figure></a></li>
					</ul>
				</div>			
			</div>
		</div>
	  <div class="clearfix"></div>
	</div>
</header>
<!-- End Header -->

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
					<li><a href="">Services</a></li>
					<li><a href="">Health Division</a></li>
					<li><a href="">Careers</a></li>
					<li><a href="">Payment</a></li>
					<li><a href="">Patient Forms</a></li>
					<li><a href="">Contact Us</a></li>
				</ul>
			</div>
	  </nav>
		<div class="toggle_nav_close"></div>
	</div>
</div>
<!-- End Navigation -->

<!-- Banner -->
<div id="banner">
	<div class="wrapper">
		<div class="bnr_con">

			<div class="slider">
				<ul class="rslides">
					<li><figure><img src="images/slider/1.jpg" alt=""/></figure></li>
					<li><figure><img src="images/slider/2.jpg" alt=""/></figure></li>
					<li><figure><img src="images/slider/3.jpg" alt=""/></figure></li>
				</ul>

				<div class="box_skitter box_skitter_large">
					<ul>
						<li><figure><img src="images/slider/1.jpg" alt="" class="random"/></figure></li>
						<li><figure><img src="images/slider/2.jpg" alt="" class="random"/></figure></li>
						<li><figure><img src="images/slider/3.jpg" alt="" class="random"/></figure></li>
					</ul>
				</div>
			</div>

			<!-- <div class="mobi_ban">
				<figure><img src="images/slider/1.jpg" alt=""></figure>
			</div> -->

			<div class="bnr_info">
				<h2><span>This Reserves a Place for</span> Your Slogan</h2>
				<p>You are reading dummy text as placeholders for this layout. Dummy text for the reader to review.</p>
				<a href="javascript:;">Find Out More</a>
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
				<section class="mid_box1">
					<h2>Send Your <span>Referrals</span></h2>
					<a href="javascript:;">[ Click Here ]</a>
				</section>
				<section class="mid_box2">
					<h2>Meet Our <span>Professionals</span></h2>
					<a href="javascript:;">[ Click Here ]</a>
				</section>
				<section class="mid_box3">
					<h2>Insurance <span>Accepted</span></h2>
					<a href="javascript:;">[ Click Here ]</a>
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
			<figure>
				<img src="images/main-bg.jpg" alt="woman taking notes while steering to a young women">
			</figure>
			<main>
				<h1 class="h1_title"><span>Introducing </span>Graceland <small>Psychiatry</small></h1>
				<p>You are reading dummy text as placeholders for this layout. Dummy text for the reader to review. Words shown on this layout are placeholders. More information about the company will be posted soon.Contents are for display purposes only.  This space is reserved for more details.</p>
			</main>
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
				<h2><span>What We Do</span><small class="btm1_header1">Services</small> <small class="btm1_header2">We Offer</small></h2>
			</div>
			<div class="btm1_boxes">
				<section class="btm1_box1">
					<h2><span>Telehealth</span> Services</h2>
					<p>You are reading dummy text as placeholders for this layout.</p>
					<a href="javascript:;">[ Click Here ]</a>
				</section>

				<section class="btm1_box2">
					<h2><span>Medication</span>Services</h2>
					<p>You are reading dummy text as placeholders for this layout.</p>
					<a href="javascript:;">[ Click Here ]</a>
				</section>

				<section class="btm1_box3">
					<h2><span>Psychological Evaluations</span> & Testing</h2>
					<p>You are reading dummy text as placeholders for this layout.</p>
					<a href="javascript:;">[ Click Here ]</a>
				</section>

				<section class="btm1_box4">
					<h2><span>View More</span> Services</h2>
					<p>You are reading dummy text as placeholders for this layout.</p>
					<a href="javascript:;">[ Click Here ]</a>
				</section>
			</div>
		</div>
	</div>
</div>

<div id="bottom2">
	<div class="wrapper">
		<div class="btm2_con">
			<div class="btm2_left_con">
				<h2><span>Our Commitment</span> Our Mission <small>Statement</small></h2>
				<p>These dummy texts are for display purposes only to show the volume of content that will be placed on this particular page. Thank you for visiting our website.</p>
				<a href="">About Us</a>
			</div>
			<figure><img src="images/btm2_bg.jpg" alt="couple smiling while reading"></figure>
		</div>
	</div>
</div>

<div id="bottom3">
	<div class="wrapper">
		<div class="btm3_con">
			<div class="btm3_info">
				<h2>
					<span>Reach Out With Us</span>
					<small class="btm3_header1">Send Us a</small> <small class="btm3_header2">Message</small>
				</h2>
			</div>
			<div class="btm3_form">
				<form action="">
					<input type="text" name="Full_Name" placeholder="Full Name*" required>
					<input type="email" name="Email_Address" placeholder="Email Address*" required>
					<textarea name="Question_or_Comment" placeholder="Message(s)"></textarea>
					<input type="submit" value="submit">
				</form>
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
			<div class="contact_info">
				<h2><span>Get in Touch</span> Contact Details</h2>
				<ul>
					<li><p>Phone:</p> <mark>240-722-9763</mark></li>
					<li><p>Email:</p> <a href="mailto:info@gracelandpsych.com">info@gracelandpsych.com</a></li>
					<li><p>Location:</p> <address>10451 Mill Run Circle, Suite 400<q>,</q></address> <address>Owings Mills, MD 21117</address>
				</ul>
			</div>

			<div class="footer_nav">
				<div class="footer_info">
					<h2><span>Site</span> Navigation</h2>
				</div>
				<ul>
					<li class="current_page_item"><a href="">Home</a></li>
					<li><a href="">About Us</a></li>
					<li><a href="">Services</a></li>
					<li><a href="">Health Division</a></li>
					<li><a href="">Careers</a></li>
					<li><a href="">Payment</a></li>
					<li><a href="">Patient Forms</a></li>
					<li><a href="">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="footer_btm">
  <div class="wrapper">
			<div class="footer_btm_con">
				<div class="copyright">
				  &copy; Copyright
						<?php
						$start_year = '2021';
						$current_year = date('Y');
						$copyright = ($current_year == $start_year) ? $start_year : $start_year.' - '.$current_year;
						echo $copyright;
						?>
				  <span class="footer_comp"><?php //echo get_bloginfo('name');?>Graceland Psychiatry</span>
				  <p>Designed by</p> <a href="https://proweaver.com" target="_blank" rel="nofollow">Proweaver</a>
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
