<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function nexus_tax_program_types() {

	$labels = array(
		'name'                       => _x( 'Program Types', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Program Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Program Type', 'text_domain' ),
		'all_items'                  => __( 'All Product Types', 'text_domain' ),
		'parent_item'                => __( 'Parent Program Type', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Program Type:', 'text_domain' ),
		'new_item_name'              => __( 'New Program Type Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Program Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Program Type', 'text_domain' ),
		'update_item'                => __( 'Update Program Type', 'text_domain' ),
		'view_item'                  => __( 'View Program Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Program Types with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Program Types', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Program Types', 'text_domain' ),
		'search_items'               => __( 'Search Program Types', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Program Types', 'text_domain' ),
		'items_list'                 => __( 'Program Types list', 'text_domain' ),
		'items_list_navigation'      => __( 'Program Types list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'program_type', array( 'post', ' nexus_program' ), $args );

}
add_action( 'init', 'nexus_tax_program_types', 0 );

function nexus_tax_provinces() {

	$labels = array(
		'name'                       => _x( 'Provinces', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Province', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Province', 'text_domain' ),
		'all_items'                  => __( 'All Provinces', 'text_domain' ),
		'parent_item'                => __( 'Parent Province', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Province:', 'text_domain' ),
		'new_item_name'              => __( 'New Province Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Province', 'text_domain' ),
		'edit_item'                  => __( 'Edit Province', 'text_domain' ),
		'update_item'                => __( 'Update Province', 'text_domain' ),
		'view_item'                  => __( 'View Province', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Provinces with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Provinces', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Provinces', 'text_domain' ),
		'search_items'               => __( 'Search Provinces', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Provinces', 'text_domain' ),
		'items_list'                 => __( 'Provinces list', 'text_domain' ),
		'items_list_navigation'      => __( 'Provinces list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'program_type', array( 'post', ' nexus_program' ), $args );

}
add_action( 'init', 'nexus_tax_provinces', 0 );

function nexus_tax_provinces() {

	$labels = array(
		'name'                       => _x( 'Provinces', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Province', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Province', 'text_domain' ),
		'all_items'                  => __( 'All Provinces', 'text_domain' ),
		'parent_item'                => __( 'Parent Province', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Province:', 'text_domain' ),
		'new_item_name'              => __( 'New Province Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Province', 'text_domain' ),
		'edit_item'                  => __( 'Edit Province', 'text_domain' ),
		'update_item'                => __( 'Update Province', 'text_domain' ),
		'view_item'                  => __( 'View Province', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Provinces with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Provinces', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Provinces', 'text_domain' ),
		'search_items'               => __( 'Search Provinces', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Provinces', 'text_domain' ),
		'items_list'                 => __( 'Provinces list', 'text_domain' ),
		'items_list_navigation'      => __( 'Provinces list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'program_type', array( 'post', ' nexus_program' ), $args );

}
add_action( 'init', 'nexus_tax_provinces', 0 );

function nexus_tax_faq() {

	$labels = array(
		'name'                       => _x( 'FAQs', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'FAQ', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'FAQ', 'text_domain' ),
		'all_items'                  => __( 'All FAQs', 'text_domain' ),
		'parent_item'                => __( 'Parent FAQ', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent FAQ:', 'text_domain' ),
		'new_item_name'              => __( 'New FAQ Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New FAQ', 'text_domain' ),
		'edit_item'                  => __( 'Edit FAQ', 'text_domain' ),
		'update_item'                => __( 'Update FAQ', 'text_domain' ),
		'view_item'                  => __( 'View FAQ', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate FAQs with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove FAQs', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular FAQs', 'text_domain' ),
		'search_items'               => __( 'Search FAQs', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No FAQs', 'text_domain' ),
		'items_list'                 => __( 'FAQs list', 'text_domain' ),
		'items_list_navigation'      => __( 'FAQs list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'program_type', array( 'post', ' nexus_faq' ), $args );

}
add_action( 'init', 'nexus_tax_faq', 0 );