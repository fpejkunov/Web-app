<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="El Confidencial "/> 
    <meta name="author" content="Filip Pejkunovic"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>El confidencial</title>  
    <link rel="stylesheet" type="text/css" href="indexStil.css" />
</head>
<body>
  <header id="Naslov">
  <div class="container">
      <div class="row">
          <div class="col-lg-12"><h1>El Confidencial</h1></div>
          <div class="col-lg-12"><h2>EL DIARIO DE LOS LECTORES INFLUYENTES</h2></div>
      </div>
  </div>
</header>

<nav id="navigacija">
<div class="container">
    
      <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3"><a href="#"><li>HOME</li></a></div>
          <div class="col-lg-3 col-md-3 col-sm-3"><a href="kategorija.php?kat=europa"><li>EUROPA</li></a></div>
          <div class="col-lg-3 col-md-3 col-sm-3"><a href="kategorija.php?kat=teknautas"><li>TEKNAUTAS</li></a></div>
          <div class="col-lg-3 col-md-3 col-sm-3"><a href="administracija.php"><li>ADMINISTRACIJA</li></a></div>
      </div>
    
  </div>
</nav>
<hr>

<section id="content">
<div class="container">
          <div class="row">
          <div class="col-lg-12"><ul><li><a href="kategorija.php?kat=europa">EUROPA</a></li></ul>
          </div>
          <br>
         
         
         <?php
         $servername="localhost";
         $username="root";
         $password="";
         $basename="projekt";
         $dbc=mysqli_connect($servername,$username,$password,$basename) or die('Greska pri spajanju'.mysqli_error());
         if($dbc){
          $kategorija = "europa";
          $query = "SELECT * FROM clanak WHERE kategorija = ?;";
          $stmt = mysqli_stmt_init($dbc);
          if (!mysqli_stmt_prepare($stmt, $query)) {
            echo "failed";
          } else {
            mysqli_stmt_bind_param($stmt, "s", $kategorija);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $i=0;
            $j=0;
            while (($row = mysqli_fetch_assoc($result))&& $i<6) {
              if($i%3==0){
                echo "<div class='row'>";
              }
              echo"
              <div class='col-lg-4'>
              <a href='clanak.php?id=${row['id']}'>
              <img src='slike/${row['slika']}' alt='${row['slika']}'>
                <p>${row['naslov']}</p>
              </a>
              </div>";
              if($i%3==2){
                echo "</div>";
              }
              $i++;
         }
        }
      }
      mysqli_close($dbc);
         ?>


          <hr>


          <div class="row">
            <div class="teknautas">
          <div class="col-lg-12"><ul><li><a href="kategorija.php?kat=teknautas">TEKNAUTAS</a></li></ul></div></div>
          <br>
    
          <?php
         $servername="localhost";
         $username="root";
         $password="";
         $basename="projekt";
         $dbc=mysqli_connect($servername,$username,$password,$basename) or die('Greska pri spajanju'.mysqli_error());
         if($dbc){
          $kategorija = "teknautas";
          $query = "SELECT * FROM clanak WHERE kategorija = ?;";
          $stmt = mysqli_stmt_init($dbc);
          if (!mysqli_stmt_prepare($stmt, $query)) {
            echo "failed";
          } else {
            mysqli_stmt_bind_param($stmt, "s", $kategorija);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $i=0;
            $j=0;
            while (($row = mysqli_fetch_assoc($result))&& $i<6) {
              if($i%3==0){
                echo "<div class='row'>";
              }
              echo"
              <div class='col-lg-4'>
              <a href='clanak.php?id=${row['id']}'>
              <img src='slike/${row['slika']}' alt='${row['slika']}'>
                <p>${row['naslov']}</p>
              </a>
              </div>";
              if($i%3==2){
                echo "</div>";
              }
              $i++;
         }
        }
      }
      mysqli_close($dbc);
         ?>


          <hr>
          </div>
  </div>
</section>
<br><br><br>

    <footer id="podnozje">
    <div class="container">
    <ul>
      <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2"><a href="#"><li>TITANIA COMPANIA EDITORIAL, S.L 2019 Espana. Todos los derechos reservados</li></a></div>
          <div class="col-lg-2 col-md-2 col-sm-2"><a href="#"><li>Condiciones</li></a></div>
          <div class="col-lg-2 col-md-2 col-sm-2"><a href="#"><li>Politica de Privacidad</li></a></div>
          <div class="col-lg-2 col-md-2 col-sm-2"><a href="#"><li>Politica de Cookies</li></a></div>
          <div class="col-lg-2 col-md-2 col-sm-2"><a href="#"><li>Transparencia</li></a></div>
          <div class="col-lg-2 col-md-2 col-sm-2"><a href="#"><li>Auditado por ComScore</li></a></div>


      </div>
    </ul>
  </div>
    </footer>
</body>
</html>