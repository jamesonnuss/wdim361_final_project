<?php
//handle form submission
$result = '';
//user submits form via post
if(!empty($_POST))
{
	$errors = array();
	$posted = $film->add_film($errors);
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
	//query the database
	//populate the object with properties like name, instock, etc...
	$film->get_film($_GET['FilmID']);
}
$action = 'Add Film';
$film->get_options();
if(!empty($film->Title)){
	$action = 'Update Film';
}