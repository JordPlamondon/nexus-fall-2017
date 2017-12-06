<?php
/**
 * 
 * Template Name: FAQ
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
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
					


					<?php
					$entries = get_post_meta( get_the_ID(), 'wiki_test_repeat_group', true );

					foreach ( (array) $entries as $key => $entry ) {

						$img = $title = $desc = $caption = '';

						if ( isset( $entry['title'] ) ) {
							$title = esc_html( $entry['title'] );
						}

						if ( isset( $entry['description'] ) ) {
							$desc = wpautop( $entry['description'] );
						}

						if ( isset( $entry['image_id'] ) ) {
							$img = wp_get_attachment_image( $entry['image_id'], 'share-pick', null, array(
								'class' => 'thumb',
							) );
						}

						$caption = isset( $entry['image_caption'] ) ? wpautop( $entry['image_caption'] ) : '';
					} ?> 

					<?php endwhile; // End of the loop. ?>
					<?php endif; ?>

				</ul>			
				<div class="about-journey">
      		<h2> Start Your Journey<h2><br>
      		<div class="underline"></div>
      		<p>Let us help you find your path to success</p>
      		<button class="consult">Book Consult</button>
      	</div>	
			</section>			
		</main><!-- #main -->
	</div><!-- #primary -->

<!-- add get footer -->
