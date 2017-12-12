<?php
/**
 * Template part for displaying single posts.
 *
 * @package nexus_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-meta">
      <?php  var_dump( get_the_terms($post->ID, 'program_type') ); ?> 
    </div><!-- .entry-meta -->

    <section class="single-program-container">
        <h1><?php echo get_post_meta($post->ID, '_nexus_program_school', true); ?></h1>
        <h2><?php echo get_post_meta($post->ID, '_nexus_program_title', true); ?></h2>
        <div class="program-meta">
            <div class="program-price">
                <p>Price</p>
                <p><?php echo get_post_meta($post->ID, '_nexus_program_price', true); ?></p>
            </div>
            <div class="program-meta-seperator"></div>
            <div class="program-duration">
                <p>Duration</p>
                <p><?php echo get_post_meta($post->ID, '_nexus_program_duration', true); ?></p>
            </div>
            <div class="program-meta-seperator"></div>
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
    <div class="readmore">
        <?php $terms = wp_get_post_terms( $post->ID, 'program_type' ); ?>
        <!-- <?php var_dump ( $terms ) ?> -->
        <?php

        $custom_terms = get_terms('program_type');
        
        if( $custom_terms ){

        // going to hold our tax_query params
        $tax_query = array();

        // add the relation parameter (not sure if it causes trouble if only 1 term)
        if( count( $custom_terms > 1 ) )
            $tax_query['relation'] = 'OR' ;

        // loop through terms and build a tax query
        foreach( $custom_terms as $custom_term ) {

        $tax_query[] = array(
            'taxonomy' => 'program_type',
            'field' => 'slug',
            'terms' => $custom_term->slug,
        ); 
        }
    }
        ?>
        <?php $args = array( 'post_type' => 'nexus_program', 'posts_per_page' => 3, 'tax_query' => $tax_query ); $query = new WP_Query( $args );?>

					<?php if ( $query->have_posts() ) : ?>

					
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<?php get_template_part( 'template-parts/content-single-nexus_program-readmore' ); ?>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

                    <?php endif; 
                    
                    wp_reset_query();?>
    </div>


</article><!-- #post-## -->
