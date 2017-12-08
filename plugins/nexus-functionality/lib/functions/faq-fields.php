<?php

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

/**
 * Add metaboxes.
 */
function nexus_register_metaboxes_2() {
	// Start with an underscore to hide fields from custom fields list
  $prefix = '_nexus_';
  
  $cmb = new_cmb2_box( array(
		'id'            => 'test_metabox',
		'title'         => __( 'FAQ Post Metabox Fields', 'cmb2' ),
		'object_types'  => array( 'nexus_faq' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

  
  $group_field_id = $cmb->add_field( array(
    'id'          => 'wiki_test_repeat_group',
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
  $cmb->add_group_field( $group_field_id, array(
    'name' => 'Entry Title',
    'id'   => 'title',
    'type' => 'text',
    // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );
  
  $cmb->add_group_field( $group_field_id, array(
    'name' => 'Description',
    'description' => 'Write a short description for this entry',
    'id'   => 'description',
    'type' => 'textarea_small',
  ) );
  
  $cmb->add_group_field( $group_field_id, array(
    'name' => 'Entry Image',
    'id'   => 'image',
    'type' => 'file',
  ) );
  
  $cmb->add_group_field( $group_field_id, array(
    'name' => 'Image Caption',
    'id'   => 'image_caption',
    'type' => 'text',
  ) );
  
  
  }


add_action( 'cmb2_admin_init', 'nexus_register_metaboxes_2' );