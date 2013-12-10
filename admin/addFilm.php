<?php
include '../_settings.php';
$title = 'Add Film';
include '../_header.php';
include '../core/_addFilm.php';
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
			<input type="text" name="ReleaseDate" value="<?php print $film->ReleaseDate; ?>" />
		</div>
		<div class="form-item">
			<label>Running Time</label>
			<input type="text" name="RunningTime" value="<?php print $film->RunningTime; ?>"/>
		</div>
		<div class="form-item">
			<label>Genre</label>
			<select name="GenreID">
				<?php
					foreach($film->genres as $key => $value) {
						if($film->GenreID == $key) {
							echo '<option value="'. $key .'" selected>'. $value .'</option>';
						} else {
							echo '<option value="'. $key .'">'. $value .'</option>';
						}
					}
				?>
			</select>
		</div>
		<div class="form-item">
			<label>Director</label>
			<select name="DirectorID">
				<?php
					foreach($film->directors as $key => $value) {
						if($film->DirectorID == $key) {
							echo '<option value="'. $key .'" selected>'. $value .'</option>';
						} else {
							echo '<option value="'. $key .'">'. $value .'</option>';
						}
					}
				?>
			</select>
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