    <!-- var post = data[i];
          var image = '';
          var school = post['_nexus_program_school'];
          var title = post['_nexus_program_title'];
          var programContainer = 'program-container-' + i;
          var programType = post['_nexus_program_type'];
          var link = api_vars.home_url + '/' + post['slug'];
        
          if (post['featured_media'] !== undefined){
            image = post['_embedded']['wp:featuredmedia'][0]['source_url'];
          }
          var article = '<article class=program-container "' + programContainer + '">';
          article += '<div class="program-link"><a href="' + link + '">'
          article += '<div class="program-image"><img src="' + image + '"></div>'
          article += '<div class="program-school"><p>' + school + '</p></div>'; 
          article += '<div class="program-name"><p>' + title + '</p></div>';
          for (var program in programType){
            article += '<div class ="program-type"><p>' + programType[program] + '</p></div>'
          }
          article += '</a></div></article>' -->


          <?php
/**
 * Template part for displaying posts.
 *
 * @package nexus_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('program-container'); ?>>
	<header class="entry-header">
    
    <?php if ( has_post_thumbnail() ) : ?>
    <?php $program_image = wp_get_attachment_url ( get_post_thumbnail_id(), 'thumbnail' );?>
			<div class="program-image"><img src="<?php echo $program_image; ?>"></div>
    <?php endif; ?>

    <div class="program-school">
      <p><?php echo get_post_meta($post->ID, '_nexus_program_school', true); ?></p>
    </div>

		<?php the_title( sprintf( '<h2 class="entry-title program-name"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	</header><!-- .entry-header -->
</article><!-- #post-## -->
