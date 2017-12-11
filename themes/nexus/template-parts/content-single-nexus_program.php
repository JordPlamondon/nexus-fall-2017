<?php
/**
 * Template part for displaying single posts.
 *
 * @package nexus_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-meta">
      <!-- <?php var_dump (get_post_custom()); ?> -->
    </div><!-- .entry-meta -->

    <section class="single-program-container">
        <h1><?php echo get_post_meta($post->ID, '_nexus_program_school', true); ?></h1>
        <h2><?php echo get_post_meta($post->ID, '_nexus_program_title', true); ?></h2>
        <div class="program-meta">
            <div class="program-price">
                <p>Price</p>
                <p><?php echo get_post_meta($post->ID, '_nexus_program_price', true); ?></p>
            </div>
            <div class="program-duration">
                <p>Duration</p>
                <p><?php echo get_post_meta($post->ID, '_nexus_program_duration', true); ?></p>
            </div>
            <div class="program-city">
                <p>City</p>
                <p><?php echo get_post_meta($post->ID, '_nexus_program_city', true); ?></p>
            </div>
        </div>
        <h2>About Program</h2>
        <p><?php echo get_post_meta($post->ID, '_nexus_program_about', true); ?></p>
        <p><?php echo get_post_meta($post->ID, '_nexus_program_media', true); ?></p>
        <h2><?php echo get_post_meta($post->ID, '_nexus_program_school', true); ?></h2>
        <p><?php echo get_post_meta($post->ID, '_nexus_program_school_about', true); ?></p>
        <div><?php echo get_post_meta($post->ID, '_nexus_program_city_photo', true); ?></div>
        <h2><?php echo get_post_meta($post->ID, '_nexus_program_city', true); ?></h2>
        <p><?php echo get_post_meta($post->ID, '_nexus_program_city_about', true); ?></p>
        <p><?php echo get_post_meta($post->ID, '_nexus_program_reviews', true); ?></p>
    </div>



</article><!-- #post-## -->
