<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.2
*/

?>
<footer>
	<p>Copyright &copy; 2016. CVJ Food Catering. All rights reserved</p>
</footer>

<!-- Scripts -->
<script src="https://use.fontawesome.com/108c9331e1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/flickity.pkgd.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>

<script>
jQuery(document).ready(function($) {

	$('#open-popup').magnificPopup({
		type:'inline',
		closeBtnInside: true
	});
	$('.image-link').magnificPopup({type:'image'});
});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jPushMenu.js"></script>
<script>
jQuery(document).ready(function($) {
	$('.toggle-menu').jPushMenu();
});
</script>

<!-- smooth scroll  -->
<script type="text/javascript">
// Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
  // On-page links
  if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
    &&
    location.hostname == this.hostname
  ) {
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000, function() {
        // Callback after animation
        // Must change focus!
        var $target = $(target);
        $target.focus();
        if ($target.is(":focus")) { // Checking if the target was focused
          return false;
        } else {
          $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
          $target.focus(); // Set focus again
        };
      });
    }
  }
});
</script>
<!-- /smooth scroll  -->
</body>

</html>
