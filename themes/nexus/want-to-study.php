<?php
/**
 * The template for displaying all pages.
 * Template Name: Want to Study
 * 
 * @package RED_Starter_Theme
 */
get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
    <div class="want-to-content">
    <h1> I Want To Study: </h1>

    <span>
      <div class="contact-want-to">
      <?php
    if( $terms = get_terms( array(
                  'taxonomy' => 'program_type',
									'hide_empty' => 0 ) ) ) :
			
	    echo '<select name="programfilter"><option>program</option>';
			foreach ( $terms as $term ) :
		    echo '<option value="' . $term->slug . '">' . $term->name . '</option>'; // ID of the category as the value of an option
	    endforeach;
	    echo '</select>';
    endif;
    ?>
       
      </div>
    </span>

<h3 class="want-in"> In </h3>

    <span>
      
      <div class="contact-want-to">
      <?php
    if( $terms = get_terms( array(
                  'taxonomy' => 'provinces', 
									'hide_empty' => 0) ) ) : // to make it simple I use default categories
	    echo '<select name="provincefilter"><option>province</option>';
	    foreach ( $terms as $term ) :
		    echo '<option value="' . $term->slug . '">' . $term->name . '</option>'; // ID of the category as the value of an option
	    endforeach;
	    echo '</select>';
    endif;
		?>
        
      </div>
    </span>
      <div class="button-wrapper">
      <button class="want-to program-filter-submit">Explore</button>
  </div>
      </div>

     <div class="search-results">

  </div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer();?>