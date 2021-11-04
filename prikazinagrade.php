<?php
ob_start();
error_reporting(0);
include ("config.php");
include ('header.php');
if ($_SESSION['username'] == null) {
  header('location: login.php');}
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

<br>
<div class="m-heading">Dodeljene nagrade za sve korisnike</div>
<br>
<div class='contact-form bg-primary p-2'>
<?php

$tema=$_SESSION['tema'];

$query="SELECT * FROM `dodeljenenagrade`";
			 $result=$link->query($query);

			 echo "<table class='greyGridTable'>";
       echo "<thead>";
			 echo "<tr><th>Nagrada </th><th>Korisnik</th><th>Ime ankete</th><th>Vreme</th></tr>";
       echo "</thead>";
       echo "<tbody>";
			 while($row=$result->fetch_array())
			 {
			 echo "<tr>";
			 echo "<td>".$row['naziv']."</td>";
			 echo "<td>".$row['username']."</td>";
			 echo "<td>".$row['anketa']."</td>";
			 echo "<td>".$row['vreme']."</td>";

			 echo "</tr>";
			 }
       echo "</tbody>";
			 echo "</table>";
			 ?>




</div>

</div>
</div>
