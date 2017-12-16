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
function cmb2_get_review_post_options() {
	return cmb2_get_post_options( array( 'post_type' => 'nexus_reviews', 'numberposts' => -1 ) );
}
function cmb2_get_city_post_options() {
	return cmb2_get_post_options( array( 'post_type' => 'nexus_cities', 'numberposts' => -1 ) );
}
function cmb2_get_school_post_options() {
	return cmb2_get_post_options( array( 'post_type' => 'nexus_schools', 'numberposts' => -1 ) );
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
		'name'       => __( 'Select Review', 'cmb2' ),
		'desc'       => __( 'Link to a student Review', 'cmb2' ),
		'id'         => $prefix . 'post_multicheckbox',
		'type'       => 'multicheck',
		'options_cb' => 'cmb2_get_review_post_options',
	) );
	$program_details->add_field( array(
		'name'       => __( 'Select City', 'cmb2' ),
		'desc'       => __( 'Link to a City', 'cmb2' ),
		'id'         => $prefix . 'post_multicheckbox_city',
		'type'       => 'multicheck',
		'options_cb' => 'cmb2_get_city_post_options',
	) );
	$program_details->add_field( array(
		'name'       => __( 'Select School', 'cmb2' ),
		'desc'       => __( 'Link to a School', 'cmb2' ),
		'id'         => $prefix . 'post_multicheckbox_school',
		'type'       => 'multicheck',
		'options_cb' => 'cmb2_get_school_post_options',
	) );
		$schools = new_cmb2_box( array(
		'id'            => $prefix . 'nexus_schools_metabox',
		'title'         => 'School Details',
		'object_types'  => array( 'nexus_schools', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
	) );
		$schools->add_field( array(
		'name' => 'School Media',
		'desc' => 'Embed a video or photo of the school',
		'id'   => $prefix . 'school_media',
		'type' => 'wysiwyg',
	) );
	$cmb = new_cmb2_box( array(
		'id'            => $prefix . 'nexus_cities_metabox',
		'title'         => __( 'Cities Metabox Fields', 'cmb2' ),
		'object_types'  => array( 'nexus_cities' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	
	$city_group_field_id = $cmb->add_field( array(
    'id'          => 'cities_repeat_group',
    'type'        => 'group',
    'description' => 'Generates reusable form entries',
    // 'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => array(
      'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
      'add_button'    => __( 'Add Another Entry', 'cmb2' ),
      'remove_button' => __( 'Remove Entry', 'cmb2' ),
      'sortable'      => true, // beta
      // 'closed'     => true, // true to have the groups closed by default
    ),
  ) );

  // Id's for group's fields only need to be unique for the group. Prefix is not needed.
  $cmb->add_group_field( $city_group_field_id, array(
    'name' => 'Entry Title',
    'id'   => 'title',
    'type' => 'text',
    // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );
  
  $cmb->add_group_field( $city_group_field_id, array(
    'name' => 'Description',
    'description' => 'Write a short description for this entry',
    'id'   => 'description',
    'type' => 'textarea_small',
  ) );
  
  $cmb->add_group_field( $city_group_field_id, array(
    'name' => 'Entry Image',
    'id'   => 'image',
    'type' => 'file',
  ) );
  
}
add_action( 'cmb2_admin_init', 'nexus_register_metaboxes' );