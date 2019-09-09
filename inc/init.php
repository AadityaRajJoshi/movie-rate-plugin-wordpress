<?php 
function aady_movies_init(){
	$labels = array(
		'name' => _x( 'Movies', 'aady-plugin' ),
		'singular_name' => _x( 'Movie','aady-plugin' ),
		'menu_name' => _x( 'Movies','aady-plugin' ),
		'name_admin_bar'=> _x( 'Movie', 'aady-plugin' ),
		'add_new' => _x( 'Add New','aady-plugin' ),
		'add_new_item' => __( 'Add New Movie', 'aady-plugin' ),
		'new_item' => __( 'New Movie', 'aady-plugin' ),
		'edit_item' => __( 'Edit Movie', 'aady-plugin' ),
		'view_item'=> __( 'View Movie', 'aady-plugin' ),
		'all_items' => __( 'All Movies', 'aady-plugin' ),
		'search_items' => __( 'Search Movies', 'aady-plugin' ),
		'parent_item_colon' => __( 'Parent Movies:', 'aady-plugin' ),
		'not_found'=> __( 'No Movies found.', 'aady-plugin' ),
		'not_found_in_trash' => __( 'No Movies found in Trash.', 'aady-plugin' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'aady-plugin' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'movie' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'menu_icon' => 'dashicons-video-alt2'
	);
	register_post_type('movie', $args);
}