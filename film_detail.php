<?php
$title = 'Film Details';
include '_header.php';
include '_settings.php';
include PHP_LIB.'/_film_detail.php'; 
?>
<div class="row">
	<div class="large-12 columns detail_page">
	<div class="large-8 columns">
		<h3><?php print $film->Title ?></h3>
		<div class="play_arrow">
			<img src="http://fakeimg.pl/450x250/?text=Play" class="image_detail_page"/>
		</div>
	</div>
	<div class="large-4 columns information_detail_page">
		<p><strong>Running Time:</strong><?php print $film->RunningTime ?></p>
		<p><strong>Release Date:</strong><?php print $film->ReleaseDate ?></p>
		<p><strong>Genre: </strong><?php print $film->GenreID ?></p>
		<p><strong>Director: </strong><?php print $film->DirectorID ?></p>
		<div class="description_film_detail_page"><?php print $film->Description ?></div>
	</div>
		</div>
	</div>
<?php
include '_footer.php';
?>