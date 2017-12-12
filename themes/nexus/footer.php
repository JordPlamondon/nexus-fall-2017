<?php
/**
 * The template for displaying the footer.
 *
 * @package Nexus_Theme
 */

?>

			</div><!-- #content -->


<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="footer__social-media">
    <div class="footer__why-nexus">
			<h2>Why Nexus?</h2>
			<div class="underline footer"></div>
      <p>Our passion is helping our clients learn how to prepare a powerful action plan and execute their life-changing journey of living in Canada.</p>
    </div> <!-- footer__why-nexus -->

    <div class="footer__social-media-container">
			<h2>Stay Connected</h2>
			<div class="underline footer"></div>
			<div class="socialmedia-container">
				<img src="http://nexus.van.cp.academy.red/wp-content/uploads/2017/12/face_logo1@3x.png" alt="Facebook" />
				<img src="http://nexus.van.cp.academy.red/wp-content/uploads/2017/12/twitter_logo1@3x.png" alt="Twitter" />
				<img src="http://nexus.van.cp.academy.red/wp-content/uploads/2017/12/youtube_logo1@3x.png" alt="Youtube" />
				<img src="http://nexus.van.cp.academy.red/wp-content/uploads/2017/12/Instagram@3x.png" alt="Instagram" />
			</div> <!-- socialmedia-container -->
    </div> <!-- footer__social-media-container -->

    <section class="footer_contact_info">
      <div class="footer__contact">
				<h2>Contact Us</h2>
				<div class="underline footer"></div>
        <div class="widget_info_contain one">
          <div class="widget_fa"><i class="fa fa-map-marker hide-here" aria-hidden="true"></i></div>
          <p>119-970 Burrard St.<br>Vancouver, BC V6Z 2R4</p>
				</div> <!-- widget_info_contain -->
				<div class="footer__office">
					<div class="widget_info_contain">
						<div class="widget_fa"> <i class="fa fa-hourglass-end hide-here"></i></div>
						<p class="footer__office--hours">Office Hours: Monday-Friday, 9am - 5pm PST</p>
					</div> <!-- widget_info_contain -->
				</div> <!-- footer__office -->      
			</div> <!-- footer__contact -->

      <div class="footer__office">
				<div class="widget_info_contain">
          <div class="widget_fa"><i class="fa fa-phone hide-here"></i></div>
          <a href="tel:6042886787">604 288 6787</a>
        </div> <!-- widget_info_contain -->      
      </div> <!-- footer__office -->
    </section> <!-- footer_contact_info --><!-- footer_contact_info -->
  </div> <!-- footer__social-media -->

  <div class="footer_hidden--container">
    <div class="footer__site-info hidden">
      <div class="footer_hidden_anchor">
        <a href="<?php echo home_url(); ?>"><?php printf( esc_html( '&copy; Copyright - Nexus Exchange %s' ), '2017' ); ?>
        </a>
      </div> <!-- footer_hidden_anchor -->
        <div class="footer__desktop--nav">
					<ul class="footer_desktop--nav--ul">
						<li class="footer--nav--li"><a href="<?php echo home_url() ?>/program/" target="_blank">Program</a></li>
						<li class="footer--nav--li"><a href="<?php echo home_url() ?>/about/" target="_blank">About Us</a></li>
						<li class="footer--nav--li"><a href="<?php echo home_url() ?>/advice/" target="_blank">FAQ</a></li>
						<li class="footer--nav--li"><a href="<?php echo home_url() ?>/contact/" target="_blank">Contact</a></li>
						<li class="footer--nav--li"><a href="<?php echo home_url() ?>/blog/" target="_blank">Blog</a></li>
					</ul> <!--footer_desktop--nav--ul-->
      </div> <!--footer__desktop--nav-->
    </div> <!--footer__site-info hidden-->
  </div>  <!--footer_hidden--container-->
</footer>








	<?php wp_footer(); ?>



	</body>
</html>
