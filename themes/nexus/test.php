<?php
/**
 * The template for displaying all single posts.
 * Template Name: Test
 * @package nexus_Theme
 */

get_header(); ?>





    <?php $args = array( 'post_type' => 'nexus_front_carousel', 'orderby' => 'rand', 'posts_per_page' => 3, ); $query = new WP_Query( $args );?>
        <div class="owl-carousel owl-theme">
					<?php if ( $query->have_posts() ) : ?>

					
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<?php get_template_part( 'template-parts/content-test' ); ?>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

                    <?php endif; 
                    
        wp_reset_query();?>
      </div> <!-- carousel -->
  

    <?php get_footer(); ?>