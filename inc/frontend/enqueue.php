<?php 
function aady_enqueue_frontend_scripts(){
	wp_enqueue_script( 'aady_main_script', plugins_url( '/assets/js/main.js', ADMOVIES_PLUGIN_URL ));

	wp_localize_Script("aady_main_script", "movie_obj", array(
		"ajax_url" => admin_url("admin-ajax.php")
	));
}