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
      <h2 class="gold"> "Seasoned to Perfection… Served in Style" </h2>
      <p>has been our company’s guiding principle in achieving the best food catering service for each and every one of our clients. </p>

    </article>
  </div>
</section>
<section class="mcontent">
  <div class="pagewrapper">
    <main class="reservation">
      <article>
        <p>May it be a Wedding,  a Debut Party,  Corporate Event,  Adult or Kiddy Party,  each and every catering event is treated with greatest care, professionalism, and attention to details.   Our 20 years of existence and service has been made possible due to our ability to remain passionately committed to provide quality and freshly prepared Food, personalized and dependable Service and Assistance, and impeccable and elegant Set-up.  Integrity, transparency, professionalism,  and “going the extra mile” has been the values that we - the CVJ Food Corporation - has been training our employees with to ensure that we will sincerely be able to provide not only the best quality food, service, and set-up for all our clients but also to impart to our valued patrons the sense of delight and security knowing that  their needs and expectations will be given the utmost care and importance. </p>

        <p>It shall be an honor for us to offer you our genuine service and our skills and expertise on your very special event day.</p>
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
