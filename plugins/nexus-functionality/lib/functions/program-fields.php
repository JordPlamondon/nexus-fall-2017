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
 * Add metaboxes.
 */
function nexus_register_metaboxes() {
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_nexus_';
	$quote_meta = new_cmb2_box( array(
		'id'            => $prefix . 'nexus_program_metabox',
		'title'         => 'Program Details',
		'object_types'  => array( 'nexus_program', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
	) );
   $quote_meta->add_field( array(
		'name' => 'School',
		'desc' => 'Name of the School',
		'id'   => $prefix . 'program_school',
		'type' => 'text',
	) );
   $quote_meta->add_field( array(
		'name' => 'Program Title',
		'desc' => 'The name of the program',
		'id'   => $prefix . 'program_title',
		'type' => 'text',
  ) );
   $quote_meta->add_field( array(
		'name' => 'Price',
		'desc' => 'The price of the program',
		'id'   => $prefix . 'program_price',
		'type' => 'text',
  ) );
   $quote_meta->add_field( array(
		'name' => 'Duration',
		'desc' => 'The duration of the program',
		'id'   => $prefix . 'program_duration',
		'type' => 'text',
  ) );
  $quote_meta->add_field( array(
		'name' => 'City',
		'desc' => 'The City the program is located in',
		'id'   => $prefix . 'program_city',
		'type' => 'text',
  ) );
   $quote_meta->add_field( array(
		'name' => 'About',
		'desc' => 'The description of the program',
		'id'   => $prefix . 'program_about',
		'type' => 'wysiwyg',
  ) );
    $quote_meta->add_field( array(
		'name' => 'About School',
		'desc' => 'The description of the school',
		'id'   => $prefix . 'program_school_about',
		'type' => 'wysiwyg',
  ) );
     $quote_meta->add_field( array(
		'name' => 'About City',
		'desc' => 'The description of the City',
		'id'   => $prefix . 'program_city_about',
		'type' => 'wysiwyg',
  ) );
       $quote_meta->add_field( array(
		'name' => 'City Photo',
		'desc' => 'A photo of the City',
		'id'   => $prefix . 'program_city_photo',
		'type' => 'file',
  ) );
     $quote_meta->add_field( array(
		'name' => 'Student Reviews',
		'desc' => 'Student Reviews',
		'id'   => $prefix . 'program_reviews',
		'type' => 'wysiwyg',
  ) );
}
add_action( 'cmb2_admin_init', 'nexus_register_metaboxes' );