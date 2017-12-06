<?php
/**
 * 
 * Template Name: FAQ
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="faq-page">
				<ul class "faq-categories">
					<?php   
      			$args = array(
        			'post_type' => 'nexus_faq'
						);		
						$the_query = new WP_Query($args);
					?>

					<?php 
						if ($the_query->have_posts() ) : 
						while ($the_query->have_posts() ) : $the_query->the_post()
					?>
					<li>
						<a href="<?php the_permalink(); ?>" rel="faq title"> 
							<h2><?php the_title(); ?></h2>
						</a>	
						<?php the_post_thumbnail( 'full' ); ?>
						<?php the_excerpt(); ?>
					</li>
					<?php endwhile; // End of the loop. ?>
					<?php endif; ?>
				</ul>				
			</section>				
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
