<?php
include '../_settings.php';
$title = 'Delete Film';
include '../_header.php';
include '../core/_deleteFilm.php';
?>
<h1><?php print $action;?></h1>
<?php include '../_nav.php';?>
<div class="wrapper">
<?php print $result;?>
	 
</div><!--end div class column wrapper-->
<?php
include '../_footer.php';
?>