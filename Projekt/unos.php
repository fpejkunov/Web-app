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




    <form action="skripta.php" method="POST" enctype="multipart/form-data">
    <label for="naslov">Unesite naslov clanka</label><br>
    <input type="text" name="naslov" id="naslov"><br>
    <span id="porukaNaslov"></span>
    <label for="sazetak">Kratki sazetak teksta</label><br>
    <textarea name="sazetak" id="sazetak" cols="30" rows="10"></textarea><br>
    <span id="porukaSazetak"></span>
    <label for="tekst">Glavni tekst</label><br>
    <textarea name="tekst" id="tekst" cols="30" rows="10"></textarea><br>
    <span id="porukaTekst"></span>
    <label for="kategorija">Kategorija</label><br>
    <select name="kategorija" id="kategorija">
    <option value="europa">Europa</option>
    <option value="teknautas">Teknautas</option>
    </select><br>
    <span id="porukaKategorija"></span>
    <label for="slika">Slika</label><br>
    <input type="file" id="slika" name="slika"><br>
    <span id="porukaSlika"></span>
    <label for="obavijest">Obavijest</label><br>
    <input type="checkbox" name="obavijest" id="obavijest"><br>
    <input type="submit" value="submit" id ="submit" name="submit">
    </form>

    
    <script type="text/javascript">
        document.getElementById("submit").onclick = function(event) {
        var slanje_forme = true;
    var naslov = document.getElementById("naslov").value;
    var porukaNaslov = document.getElementById("naslov");
    if (naslov.length < 5 || naslov.length > 30) {
        slanje_forme = false;
        document.getElementById("porukaNaslov").innerHTML = "Naslov mora imati više od 5 i manje od 30 znakova<br>";
        document.getElementById("porukaNaslov").style.color = "red";
        porukaNaslov.style.border = "1px dashed red";
    } 
    var sazetak = document.getElementById("sazetak").value;
    var porukaSazetak = document.getElementById("sazetak");
    if (sazetak.length < 10 || sazetak.length > 100) {
        slanje_forme = false;
        document.getElementById("porukaSazetak").innerHTML = "Kratki sardzaj vijesti mora imati više<br>od 10 i manje od 100 znakova<br>";
        document.getElementById("porukaSazetak").style.color = "red";
        porukaSazetak.style.border = "1px dashed red";
    } 
    var tekst = document.getElementById("tekst").value;
    var porukaTekst = document.getElementById("tekst");
    if (tekst.length == 0) {
        slanje_forme = false;
        document.getElementById("porukaTekst").innerHTML = "Tekst vijesti nesmije biti prazan<br>";
        document.getElementById("porukaTekst").style.color = "red";
        porukaTekst.style.border = "1px dashed red";
    } 
    var slika = document.getElementById("slika").value;
    var porukaSlika = document.getElementById("slika");
    if (!slika) {
        slanje_forme = false;
        document.getElementById("porukaSlika").innerHTML = "Slika mora biti odabrana<br>";
        document.getElementById("porukaSlika").style.color = "red";
        porukaSlika.style.border = "1px dashed red";
    }
    var kategorija = document.getElementById("kategorija").value;
    var porukaKategorija = document.getElementById("kategorija");
    if (!kategorija){
        slanje_forme = false;
        document.getElementById("porukaKategorija").innerHTML = "Kategorija mora biti odabrana<br>";
        document.getElementById("porukaKategorija").style.color = "red";
        porukaKategorija.style.border = "1px dashed red";
    }
    if (slanje_forme != true) {
        event.preventDefault();
    }
}
    </script>

</body>
</html>