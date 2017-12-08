<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="blog-wrapper">
        <div class="title-wrapper">	
				  <h1 class="blog-title">Blog</h1>
				  <div class="underline1"></div>
			  </div> 

        <section class="blog-page">
    
          <ul class "blog-categories">
            
          <?php while ( have_posts() ) : the_post(); ?>
    
            <li>
              <div class="blog-img">
                <?php the_post_thumbnail( 'full' ); ?>
              </div>
              <div class="blog-text">
                <div class="blog-video">
                  <?php the_content(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" rel="blog title"> 
                  <h2><?php the_title(); ?></h2>
                </a>	
                <div style="text-align:center;" class="read-button">
                  <button class="read-more">Read More</button>
                </div>
              </div>
            </li>
            <!-- <div class="underline"></div> -->
             <div class="shadow-border"></div> 
              
              <?php endwhile; // End of the loop. ?>
        
          </ul>		
        </section>
      </div>  
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>