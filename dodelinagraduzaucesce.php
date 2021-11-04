<?php
ob_start();
include ("config.php");
if ($_SESSION['username'] == null) {
  header('location: login.php');
}
error_reporting(0);



include ('header.php');

$username=$_SESSION['username'];
$query="SELECT * FROM `users`";
$result=$link->query($query);
			 while($row=$result->fetch_array())
			 {

			 $_SESSION['email']= $row['email'];



			 }

 ?>
 <style>

 body {
   color: #fff;
   background-image: url('./img/showcase.jpg');
   position: absolute;
   top:0;
   left:0;
   right: 0;
   bottom: 0;
   background-color: rgba(0,0,0,0.7);
 }
 </style>
<body>

<div id="overlay">
<?php include ('meni.php'); ?>
<div class="container">
<?php include 'top_part.php'; ?>

<div class='contact-form bg-primary p-2'>
<?php
$username=$_SESSION['username'];
$tema=$_SESSION['tema'];
switch ($tema) {

  case 'pametni_Saobracaj':

      $nagrada = rand(1,2);
        if ($nagrada===1) {
          $ime = "osvojili ste besplatno jednodnednevno parkiranje u gradu";
          echo"osvojili ste besplatno jednodnednevno parkiranje u gradu";
          $query="INSERT INTO dodeljenenagrade (`naziv`, `username`, `anketa`) VALUES ('$ime', '$username','$tema')";
           mysqli_query($link,$query) or die(mysqli_connect_error());
          $to =  $_SESSION['email'];;
          $subject = "Nagrada";
          $txt = $ime;
          mail($to,$subject,$txt);
     header('Refresh: 4; URL=prikazinagrade.php');
        }else {
          echo "osvojili ste jednodnevna putarina na pristupnom autoputu.";
          $ime = "osvojili ste jednodnevna putarina na pristupnom autoputu.";
          $query="INSERT INTO dodeljenenagrade (`naziv`, `username`, `anketa`) VALUES ('$ime', '$username','$tema')";
          mysqli_query($link,$query) or die(mysqli_connect_error());
          $to =  $_SESSION['email'];;
          $subject = "Nagrada";
          $txt = $ime;
          mail($to,$subject,$txt);
           header('Refresh: 4; URL=prikazinagrade.php');
        }
    break;

  case 'pametno_Zdravstvo':
            $nagrada = rand(1,3);
               if ($nagrada===1) {
                 $ime = "osvojili ste besplatan EKG";
                 echo"osvojili ste besplatan EKG";
                 $query="INSERT INTO dodeljenenagrade (`naziv`, `username`, `anketa`) VALUES ('$ime', '$username','$tema')";
                  mysqli_query($link,$query) or die(mysqli_connect_error());
                   header('Refresh: 4; URL=prikazinagrade.php');
               }else if ($nagrada=='2')  {
                 echo "osvojili ste besplatni merač krvnog pritiska.";
                 $ime = "osvojili ste besplatni merač krvnog pritiska.";
                 $query="INSERT INTO dodeljenenagrade (`naziv`, `username`, `anketa`) VALUES ('$ime', '$username','$tema')";
                 mysqli_query($link,$query) or die(mysqli_connect_error());
                 $to =  $_SESSION['email'];;
                 $subject = "Nagrada";
                 $txt = $ime;
                 mail($to,$subject,$txt);
                   header('Refresh: 4; URL=prikazinagrade.php');
               }
               else {
                 echo "osvojili ste besplatan eho abdomena.";
                 $ime = "osvojili ste besplatan eho abdomena.";
                 $query="INSERT INTO dodeljenenagrade (`naziv`, `username`, `anketa`) VALUES ('$ime', '$username','$tema')";
                 mysqli_query($link,$query) or die(mysqli_connect_error());
                 $to =  $_SESSION['email'];;
                 $subject = "Nagrada";
                 $txt = $ime;
                 mail($to,$subject,$txt);
                  header('Refresh: 4; URL=prikazinagrade.php');
               }
    break;
  case 'Zastita_Zivotne_Sredine':
        $nagrada = rand(1,3);
             if ($nagrada===1) {
               $ime = "osvojili ste besplatan jednodnevni ulaz na bazen";
               echo"osvojili ste besplatan jednodnevni ulaz na bazen";
               $query="INSERT INTO dodeljenenagrade (`naziv`, `username`, `anketa`) VALUES ('$ime', '$username','$tema')";
                mysqli_query($link,$query) or die(mysqli_connect_error());
                $to =  $_SESSION['email'];;
                $subject = "Nagrada";
                $txt = $ime;
                mail($to,$subject,$txt);
                header('Refresh: 4; URL=prikazinagrade.php');
             }else if ($nagrada=='2')  {
               echo "osvojili ste besplatan izlet na obližnje izletište.";
               $ime = "osvojili ste besplatan izlet na obližnje izletište.";
               $query="INSERT INTO dodeljenenagrade (`naziv`, `username`, `anketa`) VALUES ('$ime', '$username','$tema')";
               mysqli_query($link,$query) or die(mysqli_connect_error());
               $to =  $_SESSION['email'];;
               $subject = "Nagrada";
               $txt = $ime;
               mail($to,$subject,$txt);
                header('Refresh: 4; URL=prikazinagrade.php');
             }
             else {
               echo "osvojili ste besplatan jedodnedni ulaz u zoološki vrt.";
               $ime = "osvojili ste besplatan jedodnedni ulaz u zoološki vrt.";
               $query="INSERT INTO dodeljenenagrade (`naziv`, `username`, `anketa`) VALUES ('$ime', '$username','$tema')";
               mysqli_query($link,$query) or die(mysqli_connect_error());
               $to =  $_SESSION['email'];;
               $subject = "Nagrada";
               $txt = $ime;
               mail($to,$subject,$txt);
                header('Refresh: 4; URL=prikazinagrade.php');
             }
     break;
}




 ?>

        </div>
</div>
