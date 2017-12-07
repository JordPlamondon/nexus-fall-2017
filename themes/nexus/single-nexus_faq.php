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
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
<!-- Field Group Metaboxes -->
<?php
$entries = get_post_meta( get_the_ID(), 'wiki_test_repeat_group', true );

foreach ( (array) $entries as $key => $entry ) {

	$img = $title = $desc = ''; 

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

	echo $title;
	echo $desc;
	echo $img;

	// Do something with the data
}
?>

		<?php endwhile; // End of the loop. ?>
			<div class="faq-single-homestay"> 
				<h2> Keep Looking<h2><br> 
      		<div class="underline"></div>
    
      		<div class="homestay-button-wrapper">
        		<button class="homestay-looking-button">Immigration</button
        		<button class="homestay-looking-button">
        		<button class="homestay-looking-button">
        		<button class="homestay-looking-button">
        		<button class="homestay-looking-button">
        		<button class="homestay-looking-button">
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

<?php get_sidebar(); ?>
<!-- add footer -->
