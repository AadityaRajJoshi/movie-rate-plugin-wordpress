<?php 
function aady_rate_movies(){
	// print_r($_POST);
	// die();
	global $wpdb;

	$response = array('status' => 'fail');
	$movie_post_id	= $_POST['movieid'];
	$movierating = $_POST['movierating'];
	$user_ip = $_SERVER['REMOTE_ADDR'];

	$rating_count = $wpdb->get_var("SELECT COUNT(*) FROM `". $wpdb->prefix. "movie_ratings` WHERE movie_id = '". $movie_post_id .  "' AND user_ip ='" . $user_ip . "' " );

	// wp_send_json( $rating_count );

	if( $rating_count > 0){
		wp_send_json( $response );
	}

	 $wpdb->insert(
		$wpdb->prefix. 'movie_ratings',
		array(
			"movie_id" => $movie_post_id,
			"movie_rating" => $movierating,
			"user_ip" => $user_ip
		)
	);	
	$response['status'] = 'pass';
	wp_send_json( $response );
}