<?php
/* Template Name: Venues */
get_header();
while(have_posts()): the_post();
?>
<section class="intro-content">
  <div class="pagewrapper">
    <aside>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg">
    </aside>
    <article>
      <div class="venue"><h1>Venues</h1></div>
      <h3>Starts at Php XXXX.XX/XX pax</h3>
      <h2>Choose from a range of Accredited Venue Partners</h2>
      <p>Lorem ipsum dolor sit amet, per lacus urna lorem, sit enim ante aenean magna morbi, libero et nec feugiat tincidunt. Vivamus dolor, eget euismod rutrum magna elit urna turpis, auctor amet ut velit. Consectetuer quis nisl tristique, praesent tortor luctus in varius praesent. Omnis at mus non viverra.</p>
      <p><a href="<?php echo get_permalink(24) ?>">Inquire Now</a></p>
    </article>
  </div>
</section>

<section class="mcontent">
  <div class="pagewrapper">
    <h3>Our Venues</h3>
    <ul class="venue-partners">
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cvj-logo.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg"></a></li>
    </ul>
  </div>
</section>
<?php
endwhile;
get_footer();
