<?php 

function aady_movies_info_mb(){
	global $post;
	$movie_data =  get_post_meta( $post->ID, 'movie_data', true );
	// echo("<pre>");
	// var_dump($movie_data);
	// var_dump($post->ID);

	if( !$movie_data ){
		$movie_data = array(
			'Director'    => 'uknown',
			'Writer'      => 'uknown',
			'Stars'       => 'uknown',
			'Tagline'     => 'uknown',
			'Keyword'     => 'uknown',
			'Genres'      => 'uknown',
			'Audience'    => 'uknown',
			'Certificate' => 'uknown'
		);
	}
	// var_dump($movie_data);
	?>

	<div class="form-group">
		<label  > Director </label>
		<input type="text" class="form-control" name="aady_inputDirector" value="<?php echo $movie_data['Director']; ?>">
	</div>

	<div class="form-group">
		<label > Writer </label>
		<input type="text" class="form-control" name="aady_inputWriter" value="<?php echo $movie_data['Writer']; ?>">
	</div>

	<div class="form-group">
		<label > Stars </label>
		<input type="text" class="form-control" name="aady_inputStars" value="<?php echo $movie_data['Stars']; ?>">
	</div>

	<div class="form-group">
		<label> Tagline </label>
		<input type="text" class="form-control" name="aady_inputTagline" value="<?php echo $movie_data['Tagline']; ?>">
	</div>

	<div class="form-group">
		<label > KeyWord </label>
		<input type="text" class="form-control" name="aady_inputKeyword" value="<?php echo $movie_data['Keyword']; ?>">
	</div>

	<div class="form-group">
		<label > Genres </label>
		<select name="aady_inputGenres" id="aady_inputGenres" class="form-control">
			<option value="action"> Action </option>
			<option value="action"  <?php echo $movie_data['Genres'] == "BioGraphy" ? "SELECTED": ""; ?>  > BioGraphy </option>
			<option value="action"  <?php echo $movie_data['Genres'] == "drama" ? "SELECTED": ""; ?> > drama </option>
			<option value="action"  <?php echo $movie_data['Genres'] == "Thriller" ? "SELECTED": ""; ?> > Thriller </option>
		</select>
	</div>

	<div class="form-group">
		<label  > Audience </label>
		<select name="aady_inputGenres" id="aady_inputAudience" class="form-control">
			<option value="kids" > Kids </option>
			<option value="adults"  <?php echo $movie_data['Audience'] == "adults" ? "SELECTED": ""; ?> > Adults </option>
		</select>
	</div>

	<div class="form-group">
		<label  > Certificate </label>
		<select name="aady_inputCertificate" id="aady_inputCertificate" class="form-control">
			<option value="U" > U </option>
			<option value="U/A"<?php echo $movie_data['Certificate'] == "U/A" ? "SELECTED": ""; ?> > U/A </option>
			<option value="A"  <?php echo $movie_data['Certificate'] == "A" ? "SELECTED": ""; ?> > A </option>
			<option value="S"  <?php echo $movie_data['Certificate'] == "S" ? "SELECTED": ""; ?>> S </option>
		</select>
	</div>

	<?php 
}