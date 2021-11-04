<?php
ob_start();
include("config.php");
error_reporting(0);

$match = "select id from $db_table where username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "';";

$qry = mysqli_query($link, $match) or die ("Podaci se ne podudaraju<br>" . mysqli_error());
$num_rows = mysqli_num_rows($qry);
$username= $_POST['username'];
$_SESSION['username']=$_POST['username'];


if ($num_rows <= 0) {
  echo "Ne postoji korisnicko ime $username sa unetom sifrom.<br>";
  echo "<a href=login.html>Try again</a>";

} else {
     header('location: index.php');
    echo $_POST['username'];
  echo "Ulogovani ste!<br>";

}
?>
