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
<div id="formaZaReg">
<div class="container">
<div class="row">
<form method="POST">
<div class="col-lg-12">Ime:<br><input type='text' name='ime' id='ime' required><br></div>
<div class="col-lg-12">Prezime:<br><input type='text' name='prezime' id='prezime' required><br></div>
<div class="col-lg-12">Korisnicko ime:<br><input type='text' name='korisnik' id='korisnik' required><br></div>
<div class="col-lg-12">Lozinka:<br><input type='password' name='lozinka' id='lozinka' required><br></div>
<div class="col-lg-12">Ponovi lozinku:<br><input type='password' name='lozinka2' id='lozinka2' required><br></div>
<div class="col-lg-12"><button type='submit' value='submit' name='submit' submit>submit</button></div>
</form>
</div>
</div>
</div>
<?php
$servername="localhost";
$username="root";
$password="";
$basename="Projekt";
$dbc=mysqli_connect($servername,$username,$password,$basename) or die('Greska pri spajanju'.mysqli_error());
if($dbc){
    if(isset($_POST["submit"])){
    if (
        !empty($_POST['ime']) &&
        !empty($_POST['prezime']) &&
        !empty($_POST['korisnik']) &&
        !empty($_POST['lozinka']) &&
        !empty($_POST['lozinka2'])
    )
    {
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $korisnicko_ime = $_POST['korisnik'];
        $lozinka=$_POST['lozinka'];
        $lozinka2=$_POST['lozinka2'];
        $sql = "SELECT korisnik FROM korisnici WHERE korisnik = ?";
        $stmt = mysqli_stmt_init($dbc);
        if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, 's', $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        }
        if(mysqli_stmt_num_rows($stmt) > 0){
        $msg='Korisničko ime već postoji!';
        }else{
            
        if (strcmp($lozinka,$lozinka2) === 0) {
            $lozinka = $_POST['lozinka'];
            $hashed_lozinka = password_hash($lozinka, CRYPT_BLOWFISH);
            $razina = 0;
            $query="INSERT INTO korisnici (ime, prezime, korisnik, lozinka, razina) values (?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($dbc);
            if (mysqli_stmt_prepare($stmt, $query)) {
                mysqli_stmt_bind_param($stmt, 'ssssi', $ime, $prezime, $korisnicko_ime, $hashed_lozinka, $razina);
                mysqli_stmt_execute($stmt);
            }
        }
        else{
            echo '<script>alert("Lozinke se ne poklapaju")</script>';
        }
    }
}}}
mysqli_close($dbc);
?>


<footer id="podnozje">
    <div class="container">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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