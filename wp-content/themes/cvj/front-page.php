<?php
/* Template Name: Home */
get_header();
while(have_posts()): the_post();
?>

<section class="aboutus">
	<div class="pagewrapper">
		<div class="title"><h3><span><span>About Us</span></span></h3></div>
		<div class="container">
			<aside><img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg"></aside>
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
					<picture><img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg"><span></span></picture>
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
					<picture><img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg"><span></span></picture>
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
					<picture><img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg"><span></span></picture>
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
					<picture><img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg"><span></span></picture>
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
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></li>
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

<?php
endwhile;
get_footer();
