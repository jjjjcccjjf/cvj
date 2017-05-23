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
      <p>Address<br>
        Contact No.<br>
        Email Address</p>
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
        <article>
          <ul>
            <li>
              <label>Name</label>
              <input type="text" name="">
            </li>
            <li>
              <label>Email</label>
              <input type="email" name="">
            </li>
            <li>
              <label>Contact Number</label>
              <input type="text" name="">
            </li>
          </ul>
          <ul>
            <li>
              <label>Subject</label>
              <select>
                <option>General Inquiry</option>
              </select>
            </li>
            <li>
              <label>Message</label>
              <textarea></textarea>
            </li>

          </ul>
          <p><input type="submit" name="" value="SUBMIT"></p>
        </article>
      </main>


    </div>
  </section>

  <?php
endwhile;
get_footer();
