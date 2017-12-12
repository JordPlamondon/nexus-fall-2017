<?php
/**
 * Template part for displaying single posts.
 *
 * @package nexus_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
        </header?

        <h2><?php echo get_post_meta($post->ID, '_nexus_program_school', true); ?></h2>

	<footer class="entry-footer">
		<?php nexus_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
