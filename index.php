<?php
$title = 'SilverScreen';
include '_header.php';
include '_settings.php';
?>
<div class="row headerTopPage">
	<div class="large-8 columns">
		<h3 class="pageHeader">All Films</h3>
	</div>
  <div class="large-4 columns">
<form>
    <select name="sort" onchange='this.form.submit()'>
        <option value = "0" selected="selected">Sort By....</option>
        <option value = "1">Alphabetically</option>
        <option value = "2">Release Date</option>
    </select>
</form>
  </div>
</div><!--End Div Class headerTopPage-->
<div class="row">
<!-- <div class="large-12 columns"> -->
<ul class="small-block-grid-3 medium-block-grid-4 large-block-grid-5 all_films">
  <?php
    $sort_variable = 0;
    if(!empty($_GET['sort'])) {
        $sort_variable = $_GET['sort'];
    }

    if ($sort_variable == 1) {
        $result = $mysqli->query('SELECT * FROM film ORDER BY Title ASC');
        while ($row = $result->fetch_array())
        {
          print '<li><a href="film_detail.php?id='.$row['FilmID'].'"><img src="img/'.$row['Image'].'" alt="" />'.'<div class="title">'.$row['Title'].'</div></a></li>';
        }
    } elseif ($sort_variable == 2) {
        $result = $mysqli->query('SELECT * FROM film ORDER BY ReleaseDate DESC');
        while ($row = $result->fetch_array())
        {
            print '<li><a href="film_detail.php?id='.$row['FilmID'].'"><img src="img/'.$row['Image'].'" alt="" />'.'<div class="title">'.$row['Title'].'</div></a></li>';
        }
    } else {
        $result = $mysqli->query('SELECT * FROM film');
        while ($row = $result->fetch_array())
        {
            print '<li><a href="film_detail.php?id='.$row['FilmID'].'"><img src="img/'.$row['Image'].'" alt="" />'.'<div class="title">'.$row['Title'].'</div></a></li>';
        }
    }
  ?>
</ul>
	<!-- </div> --><!--End Div Class Large-12 Columns-->
</div><!--End Div Class Row-->
<?php
include '_footer.php';
?>