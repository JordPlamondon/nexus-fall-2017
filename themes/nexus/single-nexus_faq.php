<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="banner-faq-single"> 
    	<div class="banner-image-faq-single">
      	<h1 class="faq-single-title"><?php echo get_the_title()?><h1>
      	<div class="underline"></div>
    	</div>
		</div>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
			
<!-- Field Group Metaboxes -->
<?php
$entries = get_post_meta( get_the_ID(), 'wiki_test_repeat_group', true );

foreach ( (array) $entries as $key => $entry ) {

	$img = $title = $desc = ''; ?>

	<div class="faq-homestay">
		<button class="homestay-button">
		<div style="font-size: 50px;"	
			<i class="fa fa-angle-down" aria-hidden="true"></i>
		</div>

		<!-- title -->
		<?php 
			if ( isset( $entry['title'] ) ) {
				$title = esc_html( $entry['title'] );
			} ?>
		</button>

		<div class="faq-meta-title">
			<?php echo $title; ?>
		</div>
	</div>

	<div id="dropdown" class="faq-dropdown">

		<!-- description -->
		<?php
			if ( isset( $entry['description'] ) ) {
				$desc = wpautop( $entry['description'] );
			} ?>
			<div class="faq-meta-text">
				<?php echo $desc; ?>
			</div>

		<!-- image -->
		<?php
			if ( isset( $entry['image_id'] ) ) {
				$img = wp_get_attachment_image( $entry['image_id'], 'share-pick', null, array(
			'class' => 'thumb',
			) ); 
		} ?>
		<?php echo $img; ?>
	</div>
<?php
}
?>
		<?php endwhile; // End of the loop. ?>
		
			<div class="faq-single-homestay"> 
				<h2> Keep Looking<h2><br> 
      		<div class="underline"></div>
    
      		<div class="homestay-button-wrapper">
        		<button class="homestay-looking-button"><p>Immigration</p></button>
        		<button class="homestay-looking-button"><p>Before Arriving</p></button>
        		<button class="homestay-looking-button"><p>Financial</p></button>
        		<button class="homestay-looking-button"><p>School</p></button>
        		<button class="homestay-looking-button"><p>Working</p></button>
        		<button class="homestay-looking-button"><p>Return To Top</p></button>
      		</div>

				<div class="faq-single-journey">
      		<h2> Start Your Journey<h2><br>
					<div class="underline"></div>
					<div class="journey-text">
      		<p>Let us help you find your path to success</p>
					<button class="consult">Book Consult</button>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>