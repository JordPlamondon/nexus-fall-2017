<?php
/**
 * The template for displaying archive pages.
 * Template Name: Programs
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <?php
    if( $terms = get_terms( 'category', 'orderby=name' ) ) : // to make it simple I use default categories
	    echo '<select name="categoryfilter"><option>Select category...</option>';
	    foreach ( $terms as $term ) :
		    echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
	    endforeach;
	    echo '</select>';
    endif;
    ?>


		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

