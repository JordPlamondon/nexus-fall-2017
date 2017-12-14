  <?php
  /**
   * Template part for displaying single posts.
   *
   * @package nexus_Theme
   */

  ?>

	<article id="post-<?php the_ID(); ?>" class="carouselplaceholder"; ?>
			<div class="carouselplaceholder__content-wrapper">
				<div class="carouselplaceholder__image-wrapper">
  			<?php if ( has_post_thumbnail() ) : ?>
  				<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
				</div>
  			<?php the_title( '<h2 class="carouselplaceholder_subheader">', '</h1>' ); ?>
  			<div class="carouselplaceholder__info">
  				<?php the_content(); ?>
				</div><!-- .entry-content -->
			</div><!-- content-wrapper -->
  </article><!-- #post-## -->
