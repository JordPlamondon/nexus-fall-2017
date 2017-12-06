<?php
/**
 * The template for displaying the footer.
 *
 * @package Nexus_Theme
 */

?>

			</div><!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">

		<?php get_sidebar(); ?>
	<div class="footer_hidden--container">
	<div class="footer__site-info hidden">
		<div class="footer_hidden_anchor">
		<a href="<?php echo esc_url( 'https://nexusintercambia.com/' ); ?>"><?php printf( esc_html( '&copy; Copyright - Nexus Exchange %s' ), '2017' ); ?></a>
		</div> <!--footer_hidden_anchor-->
	<div class="footer__desktop--nav">
			<ul>
			<li><a href="https://" target="_blank">Program</a></li>
			<li><a href="https://" target="_blank">About Us</a></li>
			<li><a href="https://" target="_blank">FAQ</a></li>
			<li><a href="https://" target="_blank">Contact</a></li>
			<li><a href="https://" target="_blank">Blog</a></li>
	</div> <!--footer__desktop--nav-->
</div> <!--footer__site-info hidden-->
</div> <!--footer_hidden--container-->

	<?php wp_footer(); ?>



	</body>
</html>
