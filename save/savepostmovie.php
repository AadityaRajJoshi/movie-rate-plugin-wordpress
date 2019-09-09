<?php 
function aady_save_movie_post_admin( $post_id, $post, $update ){
	if( !$update ){
		return;
	}

	$movie_data = array();
	$movie_data['Director'] = $_POST[ 'aady_inputDirector' ];
	$movie_data['Writer'] = $_POST[ 'aady_inputWriter' ];
	$movie_data['Stars'] = $_POST[ 'aady_inputStars' ];
	$movie_data['Tagline'] = $_POST[ 'aady_inputTagline' ];
	$movie_data['Keyword'] = $_POST[ 'aady_inputKeyword' ];
	$movie_data['Genres'] = $_POST[ 'aady_inputGenres' ];
	$movie_data['Audience'] = $_POST[ 'aady_inputAudience' ];
	$movie_data['Certificate'] = $_POST[ 'aady_inputCertificate' ];

	update_post_meta($post_id, 'movie_data', $movie_data);
	
}