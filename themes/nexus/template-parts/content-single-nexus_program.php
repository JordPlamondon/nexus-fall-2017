<?php
/**
 * Template part for displaying single posts.
 *
 * @package nexus_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section class="single-program-container">
        
        <h2><?php echo get_post_meta($post->ID, '_nexus_program_school', true); ?></h2>

        <div class="header-wrapper">
            <h1 class="single-program-title"><?php echo get_post_meta($post->ID, '_nexus_program_title', true); ?></h2>
            <div class="underline-centered"></div>
        </div>

        <div class="program-meta">
            <div class="program-price">
                <p class="program-meta-category">Price</p>
                <p class="program-meta-content"><?php echo get_post_meta($post->ID, '_nexus_program_price', true); ?></p>
            </div>
            <div class="program-meta-seperator"></div>
            <div class="program-duration">
                <p class="program-meta-category">Duration</p>
                <p class="program-meta-content"><?php echo get_post_meta($post->ID, '_nexus_program_duration', true); ?></p>
            </div>
            <div class="program-meta-seperator"></div>
            <div class="program-city">
                <p class="program-meta-category">City</p>
                <p class="program-meta-content"><?php echo get_post_meta($post->ID, '_nexus_program_city', true); ?></p>
            </div>
        </div>
</section>
        <section class="program-flex-container">
            <div class="left-side">
                <div class="header-wrapper">
                    <h2 class="single-program-header">About Program</h2>
                    <div class="title-underline"></div>
                </div>
                <p class="single-program-content"><?php echo get_post_meta($post->ID, '_nexus_program_about', true); ?></p>
            </div>
            <div class="single-program-about-image"><img src="<?php echo get_post_meta($post->ID, '_nexus_program_about_image', true); ?>"/></div>
            
        </section>
       <section class="program-flex-container">
            <div class="program-media"><?php echo get_post_meta($post->ID, '_nexus_program_media', true); ?></div>
                <div class="strong-side">
                    <div class="header-wrapper">
                    <h2 class="single-program-header"><?php echo get_post_meta($post->ID, '_nexus_program_school', true); ?></h2>
                    <div class="title-underline"></div>
                </div>

                <p class="single-program-content"><?php echo get_post_meta($post->ID, '_nexus_program_school_about', true); ?></p>
            </div>
        </section>

        <div><?php echo get_post_meta($post->ID, '_nexus_program_city_photo', true); ?></div>

        <div class="header-wrapper">
            <h2 class="single-program-header"><?php echo get_post_meta($post->ID, '_nexus_program_city', true); ?></h2>
            <div class="title-underline"></div>
        </div>

        <p class="single-program-content"><?php echo get_post_meta($post->ID, '_nexus_program_city_about', true); ?></p>
        <p class="single-program-content"><?php echo get_post_meta($post->ID, '_nexus_program_reviews', true); ?></p>

    </div>

    <div class="read-more">
        <?php $terms = wp_get_post_terms( $post->ID, 'program_type' ); ?>
        <!-- <?php var_dump ( $terms ) ?> -->
        <?php

        $custom_terms = get_terms('program_type');
        
        if( $custom_terms ):

        // going to hold our tax_query params
        $tax_query = array();

        // add the relation parameter (not sure if it causes trouble if only 1 term)
        if( count( $custom_terms > 1 ) )
            $tax_query['relation'] = 'OR' ;
        // loop through terms and build a tax query
        foreach( $custom_terms as $custom_term ):

            $tax_query[] = array(
                'taxonomy' => 'program_type',
                'field' => 'slug',
                'terms' => $custom_term->slug,
            ); 
        endforeach;
    endif;
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
<h1 class="student-review-header"> Student Review </h1>
	<div class="student-review__box">
    <div class="student-review__box__image">
    <img src=<?php echo get_template_directory_uri() . '/assets/images/photo-review@3x.png'?>
    alt="Picture of a Student">
    </div>
    <div class="student-review__info-wrapper">
        <div class="grey"></div>
        <blockquote class="student-review__info">
        <span class="oquote"></span>Thank you so much for your help! I couldn’t have done this trip without you.<span class="cquote"></span>
        </blockquote>
    </div>
</div>
    </div> <!-- / Readmore -->

</article><!-- #post-## -->
