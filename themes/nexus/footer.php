<?php
/**
 * The template for displaying the footer.
 *
 * @package Nexus_Theme
 */

?>

			</div><!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer__site-info">
		<a href="<?php echo esc_url( 'https://nexusintercambia.com/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'Red Team' ); ?></a>

		<section class="footer__bottom-flex-area">
	
			<div id="foot-contain" class="footer__connected">
				<h3>Stay Connected</h3>
					<div class="footer__social-media">
						<p>
								<span>
									<i class="fa fa-facebook-square"></i>
								</span>
								<span>
									<i class="fa fa-twitter-square"></i>
								</span>
								<span>
									<i class="fa fa-youtube"></i>
								</span>
								<span>
									<i class="fa fa-instagram"></i>
								</span>
						</p>
						<div class="footer__contact">
							<h3>Contact Us</h3>
							<p>
								<i class="fa fa-map-marker" aria-hidden="true"></i>
									119-970 Burrard St. Room 119 - 1st floor Vancouver, BC V6Z 2R4
								</p>
									<p>
										<i class="fa fa-phone"></i>
										<a href="tel:6042886787">604 288 6787</a>
									</p>
						</div>
					</div>
					<div class="footer__office">
						<p class="footer__office--hours">
							<i class="fa fa-hourglass-end"</i>
							Office Hours: Monday-Friday, 9am - 5pm PST
						</p>
					</div>
			</div>	
		</section>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

	</body>
</html>
