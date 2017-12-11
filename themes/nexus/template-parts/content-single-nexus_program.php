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

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
      <!-- <?php var_dump (get_post_custom()); ?> -->
    </div><!-- .entry-meta -->

    <div>
        <?php echo get_post_meta($post->ID, '_nexus_program_school', true); ?>
        <?php echo get_post_meta($post->ID, '_nexus_program_title', true); ?>
        <?php echo get_post_meta($post->ID, '_nexus_program_price', true); ?>
        <?php echo get_post_meta($post->ID, '_nexus_program_duration', true); ?>
        <?php echo get_post_meta($post->ID, '_nexus_program_city', true); ?>
        <?php echo get_post_meta($post->ID, '_nexus_program_about', true); ?>
        <?php echo get_post_meta($post->ID, '_nexus_program_school_about', true); ?>
        <?php echo get_post_meta($post->ID, '_nexus_program_city_about', true); ?>
        <?php echo get_post_meta($post->ID, '_nexus_program_reviews', true); ?>
    </div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php nexus_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
