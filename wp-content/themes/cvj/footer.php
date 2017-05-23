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
});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jPushMenu.js"></script>
<script>
jQuery(document).ready(function($) {
	$('.toggle-menu').jPushMenu();
});
</script>

</body>

</html>
