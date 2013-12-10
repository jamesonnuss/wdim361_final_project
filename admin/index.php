<?php
$title = 'Manage Films';
include '../_header.php';
include '../_settings.php';
?>
<h1>Manage Films</h1>
<?php include '../_nav.php';?>
<div class="wrapper">

<table>
	<tr>
		<th>Image</th>
		<th>Title</th>
		<th>Running Time</th>
		<th>Release Date</th>
		<th>Description</th>
		<th>Genre</th>
		<th>Director</th>
		<th>Manage</th>
	</tr>

<?php
$result = $mysqli->query('SELECT concat(director.FirstName," ", director.LastName) as directorName, genre.Name AS Genre, film.FilmID, film.Title, film.Description, film.RunningTime, film.ReleaseDate, film.Image FROM genre LEFT JOIN film ON film.GenreID = genre.GenreID LEFT JOIN director on film.DirectorID = director.DirectorID WHERE film.Title IS NOT NULL ORDER BY genre.Name ASC');
while ($row = $result->fetch_array())
{
	print '<tr>';
	print '<td><a href="film_detail.php?id='.$row['FilmID'].'"><img src="../img/'.$row['Image'].'" width="240"/></a></td>';
	print '<td>'.$row['Title'].'</td>';
	print '<td>'.$row['RunningTime'].'</td>';
	print '<td>'.date($row['ReleaseDate']).'</td>';
	print '<td>'.$row['Description'].'</td>';
	print '<td>'.$row['Genre'].'</td>';
	print '<td>'.$row['directorName'].'</td>';
	print '<td><a href="addFilm.php?FilmID='.$row['FilmID'].'">Edit</a> | <a href="deleteFilm.php?FilmID='.$row['FilmID'].'">Delete</a></td>';
	print '</tr>';
}
?>
</table>
</div><!--end div class column wrapper-->
<?php
include '../_footer.php';
?>