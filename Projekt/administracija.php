<?php
    session_start();
?>

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

<div class="container">
  <div class="row">
<div class="col-lg-12"><form method="POST">
Korisnicko ime:<br><input type='text' name='korisnik' id='korisnik' required><br>
Lozinka:<br><input type='password' name='lozinka' id='lozinka' required><br>
<button type='submit' value='submit' name='submit' submit>Submit</button>
</form>
<br>
<a href="registracija.php"><button>Registriraj se</button></a>
</div>
</div>
</div>
<?php
$servername="localhost";
$username="root";
$password="";
$basename="Projekt";
$dbc=mysqli_connect($servername,$username,$password,$basename) or die('Greska pri spajanju'.mysqli_error());
            if (isset($_POST['korisnik'], $_POST['lozinka'])) {
              $admin=false;
              $prijava=false;
                $korisnicko_ime = $_POST['korisnik'];
                $lozinka = $_POST['lozinka'];
                $query = "SELECT * FROM korisnici WHERE korisnik = ?;";
                $stmt = mysqli_stmt_init($dbc);
                if (!mysqli_stmt_prepare($stmt, $query)) {
                    echo "failed";
                } else {
                  mysqli_stmt_bind_param($stmt, "s", $korisnicko_ime);
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  $row = mysqli_fetch_assoc($result);
                  if (isset($row['lozinka'])) {
                      if (password_verify($lozinka, $row['lozinka'])) {
                          if ($row['razina'] === 1) {
                              $prijava = TRUE;
                              $admin = TRUE;
                              $_SESSION['$username'] = $row['korisnik'];
                              $_SESSION['$level'] = $row['razina'];
                              $_SESSION['$lozinka'] = $lozinka;
                          } elseif ($row['razina'] === 0) {
                              $prijava = TRUE;
                              $admin = FALSE;
                              $_SESSION['$username'] = $row['korisnik'];
                              $_SESSION['$level'] = $row['razina'];
                              $_SESSION['$lozinka'] = $lozinka;
                          }
                      }}}
                if(isset($_POST["submit"])){
                if ($admin == TRUE && $prijava=true) {
                    echo "
                  <div id='admin'>
                  <div class='container'>
                  <div class='row'>
                  <form method='POST'>
                  Unesite id od članka koji želite izbrisati
                  <br><input type='number' name='id' id='id' required><br>
                  <button type='submit' value='Brisanje' name='gumb' >Brisanje</button>
              </form><form enctype='multipart/form-data' method='post'>
              <div class='form-item'>
                  Unesite id od članka koji želite izmjeniti
                  <br><input type='number' name='id' id='id' required>
              </div>
              <label for='naslov'>Unesite naslov clanka</label><br>
              <input type='text' name='naslov'><br>
              <label for='sazetak'>Kratki sazetak teksta</label><br>
              <textarea name='sazetak' id='sazetak' cols='30' rows='10'></textarea><br>
              <label for='tekst'>Glavni tekst</label><br>
             <textarea name='tekst' id='tekst' cols='30' rows='10'></textarea><br>
              <label for='kategorija'>Kategorija</label><br>
              <select name='kategorija' id='kategorija'>
              <option value='europa'>Europa</option>
              <option value='teknautas'>Teknautas</option>
              </select><br>
              <label for='slika'>Slika</label><br>
              <input type='file' id='slika' name='slika'><br>
              <label for='obavijest'>Obavijest</label><br>
              <input type='checkbox' name='obavijest'><br>
              <div class='form-item'>
                  <button type='reset' value='Poništi' name='gumb'>Brisanje</button>
                  <button type='submit' value='Izmjena' name='gumb'>Izmjena</button>
              </div>
          </form>
          <br>
          <a href='unos.php'><button>Unos novog clanka</button></a>
                  </div>
                  </div>
                        ";
                    
                } elseif($prijava==true && $admin !=true) {
                    echo "
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-12'>
                                    <p>Prijavljeni ste kao korisnik ${_SESSION['$username']} i nemate pravo pristupa admistracijskoj stranici.</p>
                                </div>
                            </div>
                        </div>
                    ";
                } 
                else{
                 echo" <div class='container'>
                            <div class='row'>
                                <div class='col-lg-12'>
                                    <p>Potrebna je registracija.</p>
                                </div>
                            </div>
                        </div>
                      ";
                }
            }
          }
            mysqli_close($dbc);
        ?>




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

<?php
$servername="localhost";
$username="root";
$password="";
$basename="Projekt";
$dbc=mysqli_connect($servername,$username,$password,$basename) or die('Greska pri spajanju'.mysqli_error());
 if (isset($_POST['gumb'])) {
  if (strcmp($_POST['gumb'], 'Brisanje') === 0) {
      $id = $_POST['id'];
      $query = 'DELETE FROM clanak WHERE id = ?;';
      $stmt = mysqli_stmt_init($dbc);
      if (!mysqli_stmt_prepare($stmt, $query)) {
          echo "failed";
      } else {
          mysqli_stmt_bind_param($stmt, "i", $id);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
      }
  } elseif (strcmp($_POST['gumb'], 'Izmjena') === 0) {
      if (!empty($_FILES["slika"]["name"])) {
          $target_file = "slike/" . basename($_FILES["slika"]["name"]);
          $uploadOk = 1;
          $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
          if (isset($_POST["gumb"])) {
              $check = getimagesize($_FILES["slika"]["tmp_name"]);
              if ($check !== false) {
                  $uploadOk = 1;
              } else {
                  echo "File is not an image.<br>";
                  $uploadOk = 0;
              }
          }
          if (file_exists($target_file)) {
              echo "Sorry, file already exists.<br>";
              $uploadOk = 0;
          }
          if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
              echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
              $uploadOk = 0;
          }
          if ($uploadOk == 0) {
              echo "Sorry, your file was not uploaded.<br>";
          } else {
              if (move_uploaded_file($_FILES["slika"]["tmp_name"], $target_file)) {
                  // echo "The file " . htmlspecialchars(basename($_FILES["slika"]["name"])) . " has been uploaded.<br>";
              } else {
                  // echo "Sorry, there was an error uploading your file.<br>";
              }
          }
      }
      $id = $_POST['id'];
      $naslov = $_POST['naslov'];
      $sazetak = $_POST['sazetak'];
      $tekst = $_POST['tekst'];
      $slika = $_FILES["slika"]["name"];
      $kategorija = $_POST['kategorija'];
      if(isset($_POST["obavijest"])){
      $obavijest=1;
      }else{
        $obavijest=0;
      }
      $query = 'UPDATE clanak SET naslov = ?, sazetak = ?, tekst = ?, slika = ?, kategorija = ?, obavijest = ? WHERE id = ?';
      $stmt = mysqli_stmt_init($dbc);
      if (mysqli_stmt_prepare($stmt, $query)) {
          mysqli_stmt_bind_param($stmt, 'sssssii', $naslov, $sazetak, $tekst, $slika, $kategorija,$obavijest, $id);
          mysqli_stmt_execute($stmt);
      }
  }
}
mysqli_close($dbc);
?>

    </body>