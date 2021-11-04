<?php
ob_start();


include ("config.php");
$_SESSION['tema']= $_POST['tema'];

if(isset($_POST["submit"]) )
{


  switch ($_SESSION['tema'] ) {
    case 'pametni_Saobracaj':

   include 'pitanje1.php';


  break;
    case 'pametno_Zdravstvo':
    include 'pitanje1.php';
  break;
    case 'Zastita_Zivotne_Sredine':
      include 'pitanje1.php';
  break;


}
}else {
  die('niste uneli niakve vrednosti');
}
