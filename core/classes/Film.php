<?php
class Film
{
	public $FilmID = ''; 
	public $Title = ''; 
	public $Description = ''; 
	public $Image = ''; 
	public $RunningTime = ''; 
	public $ReleaseDate = ''; 
	public $GenreID = ''; 
	public $DirectorID = ''; 
	
	//given a valid id, Query the DB & populate the cupcake object
	public function get_film($id){
	    global $mysqli;
	    $result = $mysqli->query("SELECT * FROM film INNER JOIN genre ON film.GenreID = genre.GenreID INNER JOIN director ON film.DirectorID = director.DirectorID WHERE FilmID = $id");
	    while ($row = $result->fetch_array())
	    {
	    	$this->FilmID = $row['FilmID'];
	    	$this->Title = $row['Title'];
	    	$this->Description = $row['Description'];
	    	$this->Image = $row['Image'];
	    	$this->RunningTime = $row['RunningTime'];
	    	$this->ReleaseDate = $row['ReleaseDate'];
	    	$this->GenreID = $row['Name'];
	    	$this->DirectorID = $row['FirstName'] .' '. $row['LastName'];
	    }
	}
	
	//expects a form $_POST
	public function add_film(&$errors)
	{
		global $mysqli; 
		if(empty($_POST['Title']))
			$errors['Title'] = 'Please enter a film title.';
		if(empty($_POST['Description']))
			$errors['Description'] = 'Please enter a description.';
		if(empty($_POST['RunningTime']))
			$errors['RunningTime'] = 'Please enter a Running Time.';
		if(empty($_POST['ReleaseDate']))
			$errors['ReleaseDate'] = 'Please enter a Release Date.';
		if(empty($_POST['GenreID']))
			$errors['GenreID'] = 'Please enter a GenreID.';
		if(empty($_POST['DirectorID']))
			$errors['DirectorID'] = 'Please enter a DirectorID.';	
		$img_array = array();
		if(!empty($_FILES['image']['name'])) { 
			$img_array = $_FILES['image'];
			if($img_array['type'] != 'image/jpeg' && $img_array['type'] != 'image/png') { 
				$errors['image'] = 'Please upload a jpg or png file'; 
			}			
		}
		
		if(empty($errors))
		{	
			//ready to process..
			//add it to the db
			//ONE way to do it:
			$Title = $_POST['Title']; 
			$RunningTime = $_POST['RunningTime']; 
			$ReleaseDate = $_POST['ReleaseDate']; 
			$GenreID = $_POST['GenreID'];
			$DirectorID = $_POST['DirectorID'];
			$descrip = $_POST['Description']; 			
			if(!empty($_POST['old_img'])) { 
				$img = $_POST['old_img']; 
			} else { 
				$img = ''; 
			}
			
			if(!empty($img_array['name'])) { 
				if (is_uploaded_file($img_array['tmp_name'])) {
					//server uploads the file to the temp location
					//now move to the correct location
					move_uploaded_file($img_array['tmp_name'], IMG_DIR.$img_array['name']);
					
					//get ready to store image file name to DB
					$img = $img_array['name']; 
				}
			}
			if(empty($_POST['FilmID'])) { 
				$SQL = "INSERT INTO film VALUES(NULL,'$Title','$descrip','$img','$RunningTime','$ReleaseDate',$DirectorID,$GenreID)";
			} else {
				$id = $_POST['FilmID']; 
				$SQL = "UPDATE film SET 
					Title = '$Title',
					RunningTime = '$RunningTime', 
					ReleaseDate = '$ReleaseDate', 
					Description = '$descrip',
					GenreID = $GenreID,
					DirectorID = $DirectorID,
					Image = '$img'
					WHERE FilmID = $id";
			}
			$result = $mysqli->query($SQL);
			return $result; 
		} else { 
			return false; 
		}
	}
}
