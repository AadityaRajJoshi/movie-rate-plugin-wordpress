<?php 
/**
* @package aadyplugin
*/

/*
Plugin Name: Aady Plugin
Description: First plugin 
Version: 1.0.0
Author: Aaditya Raj Joshi
Text Domain: aady-plugin
*/
 
//setting up
if ( !function_exists('add_action') ){
	echo" You donot have access to this page ";
	exit();
}

define('ADMOVIES_PLUGIN_URL', __FILE__);

// Includes for plugin
Include("inc/activate.php");
Include("inc/init.php");
include("inc/admin/init.php");
include("save/savepostmovie.php");
include("save/filter-postcontent.php");
include("inc/frontend/enqueue.php");
include("save/rate-movie.php");

//hooks for plugin

register_activation_hook( __FILE__, "aady_plugin_activate" );

add_action( 'init', 'aady_movies_init' );

add_action( 'admin_init', 'aady_movies_admin_init');
add_action('save_post_movie', 'aady_save_movie_post_admin', 10, 3);

add_filter( 'the_content', 'aady_filter_movie_post' );

add_action( 'wp_enqueue_scripts', 'aady_enqueue_frontend_scripts', 9999 );
add_action('wp_ajax_aady_rate_movie', 'aady_rate_movies' );
add_action('wp_ajax_nopriv_aady_rate_movie', 'aady_rate_movies' );

