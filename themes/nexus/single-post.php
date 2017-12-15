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



<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
echo '<div class="blog-picture" style="background: url('. $url.');background-size: cover;">'; ?>

	<h1> <?php the_title(); ?> </h1>
	<div class="underline"></div>
	<p>	<?php nexus_posted_on(); ?> / <?php nexus_comment_count(); ?> / <?php nexus_posted_by(); ?></p>
	<!-- title , meta, image -->
</div>
<!-- dummy text -->
	<article class="blog-post"><p> 
	<?php while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

			<?php endwhile; // End of the loop. ?>
</p></article>
<div class="blog-comments">
<?php if ( comments_open() || get_comments_number() ) :
											comments_template();
									endif;
								?>
								</div>
<!--  -->
</div>




	


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
