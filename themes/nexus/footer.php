<?php
/**
 * The template for displaying the footer.
 *
 * @package Nexus_Theme
 */

?>

			</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">


<?php get_sidebar();?>


<div class="footer_hidden--container">
	<div class="footer__site-info hidden">
		<div class="footer_hidden_anchor">
			<a href="&lt;?php echo home_url(); ?&gt;">© Copyright - Nexus Exchange 2017
			</a>
		</div>
		
		<div class="footer__desktop--nav">

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>


			<!-- <ul class="footer_desktop--nav--ul">
					<li class="footer--nav--li">
						<a href="<?php echo home_url() ?>/program/" target="_blank">Program</a>
					</li>
					<li class="footer--nav--li">
						<a href="<?php echo home_url() ?>/about/" target="_blank">About Us</a>
					</li>
					<li class="footer--nav--li">
						<a href="<?php echo home_url() ?>/advice/" target="_blank">FAQ</a>
					</li>
					<li class="footer--nav--li">
						<a href="<?php echo home_url() ?>/contact/" target="_blank">Contact</a>
				</li>
					<li class="footer--nav--li">
					<a href="<?php echo home_url() ?>/blog/" target="_blank">Blog</a>
				</li>
			</ul> -->
		</div>
	</div>
</div>








<?php wp_footer(); ?>
</footer>
	</body>
</html>
