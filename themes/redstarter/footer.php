<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-content">
		<div class="contact-info">
			<h3>contact info</h3>
			<p><i class="fas fa-envelope"></i>
				<a href="mailto:info@inhabitent.com" target="_top">info@inhabitent.com</a></p>
			<p><i class="fas fa-phone"></i>
			<a href="tel:8888888888">778-898-8998</a></p>
			<p><i class="fab fa-facebook-square"></i>
			<i class="fab fa-twitter-square"></i>
			<i class="fab fa-instagram"></i></p>
		</div>
		<div class="business-hours">
			<h3>business hours</h3>
			<p> <span class="week-day">Monday-Friday: </span> 9am to 5pm</p>
			<p><span class="week-day">Saturday: </span>10am to 2pm</p>
			<p><span class="week-day">Sunday: </span>Closed</p>
		</div>
		<div class="footer-logo">
			<div class="footer-logo-image">
			<a href="<?php echo home_url(); ?>"><img src='<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text.svg' alt="Company Logo"></a>
			</div>
		</div>
	</div>
	<div class="site-info">
		<p>copyright &copy; 2019 inhabitent</p>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>