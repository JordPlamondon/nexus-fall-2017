<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function nexus_program() {

	$labels = array(
		'name'                  => _x( 'Programs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Program', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Programs', 'text_domain' ),
		'name_admin_bar'        => __( 'Programs', 'text_domain' ),
		'archives'              => __( 'Program Archives', 'text_domain' ),
		'attributes'            => __( 'Program Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Program:', 'text_domain' ),
		'all_items'             => __( 'All Programs', 'text_domain' ),
		'add_new_item'          => __( 'Add New Program', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Program', 'text_domain' ),
		'edit_item'             => __( 'Edit Program', 'text_domain' ),
		'update_item'           => __( 'Update Program', 'text_domain' ),
		'view_item'             => __( 'View Program', 'text_domain' ),
		'view_items'            => __( 'View Programs', 'text_domain' ),
		'search_items'          => __( 'Search Program', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Program', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Program', 'text_domain' ),
		'items_list'            => __( 'Programs list', 'text_domain' ),
		'items_list_navigation' => __( 'Programs list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Programs list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Program', 'text_domain' ),
		'description'           => __( 'Programs for students to explore', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag', 'program_type', 'provinces' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'nexus_program', $args );

}
add_action( 'init', 'nexus_program', 0 );

// Register Custom Post Type
function nexus_faq() {
	
		$labels = array(
			'name'                  => _x( 'FAQs', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'FAQs', 'text_domain' ),
			'name_admin_bar'        => __( 'FAQ', 'text_domain' ),
			'archives'              => __( 'FAQ Archives', 'text_domain' ),
			'attributes'            => __( 'FAQ Attributes', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent FAQ:', 'text_domain' ),
			'all_items'             => __( 'All FAQs', 'text_domain' ),
			'add_new_item'          => __( 'Add New FAQ', 'text_domain' ),
			'add_new'               => __( 'Add New', 'text_domain' ),
			'new_item'              => __( 'New FAQ', 'text_domain' ),
			'edit_item'             => __( 'Edit FAQ', 'text_domain' ),
			'update_item'           => __( 'Update FAQ', 'text_domain' ),
			'view_item'             => __( 'ViewFAQ', 'text_domain' ),
			'view_items'            => __( 'View FAQs', 'text_domain' ),
			'search_items'          => __( 'Search FAQ', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into FAQ', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this FAQ', 'text_domain' ),
			'items_list'            => __( 'FAQs list', 'text_domain' ),
			'items_list_navigation' => __( 'FAQs list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter FAQs list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'FAQ', 'text_domain' ),
			'description'           => __( 'FAQ page for nexus website.', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'taxonomies'            => array( 'category', 'post_tag', 'faq' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
		);
		register_post_type( 'nexus_faq', $args );
	
	}
	add_action( 'init', 'nexus_faq', 0 );