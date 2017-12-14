  <?php
  /**
   * Template part for displaying single posts.
   *
   * @package nexus_Theme
   */

  ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="carouselplaceholder">
			<div class="carouselplaceholder__content-wrapper">
  		<header class="entry-header">
  			<?php if ( has_post_thumbnail() ) : ?>
  				<?php the_post_thumbnail( 'large' ); ?>
  			<?php endif; ?>

  			<?php the_title( '<h2 class="carouselplaceholder_subheader">', '</h1>' ); ?>

  			<div class="entry-meta">
  				<?php nexus_posted_on(); ?> / <?php nexus_comment_count(); ?> / <?php nexus_posted_by(); ?>
  			</div><!-- .entry-meta -->
  		</header><!-- .entry-header -->

  		<div class="carouselplaceholder__info">
    	  <p class="single-program-content"><?php echo get_post_meta($post->ID, '_nexus_program_about', true); ?></p>
  			<?php the_content(); ?>
  			<?php
  				wp_link_pages( array(
  					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
  					'after'  => '</div>',
  				) );
  			?>
			</div><!-- .entry-content -->
			</div><!-- content-wrapper -->
		</div><!-- carouselplaceholder -->
  		<footer class="entry-footer">
  			<?php nexus_entry_footer(); ?>
  		</footer><!-- .entry-footer -->
  </article><!-- #post-## -->

	<!-- <div class="carouselplaceholder first">
							<div class="carouselplaceholder__content-wrapper">
								<h3 class="carouselplaceholder__subheader"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h3>
								<p class="carouselplaceholder__info">
								So as most people will know by now, i am doing a backpacking adventure over the next month. Really, i'm not entirely sure what drove me to this. While iImay have my…
								</p>
							</div>
						</div> -->