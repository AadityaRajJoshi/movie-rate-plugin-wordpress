<?php 
function aady_admin_enqueue(){

	global $typenow;
	if ( $typenow !== 'movie'  ){
		return;
	}
	wp_enqueue_style('aady_bootstrap', plugins_url('/assets/bootstrap/css/bootstrap.css', ADMOVIES_PLUGIN_URL));

	
}	
