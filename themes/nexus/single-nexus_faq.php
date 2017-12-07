<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php
$prefix = '_nexus_';
$entries = get_post_meta( get_the_ID(), 'wiki_test_repeat_group', true );
// var_dump( $entries );

foreach((array)$entries as $key => $entry) : 

echo $entry['title'];
echo $entry['description'];
echo $entry['image'];



endforeach;

?>
	

    

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<!-- add footer -->
