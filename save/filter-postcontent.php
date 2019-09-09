<?php 
function aady_filter_movie_post($content){
	if( !is_singular( 'movie' ) ){
		return $content; 
	}

	global $post; 
	$movie_data = get_post_meta( $post->ID, 'movie_data', true  );
	$movie_html = file_get_contents('movie-placeholder.php', true);

	$movie_html = str_replace("DIRECTOR_PLACEHOLDER", $movie_data['Director'], $movie_html); 
	$movie_html = str_replace("Writer_PLACEHOLDER", $movie_data['Writer'], $movie_html); 
	$movie_html = str_replace("Stars_PLACEHOLDER", $movie_data['Stars'], $movie_html); 
	$movie_html = str_replace("Tagline_PLACEHOLDER", $movie_data['Tagline'], $movie_html); 
	$movie_html = str_replace("KeyWords_PLACEHOLDER", $movie_data['Keyword'], $movie_html); 
	$movie_html = str_replace("Genres_PLACEHOLDER", $movie_data['Genres'], $movie_html); 
	$movie_html = str_replace("Audience_PLACEHOLDER", $movie_data['Audience'], $movie_html); 
	$movie_html = str_replace("Certificate_PLACEHOLDER", $movie_data['Certificate'], $movie_html);

	$movie_html = str_replace("RATE_I18N", __("Rate", "aady-plugin"), $movie_html);
	$movie_html = str_replace("MOVIE_ID", $post->ID , $movie_html);
 
	return $movie_html.$content;
}