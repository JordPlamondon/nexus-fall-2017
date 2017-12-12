<?php
/**
 * The template for displaying all pages.
 * Template Name: Consult
 * @package nexus_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <div class="consult-wrapper">
    <h2 class="title"> Start Your Journey</h2>
      <div class="consult-form">
    <?php while ( have_posts() ) : the_post(); ?>
           
            <div class="underline"></div>
            <div class="contact-content">	<?php get_template_part( 'template-parts/content', 'page' ); ?>
            <?php endwhile;  ?>

</div>
    </div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer();?>