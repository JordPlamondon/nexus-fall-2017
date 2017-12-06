<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
      <?php var_dump (get_post_custom()); ?>

    </div><!-- .entry-meta -->

    <div>
        <?php echo get_post_meta($post->ID, '_nexus_program_school', true); ?>
        <?php
        $custom = get_post_custom();
        foreach($custom as $key => $value) {
         echo $key.': '.$value[0].'<br />';
        }
        ?>
    </div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
