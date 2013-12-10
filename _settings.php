<?php
#define directory paths
define('SITE_DIR', dirname(__FILE__));
define('PHP_LIB', SITE_DIR.'/core');
define('CLASS_DIR', PHP_LIB.'/classes/');
define('FUNCTION_DIR', PHP_LIB.'/functions/');
define('IMG_DIR', SITE_DIR.'/img/');
//connection to the database
//host, user, pswd, dbname
//mysqli stands for mysql improved
//params = dbhost, user, pswd, db
global $mysqli;
$mysqli = new mysqli('localhost','movieWatcher','d6Zvjm8z5ub38Zdr','silverscreen');

//check the connection
if(mysqli_connect_errno()){
	printf("Connect Failed: %s\n", mysqli_connect_error());
	exit();
}

include CLASS_DIR. 'Film.php';
$film = new Film;

?>