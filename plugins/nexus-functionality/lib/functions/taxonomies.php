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
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'program_type', array(  'nexus_program' ), $args );

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
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'provinces', array( 'nexus_program' ), $args );

}
add_action( 'init', 'nexus_tax_provinces', 0 );


function nexus_tax_faq() {

	$labels = array(
		'name'                       => _x( 'FAQ Types', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'FAQ Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'FAQ', 'text_domain' ),
		'all_items'                  => __( 'All FAQ Types', 'text_domain' ),
		'parent_item'                => __( 'Parent FAQ Type', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent FAQ Type:', 'text_domain' ),
		'new_item_name'              => __( 'New FAQ Type Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New FAQ Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit FAQ Type', 'text_domain' ),
		'update_item'                => __( 'Update FAQ Type', 'text_domain' ),
		'view_item'                  => __( 'View FAQ Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate FAQ Type Types with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove FAQ Types', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular FAQ Types', 'text_domain' ),
		'search_items'               => __( 'Search FAQ Types', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No FAQ Types', 'text_domain' ),
		'items_list'                 => __( 'FAQ Types list', 'text_domain' ),
		'items_list_navigation'      => __( 'FAQ Types list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'faq', array( 'nexus_faq' ), $args );

}
add_action( 'init', 'nexus_tax_faq', 0 );