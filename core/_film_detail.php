<?php
if(!empty($_GET['id'])) {
	//$id = $_GET['id'];
	$film->get_film($_GET['id']);
}
?>