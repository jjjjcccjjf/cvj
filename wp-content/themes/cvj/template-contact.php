<?php
/* Template Name: Contact us */
get_header();
while(have_posts()): the_post();
?>

<section class="intro-content">
  <div class="pagewrapper">
    <aside>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg">
    </aside>
    <article>
      <div class="selectedtitle"><h1>Contact Us</h1></div>
      <h2 class="gold">CVJ Food Catering</h2>
      <p>
        <?php the_field('address'); ?>
        <br>
        Telephone:
        <?php if( have_rows('telephone') ): while ( have_rows('telephone') ) : the_row(); ?>
          <?php echo get_sub_field('telephone'); ?> <br>
        <?php endwhile; else : endif; ?>
          Fax:
          <?php if( have_rows('fax') ): while ( have_rows('fax') ) : the_row(); ?>
            <?php echo get_sub_field('fax'); ?> <br>
          <?php endwhile; else : endif; ?>
            Mobile:
            <?php if( have_rows('mobile') ): while ( have_rows('mobile') ) : the_row(); ?>
              <?php echo get_sub_field('mobile'); ?> <br>
            <?php endwhile; else : endif; ?>
              <?php the_field('email'); ?>
            </p>
            <p><a href="#">View Google Map</a></p>
          </article>
        </div>
      </section>

      <section class="mcontent">
        <div class="pagewrapper">
          <main class="reservation">
            <aside>
              <h3>Send us an inquiry</h3>
              <p>Fill out the form below.</p>
            </aside>
            <?php echo do_shortcode('[contact-form-7 id="8" title="Contact"]'); ?>
          </main>


        </div>
      </section>

      <?php
    endwhile;
    get_footer();
