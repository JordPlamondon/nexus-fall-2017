<?php
/**
 * The template for displaying all pages.
 *
 * @package nexus_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="blog-wrapper">
        <div class="title-wrapper">	
				  <h1 class="blog-title">Blog</h1>
				  <div class="underline1"></div>
			  </div> 
        <h2 class="latest-videos-title">Latest Videos</h2>
        <div class="underline-videos"></div>
        <section class="blog-page">
    
          <ul class "blog-categories">
            
          <?php while ( have_posts() ) : the_post(); ?>
            <li>
              <div class="blog-video">
                <?php the_content(); ?>
              </div>
              <div class="blog-img">
                <?php the_post_thumbnail( 'full' ); ?>
              </div>
              <div class="blog-text">
                <a href="<?php the_permalink(); ?>" rel="blog title"> 
                  <h2 class="blog-title"><?php the_title(); ?></h2>
                  <div style="text-align:center;" class="read-button">
                    <button class="read-more">Read More</button>
                  </a>
                </div>
              </div>
            </li>
            <!-- <div class="underline"></div> -->
             <div class="shadow-border"></div> 
              
              <?php endwhile; // End of the loop. ?>
        
          </ul>		
          <h2 class="latest-posts-title">Latest Posts</h2>
          <div class="underline-posts"></div>
        </section>
      </div>  
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>