<?php
/* Template Name: About us */
get_header();
while(have_posts()): the_post();
?>

<section class="intro-content">
  <div class="pagewrapper">
    <aside>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg">
    </aside>
    <article>
      <div class="selectedtitle"><h1>About Us</h1></div>
      <?php the_field('panel_one'); ?>

    </article>
  </div>
</section>
<section class="mcontent">
  <div class="pagewrapper">
    <main class="reservation">
      <article>
        <?php the_content(); ?>
      </article>
    </main>
  </div>
</section>
<?php
endwhile;
get_footer();?>

<script>
jQuery(document).ready(function($) {

  $('#open-popup').magnificPopup({
    type:'inline',
    closeBtnInside: true
  });
  $(document).ready(function() {
    $('.image-link').magnificPopup({type:'image'});
  });
});
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/easyResponsiveTabs.js"></script>
<script type="text/javascript">
$(document).ready(function () {

  $('#package').easyResponsiveTabs({
    type: 'default', //Types: default, vertical, accordion
    width: 'auto', //auto or any width like 600px
    fit: true, // 100% fit in a container
    closed: 'accordion', // Start closed if in accordion view
    tabidentify: 'hor_1'
  });

});
</script>
