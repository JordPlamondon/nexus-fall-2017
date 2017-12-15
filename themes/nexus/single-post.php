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

			<div class="blog-hero">
 <h1> Blog Posts </h1></br>
<div class="underline"></div>
</div>


<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
echo '<div class="blog-picture" style="background: url('. $url.')">'; ?>

	<h2> <?php the_title(); ?> </h2>
	<p>	<?php nexus_posted_on(); ?> / <?php nexus_comment_count(); ?> / <?php nexus_posted_by(); ?></p>
	<!-- title , meta, image -->
</div>
<!-- dummy text -->
	<article class="blog-post"><p> 
	<?php while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

			<?php endwhile; // End of the loop. ?>
</p></article>
<!--  -->
</div>




	


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
