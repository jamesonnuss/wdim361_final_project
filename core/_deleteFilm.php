<?php
//handle form submission
$result = '';
//user submits form via post
if(!empty($_POST))
{
	$errors = array();
	$posted = $film->delete_film($errors);
	if($posted){
		$result = '<div class="message">Film was successfully saved.</div>';
	}else{
		foreach($errors as $key => $val){
			$result .= '<div class="error">'.$val.'</div>';
		}
	}
}
//edit linked was clicked via get
if(!empty($_GET['FilmID'])){
	$mysqli->query('DELETE FROM film WHERE FilmID = '.$_GET['FilmID']);
	$result = 'Test';
}
$action = 'Delete Film';
if(!empty($film->Title)){
	$action = 'Delete Film';
}