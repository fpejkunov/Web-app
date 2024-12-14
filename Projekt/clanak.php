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
    <link rel="stylesheet" type="text/css" href="clanakStil.css" />
</head>
<body>



<?php
$servername="localhost";
$username="root";
$password="";
$basename="projekt";
$dbc=mysqli_connect($servername,$username,$password,$basename) or die('Greska pri spajanju'.mysqli_error());
if($dbc){
    $id = $_GET['id'];
    $query = "SELECT * FROM clanak WHERE id = ?;";
    $stmt = mysqli_stmt_init($dbc);
   
    if (!mysqli_stmt_prepare($stmt, $query)) {
        echo "failed";
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        $naslov=strtoupper($row['kategorija']);
        $obavijest=$row['obavijest'];
        if($obavijest==1){
            echo"<script type='text/javascript'>
            alert('Obavijest je postavljenja');
            </script>";
        }
    }
}
?>


<header id="Naslov">
  <div class="container">
  <div class="row">
          <div class="col-lg-12"><ul><li><?php echo "$naslov"?></li></ul>
          </div>
  </div>
</header>
<hr>

<section id="content">
<div class="container">
      <div class="row">
          <div class="col-lg-12"><h1><b><?php echo "${row['naslov']}"?></b></h1></div>
      </div>
      <div class="row">
          <div class="col-lg-12"><h6><?php echo "${row['sazetak']}"?></h6></div>
      </div>
      <div class="row">
          <div class="col-lg-12"><img src=<?php echo "slike/${row['slika']}"?> alt=""></div>
      </div>
      <div class="row">
          <div class="col-lg-12"><p><?php echo "${row['tekst']}"?></p></div>
      </div>
      
  </div>
</section>
<br><br><br>

<footer id="podnozje">
<div class="container">
  <div class="row">
          <div class="col-lg-12">TITANIA COMPANIA EDITORIAL, S.L 2019 Espana. Todos los derechos reservados
          </div>
  </div>
</footer>
</body>
</html>