<?php 
define("DB_server","localhost");
define("DB_username","root");
define("DB_password","");
define("DB_name","my_test");

$link = @mysqli_connect(DB_server,DB_username,DB_password,DB_name);

if ($link === false) {
	die("can't connect " . mysqli_connect_error());
}

?>