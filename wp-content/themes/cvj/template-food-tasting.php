<?php
/* Template Name: Free food tasting */
get_header();
while(have_posts()): the_post();
?>

<section class="intro-content">
  <div class="pagewrapper">
    <aside>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.jpg">
    </aside>
    <article>
      <div class="selectedtitle"><h1>Food Tasting</h1></div>
      <h2 class="gold">The Blue Leaf Pavilion</h2>
      <p>221 Tandang Sora Ave., Project 8, Quezon City, Metro Manila</p>
      <h4>April 5, 2016, Sunday | 10am - 4pm</h4>
      <p><a href="#">Reserve Now</a></p>
    </article>
  </div>
</section>

<section class="mcontent">
  <div class="pagewrapper">
    <main class="reservation">
      <aside>
        <h3>Reserve your seat for our Grand Food Tasting</h3>
        <p>Fill out the form below to reserve a seat to the Grand Food Tasting.</p>
      </aside>
      <article>
        <ul>
          <li>
            <label>How many seats would you like us to reserve for you?</label>
            <input type="number" name="" value="1">
          </li>
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
            <label>What type of event are you holding?</label>
            <select>
              <option>Choose an Event</option>
            </select>
          </li>
          <li>
            <label>How many guests are you expecting in your event?</label>
            <input type="number" name="" value="1">
          </li>
          <li>
            <label>Where is your event venue?</label>
            <input type="text" name="">
          </li>
          <li>
            <label>When is your event?</label>
            <input type="date" name="">
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
