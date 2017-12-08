<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <section class="blog-page">
    
      <ul class "blog-categories">
        <?php   
          $args = array(
            'post_type' => 'nexus_blog'
          );		
          $the_query = new WP_Query($args);
        ?>
    
        <?php 
          if ($the_query->have_posts() ) : 
          while ($the_query->have_posts() ) : $the_query->the_post()
        ?>
    
        <li>
          <?php the_post_thumbnail( 'full' ); ?>
          <div class="blog-text">
            <a href="<?php the_permalink(); ?>" rel="blog title"> 
              <h2><?php the_title(); ?></h2>
            </a>	
            <?php the_excerpt(); ?>
          </div>
        </li>
        <!-- <div class="underline"></div>
        <div class="shadow-border"></div> -->
              
        <?php endwhile; // End of the loop. ?>
        <?php endif; ?>
      </ul>		

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>