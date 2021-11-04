<?php
session_start();
ob_start();
/*
All code is under the GNU GENERAL PUBLIC LICENSE Version 3, 29 June 2007.
*/

$db_host = "localhost";  // server to connect to.
$db_name = "id10167799_projekat";  // the name of the database.
$db_user = "id10167799_projekat";  // mysql username to access the database with.
$db_pass = "projekat";  // mysql password to access the database with.
$db_table = "users";    // the table that this script will set up and use.

// connect to the mysql server
$link = mysqli_connect($db_host, $db_user, $db_pass) or die ("Could not connect to mysql<br>".mysqli_error());

// select the database
mysqli_select_db($link, $db_name) or die ("Could not select database<br>".mysqli_error());
?>
