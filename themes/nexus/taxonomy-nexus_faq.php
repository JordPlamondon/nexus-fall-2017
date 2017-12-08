<?php
/**
 * 
 * Template Name: FAQ
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="faq-wrapper">
		<div class="title-wrapper">	
			<h1 class="faq-title"> FAQ </h1>
			<div class="underline1"></div>
		</div>
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
						<?php the_post_thumbnail( 'full' ); ?>
						<div class="list-text">
							<a href="<?php the_permalink(); ?>" rel="faq title"> 
								<h2><?php the_title(); ?></h2>
							</a>	
							<?php the_excerpt(); ?>
						</div>
					</li>
					<div class="underline"></div>
					<div class="shadow-border"></div>
					
					<?php endwhile; // End of the loop. ?>
					<?php endif; ?>
				</ul>		
					
				<div class="faq-journey">
      		<h2> Start Your Journey<h2><br>
					<div class="underline"></div>
					<div class="journey-text">
      		<p>Let us help you find your path to success</p>
					<button class="consult">Book Consult</button>
				</div>
				</div>	
						</div>
			</section>		
			<?php get_footer();?>	
		</main><!-- #main -->

	</div><!-- #primary -->

<!-- get_footer();  -->
