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
					the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>


			<?php endwhile; // End of the loop. ?>

			<?php
    	$args = array( 'posts_per_page' => '6');
    	$product_posts = get_posts( $args );?>
			<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
			<?php the_post_thumbnail( 'full' ); ?>
			<?php endforeach; wp_reset_postdata(); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
