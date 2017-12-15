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

// FAQ Custom Post Type
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

	function nexus_front_carousel() {
	
		$labels = array(
			'name'                  => _x( 'Front Page Carousel Cells', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Front Page Carousel Cell', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Front Page Carousel Cells', 'text_domain' ),
			'name_admin_bar'        => __( 'Front Page Carousel Cell', 'text_domain' ),
			'archives'              => __( 'Front Page Carousel Cell Archives', 'text_domain' ),
			'attributes'            => __( 'Front Page Carousel Cell Attributes', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Front Page Carousel Cell:', 'text_domain' ),
			'all_items'             => __( 'All Front Page Carousel Cells', 'text_domain' ),
			'add_new_item'          => __( 'Add New Front Page Carousel Cell', 'text_domain' ),
			'add_new'               => __( 'Add New', 'text_domain' ),
			'new_item'              => __( 'New Front Page Carousel Cell', 'text_domain' ),
			'edit_item'             => __( 'Edit Front Page Carousel Cell', 'text_domain' ),
			'update_item'           => __( 'Update Front Page Carousel Cell', 'text_domain' ),
			'view_item'             => __( 'View Front Page Carousel Cell', 'text_domain' ),
			'view_items'            => __( 'View Front Page Carousel Cells', 'text_domain' ),
			'search_items'          => __( 'Search Front Page Carousel Cell', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into Front Page Carousel Cell', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Front Page Carousel Cell', 'text_domain' ),
			'items_list'            => __( 'Front Page Carousel Cells list', 'text_domain' ),
			'items_list_navigation' => __( 'Front Page Carousel Cells list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter Front Page Carousel Cells list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Front Page Carousel Cell', 'text_domain' ),
			'description'           => __( 'Front Page Carousel Cell page for nexus website.', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'taxonomies'            => array( 'category', 'post_tag', 'Front Page Carousel Cell' ),
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
		register_post_type( 'nexus_front_carousel', $args );
	
	}
	add_action( 'init', 'nexus_front_carousel', 0 );

	function nexus_reviews() {
	
		$labels = array(
			'name'                  => _x( 'Student Reviews', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Student Review', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Student Reviews', 'text_domain' ),
			'name_admin_bar'        => __( 'Student Review', 'text_domain' ),
			'archives'              => __( 'Student Review Archives', 'text_domain' ),
			'attributes'            => __( 'Student Review Attributes', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Student Review:', 'text_domain' ),
			'all_items'             => __( 'All Student Reviews', 'text_domain' ),
			'add_new_item'          => __( 'Add New Student Review', 'text_domain' ),
			'add_new'               => __( 'Add New', 'text_domain' ),
			'new_item'              => __( 'New Student Review', 'text_domain' ),
			'edit_item'             => __( 'Edit Student Review', 'text_domain' ),
			'update_item'           => __( 'Update Student Review', 'text_domain' ),
			'view_item'             => __( 'View Student Review', 'text_domain' ),
			'view_items'            => __( 'View Student Reviews', 'text_domain' ),
			'search_items'          => __( 'Search Student Review', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into Student Review', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Student Review', 'text_domain' ),
			'items_list'            => __( 'Student Reviews list', 'text_domain' ),
			'items_list_navigation' => __( 'Student Reviews list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter Student Reviews list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Student Review', 'text_domain' ),
			'description'           => __( 'Student Review page for nexus website.', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'taxonomies'            => array( 'category', 'post_tag', 'Student Review' ),
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
		register_post_type( 'nexus_reviews', $args );
	
	}
	add_action( 'init', 'nexus_reviews', 0 );

	function nexus_schools() {
	
		$labels = array(
			'name'                  => _x( 'Schools', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'School', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Schools', 'text_domain' ),
			'name_admin_bar'        => __( 'School', 'text_domain' ),
			'archives'              => __( 'School Archives', 'text_domain' ),
			'attributes'            => __( 'School Attributes', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent School:', 'text_domain' ),
			'all_items'             => __( 'All Schools', 'text_domain' ),
			'add_new_item'          => __( 'Add New School', 'text_domain' ),
			'add_new'               => __( 'Add New', 'text_domain' ),
			'new_item'              => __( 'New School', 'text_domain' ),
			'edit_item'             => __( 'Edit School', 'text_domain' ),
			'update_item'           => __( 'Update School', 'text_domain' ),
			'view_item'             => __( 'View School', 'text_domain' ),
			'view_items'            => __( 'View Schools', 'text_domain' ),
			'search_items'          => __( 'Search School', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into School', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this School', 'text_domain' ),
			'items_list'            => __( 'Schools list', 'text_domain' ),
			'items_list_navigation' => __( 'Schools list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter Schools list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'School', 'text_domain' ),
			'description'           => __( 'School page for nexus website.', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'taxonomies'            => array( 'category', 'post_tag', 'School' ),
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
		register_post_type( 'nexus_schools', $args );
	
	}
	add_action( 'init', 'nexus_schools', 0 );

	function nexus_cities() {
	
		$labels = array(
			'name'                  => _x( 'Cities', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'City', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Cities', 'text_domain' ),
			'name_admin_bar'        => __( 'City', 'text_domain' ),
			'archives'              => __( 'City Archives', 'text_domain' ),
			'attributes'            => __( 'City Attributes', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent City:', 'text_domain' ),
			'all_items'             => __( 'All Cities', 'text_domain' ),
			'add_new_item'          => __( 'Add New City', 'text_domain' ),
			'add_new'               => __( 'Add New', 'text_domain' ),
			'new_item'              => __( 'New City', 'text_domain' ),
			'edit_item'             => __( 'Edit City', 'text_domain' ),
			'update_item'           => __( 'Update City', 'text_domain' ),
			'view_item'             => __( 'View City', 'text_domain' ),
			'view_items'            => __( 'View Cities', 'text_domain' ),
			'search_items'          => __( 'Search City', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into City', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this City', 'text_domain' ),
			'items_list'            => __( 'Cities list', 'text_domain' ),
			'items_list_navigation' => __( 'Cities list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter Cities list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'City', 'text_domain' ),
			'description'           => __( 'City page for nexus website.', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title'),
			'taxonomies'            => array( 'category', 'post_tag', 'City' ),
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
		register_post_type( 'nexus_cities', $args );
	
	}
	add_action( 'init', 'nexus_cities', 0 );






