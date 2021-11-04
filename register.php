<?php


include ("config.php");


$check = "select id from $db_table where username = '" . $_POST['username'] . "';";
$qry = mysqli_query($link, $check) or die ("Nema podudaranja ".mysqli_error());
$num_rows = mysqli_num_rows( $qry);

if ($num_rows != 0) {
  echo "Korisnicko ime $username je zauzeto.<br>";
  echo "<a href=register.html>Try again</a>";
  exit;
} else {

  $query="insert into $db_table values ('0', '" . $_POST['username'] . "', '" . $_POST['prezime'] . "','" . $_POST['indeks'] . "','" .$_POST['password'] . "', '" .  $_POST['email'] . "')";
  $insert = mysqli_query($link, $query) or die("Ne moze da se sacuva<br>" . mysqli_error($link));
    header('location: login.html');
  echo "Nalog kreiran!<br>";
  echo " <a href='login.html'>Uloguj se</a>";
  mysqli_close($link);
}
?>
