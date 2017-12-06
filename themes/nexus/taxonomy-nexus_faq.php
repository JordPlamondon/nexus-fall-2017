<?php
/**
 * 
 * Template Name: FAQ
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php   
      $args = array(
        'post_type' => 'nexus_faq'
			);		
			$the_query = new WP_Query($args);
		?>

		<?php 
			if ($the_query->have_posts() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>

		<h2><?php the_title(); ?></h2>
		<?php the_post_thumbnail( 'full' ); ?>
		<?php the_excerpt(); ?>

			<?php endwhile; // End of the loop. ?>
		<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
