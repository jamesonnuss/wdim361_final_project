<?php
include '../_settings.php';
$title = 'Edit Film';
include '../_header.php';
include '../core/_editFilm.php';
?>
<h1><?php print $action;?></h1>
<?php include '../_nav.php';?>
<div class="wrapper">
<?php print $result;?>
	<form action ="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="FilmID" value="<?php print $film->FilmID; ?>" />
	<input type="hidden" name="old_img" value="<?php print $film->Image; ?>" />
		<div class="form-item">
			<label>Title</label>
			<input type="text" name="Title" value="<?php print $film->Title; ?>" />
		</div> 
		<div class="form-item">
			<label>Release Date</label>
			<input type="text" name="ReleaseDate"  value="<?php print $film->ReleaseDate; ?>" />
		</div>
		<div class="form-item">
			<label>Running Time</label>
			<input type="text" name="RunningTime"  value="<?php print $film->RunningTime; ?>"/>
		</div>
		<div class="form-item">
			<label>Genre</label>
			<input type="text" name="GenreID"  value="<?php print $film->GenreID; ?>"/>
		</div>
		<div class="form-item">
			<label>Director</label>
		<!-- 	<select name="genre">
			    <option value = "0" selected="selected">Browse By Genre....</option>
			    <option value = "1">Action</option>
			    <option value = "2">Comedy</option>
			    <option value = "3">Family</option>
			    <option value = "4">History</option>
			    <option value = "5">Mystery</option>
			    <option value = "6">Sci-Fi</option>
			    <option value = "7">War</option>
			    <option value = "8">Adventure</option>
			    <option value = "9">Crime</option>
			    <option value = "10">Fantasy</option>
			    <option value = "11">Horror</option>
			    <option value = "12">News</option>
			    <option value = "13">Sport</option>
			    <option value = "14">Western</option>
			    <option value = "15">Animation</option>
			    <option value = "16">Documentary</option>
			    <option value = "17">Film-Noir</option>
			    <option value = "18">Music</option>
			    <option value = "19">Television</option>
			    <option value = "20">Biography</option>
			    <option value = "21">Drama</option>
			    <option value = "22">Musical</option>
			    <option value = "23">Romance</option>
			    <option value = "24">Thriller</option>
			    <option value = "25">Crime | Drama</option>
			    <option value = "26">Action | Adventure | Sci-Fi</option>
			    <option value = "27">Action | Adventure | Fantasy</option>
			    <option value = "28">Action | Drama | Romance</option>
			    <option value = "29">Drama | Biography</option>
			    <option value = "30">Crime | Thriller</option>
			    <option value = "31">Animation | Musical</option>
			    <option value = "32">Family | Animation</option>
			    <option value = "33">Action | Adventure | Crime</option>
			    <option value = "34">Action | Thriller</option>
			    <option value = "35">Action | Sci-Fi</option>
			</select> -->
			<input type="text" name="DirectorID"  value="<?php print $film->DirectorID; ?>"/>
		</div>
			<label>Description</label>
			<textarea name="Description" cols="20" rows="6"><?php print $film->Description; ?></textarea>
		<div class="form-item">
			<?php if (!empty($film->Image)){ ?>
				<img src="../img/<?php print $film->Image; ?>" width="80" />
			<?php } ?>
			<label>Upload Images</label>
			<input type="file" name="image" />
		<div class="form-item">
			<input type="submit" value="<?php print $action; ?>"/>
		</div>
	</form>
</div><!--end div class column wrapper-->
<?php
include '../_footer.php';
?>