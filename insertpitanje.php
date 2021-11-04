<?php
ob_start();
include ('config.php');

if (isset($_POST['submit']))
{
 $chkbox = $_POST['chkbox'];


 $chkNew = "";
 $korisnik= $_SESSION['username'];
 $date=date('d.m.y h:i:s');
 foreach($chkbox as $chkNew1)
   {
      $chkNew .= $chkNew1 . ",";
   }


 $query = "INSERT INTO prva (odgovor, korisnik) VALUES ('$chkNew', '$korisnik')";
 mysqli_query($link, $query) or die(mysqli_connect_error());




}


$odgovor = $_POST['radio'];
if($_POST['submit'])
{
	$username=$_SESSION['username'];
 $sql = "INSERT INTO druga (korisnik,odgovor) values('$username','$odgovor')";
 mysqli_query($link, $sql) or die(mysqli_connect_error());

echo "Podaci su uneti";





}



if(isset($_POST['submit']))
{
	$odgovor = $_POST['tekst1'];
	$username=$_SESSION['username'];
	$sql = "INSERT INTO treca (odgovor, korisnik) values('$odgovor','$username')";
	$aa = mysqli_query($link, $sql);
	$affectedRows = mysqli_affected_rows($link);

	if($affectedRows == 1)
	{
		$successMsg = "Uspesno je sacuvan odgovor";

	}
}



if(isset($_REQUEST["submit"]))
{
	$odgovor=$_REQUEST["name"];

	$username=$_SESSION['username'];

  	$sql = "INSERT INTO cetvrta (korisnik, odgovor) VALUES ('$username','$odgovor')";
  	$rs = mysqli_query($link, $sql);
  		$successMsg = "Uspesno je sacuvan odgovor";
  

  }


  if(isset($_REQUEST["submit"]))
  {
  	$odgovor=$_REQUEST["odgovor"];
  	$username=$_SESSION['username'];

    	$sql = "INSERT INTO peta (korisnik, odgovor) VALUES ('$username','$odgovor')";
    	$rs = mysqli_query($link, $sql);
    		$successMsg = "Uspesno je sacuvan odgovor";
        header('location: dodelinagraduzaucesce.php');

    }


?>
