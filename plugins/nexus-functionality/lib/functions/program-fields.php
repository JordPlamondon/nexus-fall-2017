<?php
/**
 * Custom metaboxes for this theme using CMB2.
 *
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */
if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}
/**
 * Gets a number of posts and displays them as options
 * @param  array $query_args Optional. Overrides defaults.
 * @return array             An array of options that matches the CMB2 options array
 */
function cmb2_get_post_options( $query_args ) {

	$args = wp_parse_args( $query_args, array(
		'post_type'   => 'post',
		'numberposts' => 10,
	) );

	$posts = get_posts( $args );

	$post_options = array();
	if ( $posts ) {
		foreach ( $posts as $post ) {
          $post_options[ $post->ID ] = $post->post_title;
		}
	}

	return $post_options;
}

/**
 * Gets 5 posts for your_post_type and displays them as options
 * @return array An array of options that matches the CMB2 options array
 */
function cmb2_get_your_post_type_post_options() {
	return cmb2_get_post_options( array( 'post_type' => 'nexus_reviews', 'numberposts' => -1 ) );
}
/**
 * Add metaboxes.
 */
function nexus_register_metaboxes() {
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_nexus_';
	$program_details = new_cmb2_box( array(
		'id'            => $prefix . 'nexus_program_metabox',
		'title'         => 'Program Details',
		'object_types'  => array( 'nexus_program', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
	) );
		$program_details->add_field( array(
		'name' => 'School Logo',
		'desc' => 'Image of the School Logo',
		'id'   => $prefix . 'program_school_logo',
		'type' => 'file',
	) );
   $program_details->add_field( array(
		'name' => 'School',
		'desc' => 'Name of the School',
		'id'   => $prefix . 'program_school',
		'type' => 'text',
	) );
   $program_details->add_field( array(
		'name' => 'Program Title',
		'desc' => 'The name of the program',
		'id'   => $prefix . 'program_title',
		'type' => 'text',
	) );
	  $program_details->add_field( array(
		'name' => 'Program Type',
		'desc' => 'The type of program',
		'id'   => $prefix . 'program_type',
		'type' => 'text',
		'repeatable' => true,
  ) );
   $program_details->add_field( array(
		'name' => 'Price',
		'desc' => 'The price of the program',
		'id'   => $prefix . 'program_price',
		'type' => 'text',
  ) );
   $program_details->add_field( array(
		'name' => 'Duration',
		'desc' => 'The duration of the program',
		'id'   => $prefix . 'program_duration',
		'type' => 'text',
  ) );
  $program_details->add_field( array(
		'name' => 'City',
		'desc' => 'The City the program is located in',
		'id'   => $prefix . 'program_city',
		'type' => 'text',
	) );
	$program_details->add_field( array(
		'name' => 'About Photo',
		'desc' => 'Image to add a little flair to the page',
		'id'   => $prefix . 'program_about_image',
		'type' => 'file',
	) );
   $program_details->add_field( array(
		'name' => 'About',
		'desc' => 'The description of the program',
		'id'   => $prefix . 'program_about',
		'type' => 'wysiwyg',
	) );
		$program_details->add_field( array(
		'name' => 'Progam media',
		'desc' => 'Additional media',
		'id'   => $prefix . 'program_media',
		'type' => 'wysiwyg',
  ) );
    $program_details->add_field( array(
		'name' => 'About School',
		'desc' => 'The description of the school',
		'id'   => $prefix . 'program_school_about',
		'type' => 'wysiwyg',
  ) );
    $program_details->add_field( array(
		'name' => 'About City',
		'desc' => 'The description of the City',
		'id'   => $prefix . 'program_city_about',
		'type' => 'wysiwyg',
  ) );
  	$program_details->add_field( array(
		'name' => 'City Photo',
		'desc' => 'A photo of the City',
		'id'   => $prefix . 'program_city_photo',
		'type' => 'file',
		'repeatable' => true,
  ) );
  	$program_details->add_field( array(
		'name' => 'Student Reviews',
		'desc' => 'Student Reviews',
		'id'   => $prefix . 'program_reviews',
		'type' => 'wysiwyg',
	) );
		$program_details->add_field( array(
		'name'       => __( 'Select Review', 'cmb2' ),
		'desc'       => __( 'Link to a student Review', 'cmb2' ),
		'id'         => $prefix . 'post_multicheckbox',
		'type'       => 'multicheck',
		'options_cb' => 'cmb2_get_your_post_type_post_options',
	) );
}
add_action( 'cmb2_admin_init', 'nexus_register_metaboxes' );