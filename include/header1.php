<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->


<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>GARASI</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/logo0.png" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/images/apple-icon-114x114.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/images/apple-icon-72x72.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/images/apple-icon-57x57.png">
	
	<!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/libraries/lib.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/libraries/Stroke-Gap-Icon/stroke-gap-icon.css">
	
	<!-- Custom - Common CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/plugins.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navigation-menu.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/libraries/lightslider-master/lightslider.css">
	
	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets1/plugin/waves/waves.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/shortcode.css">
	<!--[if lt IE 9]>		
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.3.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.3.0/mapbox-gl.css' rel='stylesheet' />
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.css' rel='stylesheet' />
  <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.1/mapbox-gl-geocoder.min.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.1/mapbox-gl-geocoder.css' type='text/css' />
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<!-- Loader -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
			</div>
		</div>
	</div><!-- Loader /- -->
	
	<!-- Header -->
	<header class="header-main container-fluid no-padding">
		<!-- Top Header -->
		
		
		<!-- Menu Block -->
		<div class="menu-block container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<!-- User -->
				<a href="<?php echo base_url(); ?>welcome" style="background-color: white" class="user" title="Logo">
							<img src="<?php echo base_url(); ?>assets/images/logo0.png" alt="logo" />
							
						</a><!-- User /- -->
								<div class="dropdown">
									<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle menu-search" title="Account" href="#">
										<button class="sb-search-submit"><i class="fa fa-user"></i></button></a>
										<ul class="dropdown-menu">
											<li><a href="">Register</a></li>
										</ul>
									
								</div>
				<!-- Expanding Search -->
				<div class="menu-search">
					<div id="sb-search" class="sb-search">
						<form>
							<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="keyword" id="search" autocomplete="off" />
							<button class="sb-search-submit" name="cari"><i class="fa fa-search"></i></button>
							<span class="sb-icon-search"></span>
						</form>
					</div>
				</div><!-- Expanding Search /- -->
				<div class="col-md-9 col-sm-12">
					<!-- Navigation -->
					<nav class="navbar ow-navigation">
						
						<div class="navbar-collapse collapse" id="navbar">
							<ul class="nav navbar-nav menubar">
								<!-- User -->
								
								<li class="active"><a title="Home" href="<?php echo base_url(); ?>welcome">Beranda</a></li>
								<!-- <li><a title="Services" href="<?php echo base_url(); ?>welcome/services">Services</a></li> -->
								<li><a title="Event" href="<?php echo base_url(); ?>welcome/eventgrid">Pesanan</a></li>
								<li><a title="About Us" href="<?php echo base_url(); ?>welcome/about">Tentang</a></li>
								<li><a title="Contact" href="<?php echo base_url(); ?>welcome/contactus">Hubungi Kami</a></li>
								<li><a title="About Us" href="<?php echo base_url(); ?>welcome/upload">Upload</a></li>
							
							</ul>
						</div>
					</nav><!-- Navigation /- -->
				</div>

			</div><!-- Container /- -->
		</div><!-- Menu Block /- -->
	</header><!-- Header /- -->	
	
