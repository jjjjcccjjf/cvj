<?php
get_header();
while(have_posts()): the_post();
?>

<section class="intro-content">
  <div class="pagewrapper">
    <aside>
      <img src="<?php the_post_thumbnail_url() ?>">
    </aside>
    <article>
      <div class="selectedtitle"><h1><?php the_title(); ?></h1></div>
      <h3>Starts at Php <?php the_field('price') ?>/<?php the_field('pax')?> pax</h3>
      <?php the_content(); ?>
      <p><a href="#">Inquire Now</a></p>
    </article>
  </div>
</section>

<section class="mcontent">
  <div class="pagewrapper">

    <?php
    $ctr = 0;
    if( have_rows('package_inclusions') ):
      while( have_rows('package_inclusions') ): the_row(); ?>
      <main class="<?php echo ((++$ctr%2) != 0) ? 'packagedetail' : 'packageservices'; # if counter is odd ?>">
        <article>
          <h3><?php the_sub_field('panel_header'); ?></h3>
          <?php
          if( have_rows('package_inclusions_outer') ): ?>
          <ul>
            <?php
            while( have_rows('package_inclusions_outer') ): the_row();     ?>
            <li><?php the_sub_field('package_inclusions_inner'); ?></li>
          </ul>
        <?php endwhile; ?>
      <?php endif;   ?>
    </article>
    <picture>
      <img src="<?php the_sub_field('side_image');?>">
    </picture>
  </main>
<?php endwhile; ?>
<?php endif;  ?>


<!-- <main class="packagedetail">
<article>
<h3>Package Inclusions</h3>
<ul>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
</ul>
<ul>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
</ul>


</article>
<picture>
<img src="images/aboutimg.jpg">
</picture>
</main>

<main class="packageservices">
<article>
<h3>Package Inclusions</h3>
<ul>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
</ul>
<ul>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
<li>A. Wedding Cake – 3 layered fondant bridal cake (your choice of Style/Design and Flavor) </li>
</ul>


</article>
<picture>
<img src="images/aboutimg.jpg">
</picture>
</main> -->
</div>
</section>

<p class="inquire"><a href="#">INQUIRE NOW</a></p>


<?php
endwhile;
get_footer();
