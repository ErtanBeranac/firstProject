<?php
ob_start();
include ("config.php");
if ($_SESSION['username'] == null) {
  header('location: login.html');
}
 include ('header.php') ?>
 <style>
 body {
   background: #333 url('./img/people.jpg') no-repeat center center/cover;
   height: 100vh;
   color: #fff;
 }
#contact{
margin-top: 10%;
}
.map{
  text-align: center;
  justify-content: center;
}
#contact .contact-form input, #contact .contact-form textarea {
  width:14%;
}

 </style>
<body>
<div id="overlay">

<?php include ('meni.php'); ?>

<section id="contact">
<div class="map">
<?php include 'top_part.php'; ?>
</div>
<div class="contact-form bg-primary p-2">
<?php include 'insert_anketa.php'; ?>
</div>
</section>



</div>
<?php include ('footer.php'); ?>
