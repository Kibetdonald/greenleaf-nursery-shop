<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("greenleaf",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'localhost';
$databaseName = 'greenleaf';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
