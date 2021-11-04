<?php
ob_start();
include ('header.php');
if ($_SESSION['username'] == null) {
  header('location: login.php');
}
$_SESSION['tema']=$_POST['tema'];
 ?>

<body>


<?php include ('meni.php'); ?>


<div class="container">
<?php

$tema=$_SESSION['tema'];
switch ($tema) {
  case 'pametni_Saobracaj':
      echo "<style>";
            echo"body";
            echo  "{";
            echo "color: #fff;";
            echo "background-image: url('./img/1.jpg');";
            echo "position: absolute;";
            echo  "top:0;";
            echo    "left:0;";
            echo    "right: 0;";
            echo    "bottom: 0;";
            echo    "background-color: rgba(0,0,0,0.7);";
            echo  "}";
      echo " </style>";
  echo "<div class='contact-form bg-primary p-2'>";
  echo "<form method='post' action='insertpitanje.php'>";

     echo "<h3>Pitanje 1</h3>";
     echo "<p>Šta će omogućiti samovozeća vozila</p>";
     echo "<p><input type='checkbox' name='chkbox[]' value='Smanjnje cena i performansikoji su izazvani ljudskim faktorm'><label>Smanjnje cena i performansikoji su izazvani ljudskim faktorm</label><br/></p>";
     echo "<p> <input type='checkbox' name='chkbox[]' value='Povecana efikasnost'><label>Povecana efikasnost </label><br/></p>";
     echo "<p><input type='checkbox' name='chkbox[]' value='Usteda vremena'><label>Usteda vremena</label><br/></p>";

     echo "<br><hr/><br>";
     //pitanje 2
     echo "<h3>Pitanje 2</h3>";
        echo "<p>Budućnost pametnog saobraćaja</p>";
        echo " <input type='radio' name='radio' value='Povezivanje vozila ' />Povezivanje vozila ";
        echo " <input type='radio' name='radio' value='Autonomna vozila' />Autonomna vozila";
        echo " <input type='radio' name='radio' value='Deljenje vozila' />Deljenje vozila<br>";
        echo "<br><hr/><br>";

      // pitanje 3
        echo "<h3>Pitanje 3</h3>";
        echo "<p>Da li je pametni saobraćaj uvod u ogranicavanje slobode (obrazlozi svoj odgovor)</p>";
        echo "<textarea name='tekst1' rows='10' cols='59'></textarea><br>";
        echo "<br><hr/><br>";
      //pitanje 4
      echo "<h3>Pitanje 4</h3>";
      echo "<p>Da li ste za razvoj pametnog saobraćaja </p>";
      echo "<input type='text' name='name'/></p>";
    echo "<br><hr/><br>";

      //pitanje 5
      echo "<h3>Ocenite anketu</h3><br>";
      echo "<select name='odgovor'></p>";
      echo "<option value='1'>1</option>";
      echo "<option value='2'>2</option>";
      echo "<option value='3'>3</option>";
      echo "<option value='4'>4</option>";
      echo "<option value='5'>5</option>";
      echo "</select><br>";
      echo "<br><input type='submit' name='submit' class='btn btn-dark' Value='Unesi odgovor'>";
   echo "</form>";
   echo "</div>";




break;
  case 'pametno_Zdravstvo':

  echo "<style>";
        echo"body";
        echo  "{";
        echo "color: #fff;";
        echo "background-image: url('./img/2.jpg');";
        echo "position: absolute;";
        echo    "top:0;";
        echo    "left:0;";
        echo    "right: 0;";
        echo    "bottom: 0;";
        echo    "background-color: rgba(0,0,0,0.7);";
        echo  "}";
  echo " </style>";


    echo "<div class='contact-form bg-primary p-2'>";
  echo "<form method='post' action='insertpitanje.php'>";

     echo "<h3>Pitanje 1</h3>";
     echo "<p>Sta ce poboljsati pametno zdrastvo</p>";
     echo "<p><input type='checkbox' name='chkbox[]' value='Koriscenje pametnih uredjaja'><label>Koriscenje pametnih uredjaja</label><br/></p>";
     echo "<p> <input type='checkbox' name='chkbox[]' value='Obrazovanje medicinskog kadra o Pametnim uredjajima'><label>Obrazovanje medicinskog kadra o Pametnim uredjajima</label><br/></p>";
     echo "<p><input type='checkbox' name='chkbox[]' value='Ne moze se poboljsati'><label>Ne moze se poboljsati</label><br/></p>";

     echo "<br><hr/><br>";

     echo "<h3>Pitanje 2</h3>";
     echo "<p>Pametno zdrastvo se moze koristiti da se narusi zdravlje?</p>";
        echo " <input type='radio' name='radio' value='Da' />Da";
        echo " <input type='radio' name='radio' value='Ne' />Ne";
        echo " <input type='radio' name='radio' value='Ne znam' />Ne znam<br>";

        echo "<br><hr/><br>";

        echo "<h3>Pitanje 3</h3>";
        echo "<p>Da li je pametno zdrastvo uvod u narusavanje zdravlja iz daljine (obrazlozi svoj odgovor)</p>";
        echo "<textarea name='tekst1' rows='10' cols='59'></textarea><br>";
        echo "<br><hr/><br>";

        echo "<h3>Pitanje 4</h3>";
        echo "<p>Da li ste za razvoj pametnog zdrastva</p>";
        echo "<input type='text' name='name'/></p>";
        echo "<br><hr/><br>";


        echo "<h3>Ocenite anketu</h3><br>";
        echo "<select name='odgovor'></p>";
        echo "<option value='1'>1</option>";
        echo "<option value='2'>2</option>";
        echo "<option value='3'>3</option>";
        echo "<option value='4'>4</option>";
        echo "<option value='5'>5</option>";
        echo "</select><br>";
        echo "<br><input type='submit' name='submit' class='btn btn-dark' Value='Unesi odgovor'>";

   echo "</form>";
   echo "</div>";




break;
  case 'Zastita_Zivotne_Sredine':
  echo "<style>";
        echo"body";
        echo  "{";
        echo "color: #fff;";
        echo "background-image: url('./img/3.jpg');";
        echo "position: absolute;";
        echo    "top:0;";
        echo    "left:0;";
        echo    "right: 0;";
        echo    "bottom: 0;";
        echo    "background-color: rgba(0,0,0,0.7);";
        echo  "}";
  echo " </style>";

    echo "<div class='contact-form bg-primary p-2'>";
  echo "<form method='post' action='insertpitanje.php'>";

     echo "<h3>Pitanje 1</h3>";
     echo "<p>Koji tipovi zagadjenja zivotne sredine postoje</p>";
     echo "<p><input type='checkbox' name='chkbox[]' value='Zagadjenje vazduha'><label>Zagadjenje vazduha</label><br/></p>";
     echo "<p> <input type='checkbox' name='chkbox[]' value='Zagadjenje vode'><label>Zagadjenje vode</label><br/></p>";
     echo "<p><input type='checkbox' name='chkbox[]' value='Zagadjenje zemljista'><label>Zagadjenje zemljista</label><br/></p>";
     echo "<p><input type='checkbox' name='chkbox[]' value='Zagadjenje bukom'><label>Zagadjenje bukom</label><br/></p>";
     echo "<p><input type='checkbox' name='chkbox[]' value='Ne znam'><label>Ne znam</label><br/></p>";
       echo "<br><hr/><br>";

     echo "<h3>Pitanje 2</h3>";
     echo "<p>Da li se upotrebom solarnih panela ugrozava zivotno staniste zivotinja</p>";
    echo " <input type='radio' name='radio' value='Da' />Da";
    echo " <input type='radio' name='radio' value='Ne' />Ne";
    echo " <input type='radio' name='radio' value='Ne znam' />Ne znam<br>";
      echo "<br><hr/><br>";

     echo "<h3>Pitanje 3</h3>";
    echo "<p>Da li je zastitom zivotne sredine ogranicavamo svoje kretanje (obrazlozi svoj odgovor)<</p>";
    echo "<textarea name='tekst1' rows='10' cols='59'></textarea><br>";
      echo "<br><hr/><br>";

    echo "<h3>Pitanje 4</h3>";
    echo "<p>Unesi ime ugrozene zivotinje za koju znas</p>";
    echo "<input type='text' name='name'/></p>";
  echo "<br><hr/><br>";

    echo "<h3>Ocenite anketu</h3><br>";
    echo "<select name='odgovor'></p>";
    echo "<option value='1'>1</option>";
    echo "<option value='2'>2</option>";
    echo "<option value='3'>3</option>";
    echo "<option value='4'>4</option>";
    echo "<option value='5'>5</option>";
    echo "</select><br>";
    echo "<br><input type='submit' name='submit' class='btn btn-dark' Value='Unesi odgovor'>";

  echo "</form>";
  echo "</div>";
break;
}




 ?>

</div>
