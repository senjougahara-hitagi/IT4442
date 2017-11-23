<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "sp_20171";

	$con = new mysqli($dbhost, $dbuser, $dbpass, $db);
	if(!$con){
		die("Couldn't connect");
	}
?>
