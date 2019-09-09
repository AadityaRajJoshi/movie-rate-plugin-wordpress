<?php 
function aady_generate_metabox(){
	add_meta_box(
		'aady_movies_info_mb',
		__( 'Movie Information', 'aady-plugin' ),
		'aady_movies_info_mb', 
		'movie',
		'normal', 
		'high'
	);
}
