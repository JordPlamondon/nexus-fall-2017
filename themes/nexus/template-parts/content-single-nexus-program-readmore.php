<?php
/**
 * Template part for displaying single posts.
 *
 * @package nexus_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		 <p><?php echo get_post_meta($post->ID, '_nexus_program_about', true); ?></p>
        <p><?php echo get_post_meta($post->ID, '_nexus_program_media', true); ?></p>
        <h2><?php echo get_post_meta($post->ID, '_nexus_program_school', true); ?></h2>
        <p><?php echo get_post_meta($post->ID, '_nexus_program_school_about', true); ?></p>
        <div><?php echo get_post_meta($post->ID, '_nexus_program_city_photo', true); ?></div>
        <h2><?php echo get_post_meta($post->ID, '_nexus_program_city', true); ?></h2>
        <p><?php echo get_post_meta($post->ID, '_nexus_program_city_about', true); ?></p>
        <p><?php echo get_post_meta($post->ID, '_nexus_program_reviews', true); ?></p>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php nexus_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
