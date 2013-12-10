<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php if(!empty($title)){ print $title; }?></title>
  <link rel="stylesheet" href="/wdim361_final_projectCopy/css/app.css">
  <link href="/wdim361_final_projectCopy/css/jquery.sidr.dark.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/wdim361_final_projectCopy/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="/wdim361_final_projectCopy/js/jquery.sidr.min.js"></script>
  <script src="/wdim361_final_projectCopy/js/vendor/custom.modernizr.js"></script>

<?php if(!empty($header_extras)){ 
		print $header_extras; 
	  }
?>
</head>
<body>
<header>
	<div class="row">
		<div class="large-12 columns">		
			<div class="large-1 columns"><a id="demo" href="#sidr"><span class="icon-menu"></a>
			</div>
			<div class="large-11 columns">
			<a href="/wdim361_final_projectCopy/index.php"><h1 class="logo"><span class="silver">Silver</span><span class="screen">Screen</span</h1>
			</a>
			</div>
		</div>
	</div>
</header>
	<div id="sidr"> 
		<ul>
			<li class="active"><a href="index.php">Film Library</a></li>
			<li><a href="#">Recently Watched</a></li>
			<li><a href="#">Browse Genres</a></li>
			<li><a href="#">Release Date</a></li>
			<li><a href="#">Search</a></li>
			<li><a href="admin/index.php">Admin</a></li>
			<li><a href="#">Help</a></li>
			<li><a href="#">Sign Out</a></li>
		</ul>
	</div>