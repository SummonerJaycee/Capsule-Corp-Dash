<?php 
	//This is the access to the phpMyAdmin Database
	$mysqlserver="localhost";
	$mysqlusername="yarbroughj1423";
	$mysqlpassword="1Password!";

	$mysqli=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());
	$dbname ="yarbroughj1423";

	mysql_select_db($dbname, $mysqli) or die ("Error selecting specified database on mysql server: ".mysql_error());

	$mysqli = new mysqli($mysqlserver, $mysqlusername, $mysqlpassword, $dbname); 
?>
