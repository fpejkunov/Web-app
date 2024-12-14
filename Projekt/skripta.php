<?php
 if (!empty($_FILES["slika"]["name"])) {
    $target_file = "slike/" . basename($_FILES["slika"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (isset($_POST["submit"])) {
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
            // echo "The file " . htmlspecialchars(basename($_FILES["picture"]["name"])) . " has been uploaded.<br>";
        } else {
            // echo "Sorry, there was an error uploading your file.<br>";
        }
    }
}

if (
    !empty($_POST['naslov']) &&
    !empty($_POST['sazetak']) &&
    !empty($_POST['tekst']) &&
    !empty($_POST['kategorija']) && 
    !empty($_FILES["slika"]["name"]) 
)
{
$naslov=$_POST['naslov'];
$sazetak=$_POST['sazetak'];
$tekst=$_POST['tekst'];
$kategorija=$_POST['kategorija'];
$slika = $_FILES["slika"]["name"];
if(isset($_POST['obavijest'])){
$obavijest=1;
}
else{
$obavijest=0;
}

$servername="localhost";
$username="root";
$password="";
$basename="projekt";
$dbc=mysqli_connect($servername,$username,$password,$basename) or die('Greska pri spajanju'.mysqli_error());
if($dbc){
    echo "povezan";
$query="INSERT INTO clanak (naslov, sazetak, tekst, kategorija, slika, obavijest) VALUES (?,?,?,?,?,?);";
$stmt = mysqli_stmt_init($dbc);
        if (mysqli_stmt_prepare($stmt, $query)) {
            mysqli_stmt_bind_param($stmt, 'sssssi', $naslov, $sazetak, $tekst, $kategorija, $slika, $obavijest);
            mysqli_stmt_execute($stmt);
            echo 'Uspjeh';
        }
        else{
            echo 'Neuspjeh';
        }
    }
    mysqli_close($dbc);
}
?>