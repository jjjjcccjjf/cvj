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
    $ctr = 0; # Counter for outer repeater
    /** Parent Repeater **/
    if( have_rows('parent_inclusions') ):
      while( have_rows('parent_inclusions') ): the_row(); ?>
      <main class="<?php echo ((++$ctr%2) != 0) ? 'packageservices' : 'packagedetail'; # if counter is odd ?>">
        <article>
          <h3><?php
          /** Parent Repeater Fields **/
          the_sub_field('panel_header');
          ?></h3>
          <ul>
            <?php
            $li_ctr = 0;
            if( have_rows('child_inclusions') ): ?>
            <?php
            /** Child repeater loop **/
            while( have_rows('child_inclusions') ): the_row(); ?>
            <li><?php the_sub_field('child_inclusion'); #Child repeater values ?></li>
            <?php if(++$li_ctr%6 == 0): # if divisible by six?>
            </ul>
            <ul>
            <?php endif; # / if divisible by six?>
          <?php endwhile; ?>
        </ul>
      <?php endif;   ?>
    </article>
    <picture>
      <img src="<?php the_sub_field('side_image');?>">
    </picture>
  </main>
<?php endwhile; ?>
<?php endif;  ?>

<!-- AFTER INCLUSIONS  -->

<aside class="gallery">
  <h3>Gallery</h3>
    <div class="carousel"
    data-flickity='{ "wrapAround": true, "pageDots": false }'>
    <?php if( have_rows('gallery') ): while ( have_rows('gallery') ) : the_row(); ?>
  <div class="carousel-cell">
    <a href="<?php echo get_sub_field('image'); ?>" class="image-link">
      <img src="<?php echo get_sub_field('image'); ?>">
    </a>
  </div>
<?php endwhile; else : endif; ?>

  </div>
</aside>
<section class="others">
  <p><?php the_field("footnote") ?></p>
</section>


</div>
</section>

<p class="inquire"><a href="#">INQUIRE NOW</a></p>


<?php
endwhile;
get_footer();
