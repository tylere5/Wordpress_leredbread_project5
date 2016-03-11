<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-info-container">
					<div class="footer-contact">
						<h3>Contact</h3>
						<p><i class="fa fa-envelope"><a href="mailto: info@ledredbread.com"></i>info@leredbread.com</a></p>
						<p><i class="fa fa-phone"></i><a href="tel:5553434567891">(555) 343 456 7891</a></p>
						<p>
							<span><i class="fa fa-facebook-square"></i></span>
							<span><i class="fa fa-twitter-square"></i></span>
							<span><i class="fa fa-google-plus-square"></i></span>
						</p>
					</div>

					<div class="footer-logo">
						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/lrb-logo-white.svg"/>
					</div>
					<div class="footer-business-hours">
						<h3>Business Hours</h3>
						<p><strong>Monday-Friday:</strong> 9am to 5pm</p>
						<p><strong>Saturday:</strong> 10am to 2pm</p>
						<p><strong>Sunday:</strong> Closed</p>
					</div>
				</div>

				<div class="footer-site-info">
					<div class="copyright">
						<p>Copyright &copy; 2016 Le Red Bread</p>
					</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
			<!-- #page -->
		<?php wp_footer(); ?>

	</body>
</html>
