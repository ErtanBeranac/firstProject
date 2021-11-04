<?php
include ("config.php");
 include ('header.php');
 error_reporting(0);
 ?>
<style>
body{
  background: #333 url('./img/4.jpg') no-repeat center center/cover;
}
</style>

<body>
  <?php include ('meni.php'); ?>
<div id="overlay2">
<div class="container">


<div class='contact-form bg-primary p-2'>
<?php

	$username=$_SESSION['username'];
if ($username!="admin") {
	header('location:login.php');
}
echo "<h1>Svi podaci o registrovanim korisnicima.</h1>";
$query="SELECT * FROM `users`";
      $result=$link->query($query);
      echo "<table class='greyGridTable'>";
      echo "<thead>";
      echo "<tr><th>Ime</th><th>Prezime</th><th>Broj indeksa</th><th>Email</th></tr>";
      echo "</thead>";
      echo "<tbody>";
      while($row=$result->fetch_array())
      {
      echo "<tr>";
      echo "<td>".$row['username']."</td>";
      echo "<td>".$row['prezime']."</td>";
      echo "<td>".$row['indeks']."</td>";
      echo "<td>".$row['email']."</td>";

      echo "</tr>";
      }
      echo "</tbody>";
      echo "</table>";
      echo "<br>";
echo "<h1>Odgovori na prvo pitanje.</h1>";
      $query="SELECT * FROM `prva`";
            $result=$link->query($query);
            echo "<table class='greyGridTable'>";
            echo "<thead>";
            echo "<tr><th>Korisnik</th><th>Odgovor</th><th>Vreme</th></tr>";
            echo "</thead>";
            echo "<tbody>";
            while($row=$result->fetch_array())
            {
            echo "<tr>";
            echo "<td>".$row['korisnik']."</td>";
            echo "<td>".$row['odgovor']."</td>";
            echo "<td>".$row['vreme']."</td>";

            echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "<br>";
echo "<h1>Odgovori na drugo pitanje.</h1>";

            $query="SELECT * FROM `druga`";
                  $result=$link->query($query);
                  echo "<table class='greyGridTable'>";
                  echo "<thead>";
                  echo "<tr><th>Korisnik</th><th>Odgovor</th><th>Vreme</th></tr>";
                  echo "</thead>";
                  echo "<tbody>";
                  while($row=$result->fetch_array())
                  {
                  echo "<tr>";
                  echo "<td>".$row['korisnik']."</td>";
                  echo "<td>".$row['odgovor']."</td>";
                  echo "<td>".$row['vreme']."</td>";

                  echo "</tr>";
                  }
                  echo "</tbody>";
                  echo "</table>";
                  echo "<br>";
echo "<h1>Odgovori na treće pitanje.</h1>";
                  $query="SELECT * FROM `treca`";
                        $result=$link->query($query);
                        echo "<table class='greyGridTable'>";
                        echo "<thead>";
                        echo "<tr><th>Korisnik</th><th>Odgovor</th><th>Vreme</th></tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while($row=$result->fetch_array())
                        {
                        echo "<tr>";
                        echo "<td>".$row['korisnik']."</td>";
                        echo "<td>".$row['odgovor']."</td>";
                        echo "<td>".$row['vreme']."</td>";

                        echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        echo "<br>";
echo "<h1>Odgovori na četvrto pitanje.</h1>";
                        $query="SELECT * FROM `cetvrta`";
                              $result=$link->query($query);
                              echo "<table class='greyGridTable'>";
                              echo "<thead>";
                              echo "<tr><th>Korisnik</th><th>Odgovor</th><th>Vreme</th></tr>";
                              echo "</thead>";
                              echo "<tbody>";
                              while($row=$result->fetch_array())
                              {
                              echo "<tr>";
                              echo "<td>".$row['korisnik']."</td>";
                              echo "<td>".$row['odgovor']."</td>";
                              echo "<td>".$row['vreme']."</td>";

                              echo "</tr>";
                              }
                              echo "</tbody>";
                              echo "</table>";
                              echo "<br>";

      echo "<h1>Odgovori na peto pitanje.</h1>";                        
                              $query="SELECT * FROM `peta`";
                                    $result=$link->query($query);
                                    echo "<table class='greyGridTable'>";
                                    echo "<thead>";
                                    echo "<tr><th>Korisnik</th><th>Odgovor</th><th>Vreme</th></tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                    while($row=$result->fetch_array())
                                    {
                                    echo "<tr>";
                                    echo "<td>".$row['korisnik']."</td>";
                                    echo "<td>".$row['odgovor']."</td>";
                                    echo "<td>".$row['vreme']."</td>";

                                    echo "</tr>";
                                    }
                                    echo "</tbody>";
                                    echo "</table>";
                                    echo "<br>";
?>

</div></div>




<?php include ('footer.php'); ?>
