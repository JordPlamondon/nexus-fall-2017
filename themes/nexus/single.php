<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>


			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
<?php
$entries = get_post_meta( get_the_ID(), 'wiki_test_repeat_group', true );

foreach ( (array) $entries as $key => $entry ) {

	$img = $title = $desc = $caption = '';

	if ( isset( $entry['title'] ) ) {
		$title = esc_html( $entry['title'] );
	}

	if ( isset( $entry['description'] ) ) {
		$desc = wpautop( $entry['description'] );
	}

	if ( isset( $entry['image_id'] ) ) {
		$img = wp_get_attachment_image( $entry['image_id'], 'share-pick', null, array(
			'class' => 'thumb',
		) );
	}

	$caption = isset( $entry['image_caption'] ) ? wpautop( $entry['image_caption'] ) : '';

	// Do something with the data
}
?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<!-- add footer -->
