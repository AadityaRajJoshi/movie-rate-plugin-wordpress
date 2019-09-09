<?php 
function aady_movies_admin_init(){
	include( 'generate-metabox.php' );
	include( 'movie-metainfo.php' );
	include('enqueue.php');

	add_action('add_meta_boxes_movie', 'aady_generate_metabox');
	add_action('admin_enqueue_scripts', 'aady_admin_enqueue');
}

