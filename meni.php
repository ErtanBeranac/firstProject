<nav id="navbar">
  <h1 class="logo">
    <span class="text-primary">
      <i class="fas fa-book-open"></i> Studentska</span>Anketa
  </h1>
  <ul>
    <?php

    if ($_SESSION['username']=='admin'){
      echo "<li><a href='index.php'>Ankete</a></li>";
      echo "<li class='active'><a href='prikazinagrade.php'>Dodeljene Nagrade</a></li>";
      echo "<li><a href='admin.php'><span class='glyphicon glyphicon-log-out'></span> Pristup za administratora</a></li>";
      echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";


    }else{
      echo "<li><a href='index.php'>Ankete</a></li>";
      echo "<li class='active'><a href='prikazinagrade.php'>Dodeljene Nagrade</a></li>";
            echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";

}
     ?>

  </ul>
</nav>
