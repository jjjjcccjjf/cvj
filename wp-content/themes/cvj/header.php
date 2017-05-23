<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.0
*/

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CVJ Food Catering</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles-min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive-min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jPushMenu-min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/flickity-min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup-min.css">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<![endif]-->
	<!-- css3-mediaqueries.js for IE less than 9 -->
	<!--[if lt IE 9]>
	<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
</head>


<body>
	<div class="homebg">
		<header>
			<aside>
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cvj-logo.png"></a>
				<h1>Seasoned to Perfection, Served in Style</h1>
				<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h2>
			</aside>
		</header>
		<nav class="main">
			<a class="toggle-menu menu-left push-body fleft">MENU</a>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Packages</a></li>
				<li><a href="#">Menu</a></li>
				<li><a href="#">Venues</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Food Tasting</a></li>
			</ul>
		</nav>

		<!-- Mobile Menu -->
		<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">

			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Packages</a></li>
				<li><a href="#">Menu</a></li>
				<li><a href="#">Venues</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Food Tasting</a></li>
			</ul>
		</div>
		<div class="overlay"></div>
	</div>
