<?php
function post_type_events_globalweb() {

	$labels = array(
		'name'                => _x( 'Eventos Global Web', 'Post Type General Name', 'wp-events-globalweb' ),
		'singular_name'       => _x( 'Evento', 'Post Type Singular Name', 'wp-events-globalweb' ),
		'menu_name'           => __( 'Eventos Global Web', 'wp-events-globalweb' ),
		'name_admin_bar'      => __( 'Eventos', 'wp-events-globalweb' ),
		'parent_item_colon'   => __( 'Parent Evento:', 'wp-events-globalweb' ),
		'all_items'           => __( 'All Eventos', 'wp-events-globalweb' ),
		'add_new_item'        => __( 'Add New Evento', 'wp-events-globalweb' ),
		'add_new'             => __( 'Add New', 'wp-events-globalweb' ),
		'new_item'            => __( 'New Evento', 'wp-events-globalweb' ),
		'edit_item'           => __( 'Edit Evento', 'wp-events-globalweb' ),
		'update_item'         => __( 'Update Evento', 'wp-events-globalweb' ),
		'view_item'           => __( 'View Evento', 'wp-events-globalweb' ),
		'search_items'        => __( 'Search Evento', 'wp-events-globalweb' ),
		'not_found'           => __( 'Not found', 'wp-events-globalweb' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'wp-events-globalweb' ),
	);
	$args = array(
		'label'               => __( 'Evento', 'wp-events-globalweb' ),
		'description'         => __( 'Eventos Global Web', 'wp-events-globalweb' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'taxonomies'          => array( 'discipline' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'events-globalweb', $args );

}

// Hook into the 'init' action
add_action( 'init', 'post_type_events_globalweb', 0 );