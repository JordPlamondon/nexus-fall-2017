<?php
/**
 * The template for displaying archive pages.
 * Template Name: Programs
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
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
		
		<button class="program-filter-submit">Explore</button>
			<section class="search-results">
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

