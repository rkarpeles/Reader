<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	
  <title><?php wp_title(); ?> <?php bloginfo('template_url'); ?></title>
  
  <meta charset="utf-8">
  
  <!-- Prefix Free Goodness -->
  <script src="js/prefixfree.min.js"></script>
  
  <!-- Google Web Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic|Lora:400,700,400italic' rel='stylesheet' type='text/css'>

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">
  
  <!-- 1140px Grid styles for IE -->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
  
  <!-- Respond.js Script for media queries in IE -->
  <script src="js/respond.min.js"></script>
  
  <?php wp_head(); ?>
</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  
  <div id="wrapper">
	  
		<header>
			<div class="container">
				<div class="row">
					<div class="fourcol">
						<div id="headLogo"><a href="<?php echo get_option('home'); ?>">John R Reader DDS</a></div>
					</div>
					<div class="fourcol">
						<div id="headAddress">960 Illinois Rt 22 Suite 206 <br> Fox River Grove, IL 60021</div>
					</div>
					<div class="fourcol last">
						<div id="headPhone">(847) 639-8008</div>
					</div>				
				</div>
			</div>	
		
		</header>  
		
		<div id="content">
		  
		<nav role="navigation">
			<div class="container">
				
					<ul>
						<li><a href="<?php echo get_option('home'); ?>">Home</a></li>
						<?php wp_list_pages(); ?>
						<li><a href="">Patient Info</a>
							<ul>
								<li><a href="">First time visit</a></li>
								<li><a href="">Billing information</a></li>
								<li><a href="">Insurance information</a></li>	
								<li><a href="">Office environment</a></li>	
								<li><a href="">Home care</a></li>													
							</ul>
						</li>
						<li><a href="">Treatments</a>
							<div class="navColumn">
								<ul>
									<li><a href="">Exams</a></li>
									<li><a href="">Bleaching</a></li>
									<li><a href="">Cleanings</a></li>
									<li><a href="">Bridges</a></li>									
									<li><a href="">Fillings</a></li>
									<li><a href="">Implant restorations</a></li>
									<li><a href="">Dentures</a></li>									
									<li><a href="">Orthodontic treatment</a></li>
									<li><a href="">Crowns</a></li>
									<li><a href="">Root canal therapy</a></li>
									<li><a href="">Veneers</a></li>							
									<li><a href="">Oral surgery</a></li>							
								</ul>	
							</div>
						</li>
						<li><a href="">Meet Dr. Reader</a></li>
						<li><a href="">Happy Patients</a></li>
						<li><a href="">Dental Health</a></li>
						<li><a href="">Make an Appointment</a></li>
					</ul>
				
			</div>
		</nav>
		
		<!-- end header.php -->



