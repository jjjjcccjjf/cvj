<?php
/* Template Name: Packages */
get_header();
while(have_posts()): the_post();
?>

<section class="intro-content">
  <div class="pagewrapper">
    <aside>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg">
    </aside>
    <article>
      <div class="venue"><h1>Packages</h1></div>
      <h2>Lorem ipsum dolor sit amet</h2>
      <p>Lorem ipsum dolor sit amet, per lacus urna lorem, sit enim ante aenean magna morbi, libero et nec feugiat tincidunt. Vivamus dolor, eget euismod rutrum magna elit urna turpis, auctor amet ut velit. Consectetuer quis nisl tristique, praesent tortor luctus in varius praesent. Omnis at mus non viverra.</p>
      <p><a href="#">Inquire Now</a></p>
    </article>
  </div>
</section>

<section class="mcontent">
  <div class="pagewrapper">
    <article class="menu-list">
      <div id="package">
        <ul class="resp-tabs-list hor_1 wid33">
          <li>Grand Event Package</li>
          <li>Promo Event Package</li>
          <li>Standard Event Package</li>
        </ul>

        <div class="resp-tabs-container hor_1">
          <div>
            <ul class="packagelist">
              <li>
                <div class="foodthb">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg"></div>
                  <h4>Wedding</h4>
                  <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <p><a href="#">View Details</a></p>
                </li>
                <li>
                  <div class="foodthb">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg"></div>
                    <h4>Wedding</h4>
                    <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p><a href="#">View Details</a></p>
                  </li>
                  <li>
                    <div class="foodthb">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg"></div>
                      <h4>Wedding</h4>
                      <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                      <p><a href="#">View Details</a></p>
                    </li>
                  </ul>
                </div>

                <div>
                  <ul class="packagelist">
                    <li>
                      <div class="foodthb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg"></div>
                        <h4>Wedding</h4>
                        <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p><a href="#">View Details</a></p>
                      </li>
                      <li>
                        <div class="foodthb">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg"></div>
                          <h4>Wedding</h4>
                          <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                          <p><a href="#">View Details</a></p>
                        </li>
                        <li>
                          <div class="foodthb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg"></div>
                            <h4>Wedding</h4>
                            <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <p><a href="#">View Details</a></p>
                          </li>
                        </ul>
                      </div>

                      <div>
                        <ul class="packagelist">
                          <li>
                            <div class="foodthb">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg"></div>
                              <h4>Wedding</h4>
                              <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              <p><a href="#">View Details</a></p>
                            </li>
                            <li>
                              <div class="foodthb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg"></div>
                                <h4>Wedding</h4>
                                <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <p><a href="#">View Details</a></p>
                              </li>
                              <li>
                                <div class="foodthb">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg"></div>
                                  <h4>Wedding</h4>
                                  <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                  <p><a href="#">View Details</a></p>
                                </li>
                              </ul>
                            </div>

                          </div>
                        </div>
                      </article>

                    </div>
                  </section>

                  <?php
                endwhile;
                get_footer();
