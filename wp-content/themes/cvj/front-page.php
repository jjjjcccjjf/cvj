<?php
/* Template Name: Home */
get_header();
while(have_posts()): the_post();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CVJ Food Catering</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0">
	<link rel="stylesheet" href="css/styles-min.css">
	<link rel="stylesheet" href="css/responsive-min.css">
	<link rel="stylesheet" href="css/jPushMenu-min.css">
	<link rel="stylesheet" href="css/flickity-min.css">
	<link rel="stylesheet" href="css/magnific-popup-min.css">
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
				<a href="#"><img src="images/cvj-logo.png"></a>
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

	<section class="aboutus">
		<div class="pagewrapper">
			<div class="title"><h3><span><span>About Us</span></span></h3></div>
			<div class="container">
				<aside><img src="images/aboutimg.jpg"></aside>
				<article>
					<p>"Seasoned to Perfection… Served in Style"  has been our company's guiding principle in achieving the best food catering service for each and every one of our clients.  May it be a Wedding,  a Debut Party,  Corporate Event,  Adult or Kiddy Party,  each and every catering event is treated with greatest care, professionalism, and attention to details...  </p>
					<p><a href="#">Learn More</a></p>
				</article>
			</div>
		</div>
	</section>

	<section class="event-packages">
		<div class="pagewrapper">
			<div class="title"><h3><span><span>Event Packages</span></span></h3></div>
			<ul>
				<li>
					<a href="#">
						<picture><img src="images/aboutimg.jpg"><span></span></picture>
						<article>
							<h4>Weddings Packages</h4>
							<h5>Starts at Php XXXX.XX/XX pax</h5>
							<p class="desc">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
							<p>View Details</p>
						</article>
					</a>
				</li>
				<li>
					<a href="#">
						<picture><img src="images/aboutimg.jpg"><span></span></picture>
						<article>
							<h4>Weddings Packages</h4>
							<h5>Starts at Php XXXX.XX/XX pax</h5>
							<p class="desc">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
							<p>View Details</p>
						</article>
					</a>
				</li>
				<li>
					<a href="#">
						<picture><img src="images/aboutimg.jpg"><span></span></picture>
						<article>
							<h4>Weddings Packages</h4>
							<h5>Starts at Php XXXX.XX/XX pax</h5>
							<p class="desc">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
							<p>View Details</p>
						</article>
					</a>
				</li>
				<li>
					<a href="#">
						<picture><img src="images/aboutimg.jpg"><span></span></picture>
						<article>
							<h4>Weddings Packages</h4>
							<h5>Starts at Php XXXX.XX/XX pax</h5>
							<p class="desc">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
							<p>View Details</p>
						</article>
					</a>
				</li>
			</ul>
		</div>
		<div class="overlay"></div>
	</section>

	<section class="clients">
		<div class="pagewrapper">
			<div class="title"><h3><span><span>Clients</span></span></h3></div>
			<ul>
				<li><img src="images/client.jpg"></li>
				<li><img src="images/client.jpg"></li>
				<li><img src="images/client.jpg"></li>
				<li><img src="images/client.jpg"></li>
				<li><img src="images/client.jpg"></li>
			</ul>
			<p><a href="#">View More</a></p>
		</div>
	</section>

	<section class="calltoaction">
		<div class="pagewrapper">
			<h2>Try our Customized Packages
				<span><a href="#">Inquire Now</a></span>
			</h2>
		</div>
	</section>

	<footer>
		<p>Copyright &copy; 2016. CVJ Food Catering. All rights reserved</p>
	</footer>

	<!-- Scripts -->
	<script src="https://use.fontawesome.com/108c9331e1.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/flickity.pkgd.min.js"></script>

	<script src="js/jquery.magnific-popup.min.js"></script>

	<script>
	jQuery(document).ready(function($) {

		$('#open-popup').magnificPopup({
			type:'inline',
			closeBtnInside: true
		});
	});
	</script>



	<script src="js/jPushMenu.js"></script>
	<script>
	jQuery(document).ready(function($) {
		$('.toggle-menu').jPushMenu();
	});
	</script>

</body>

</html>


<?php
endwhile;
get_footer();
