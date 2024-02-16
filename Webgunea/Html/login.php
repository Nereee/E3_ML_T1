<?php
<<<<<<< HEAD
session_start();
if(isset($_POST['izena']) && $_POST ['pasahitza']){
=======

if(isset($_GET['izena']) && $_GET ['pasahitza']){
>>>>>>> 854e097836e85ec65cd1834983e1c8c6533ed2f9
	
$servername = "localhost";
$username = "root";
$password = "";
$db = "db_zinema";

// Konexioa sortu
$mysqli = new mysqli($servername, $username, $password, $db);

// Konexioa egiaztatu
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

//Kontsulta

<<<<<<< HEAD
$izena = $_POST["izena"];
$pwd = $_POST["pasahitza"]; 




=======
$izena = $_GET["izena"];
$pwd = $_GET["pasahitza"]; 
>>>>>>> 854e097836e85ec65cd1834983e1c8c6533ed2f9
$kontsulta = "select izena from erabiltzaile where izena = '$izena' and pasahitza = '$pwd'";
$result = $mysqli->query($kontsulta);

if($result->num_rows > 0){
<<<<<<< HEAD
    header("Location: tiketa.php");
=======
    header("Location: tiketa.php?erabiltzaile=$izena");
>>>>>>> 854e097836e85ec65cd1834983e1c8c6533ed2f9
}else{
    echo "Pasahitza edo erabiltzailea ez dira zuzenak";
}

// Konexioa itxi
$mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="eu">

<head>
    <title>Elorrieta zinema - Erreserbak</title>
    <meta charset="UTF-8">
    <meta name="author" content="1.taldea">
    <meta name="keywords" content="Login, Login egitea">
    <meta name="description" content="login egiteko gunea">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href = "../Css/style.css">
    <link rel = "stylesheet" href = "../Css/loginstyle.css">
    <!-- Nunito letra mota -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
</head>

<body>
    <!-- Headerra eta bere nav barruan kategoriekin -->
    <nav id="menua">
        <ul>
            <li><img src="../IMG/logo1.png" alt="ElorrietaZinema logo"></li>
            <li><a href="../index.html">EXIT</a></li>
        </ul>
    </nav>
    <main class="mainlog"> 
<<<<<<< HEAD
    <form action="login.php" method="post" id="logform">
=======
    <form action="login.php" method="get" id="logform">
>>>>>>> 854e097836e85ec65cd1834983e1c8c6533ed2f9
        <strong><p class="caption">SAIOA HASI</p></strong>
        <ul>
            <li>
                <label for="izena">Erabiltzailea : </label>
                <input type="text" id="izena" name="izena" placeholder="Idatzi hemen zure erabiltzailearen izena" required>
            </li>

            <li>
                <label for="pasahitza">Pasahitza : </label>
                <input type="password" id="pasahitza" name="pasahitza" placeholder="Idatzi zure pasahitza" required>
            </li>

        </ul>

        <input type="submit" name="BIDALI" value="SAIOA HASI" onclick="logeatu()">
    </form>
    </main>
    <!-- Footerra zinemaren informazioarekin eta lokalizazioa -->
    <footer>
        <div id="footertext">
            <p>
                Agirre Lehendakariaren Etorb., 184
                48015 - Bilbo
                Autobusa: 70,46.
                Metroa: San Ignazio, Asturias irteera <br>
                Telefonoa: 944 02 80 00 <br>
                Email: elorrietazinema@gmail.com
            </p>
        </div>
        <div id="saresozialak">
            <a href="https://www.instagram.com/" target="_blank"><img class="szicon"
                    src="../IMG/instagram_icon_146245.png" alt="Instagram logo"></a>
            <a href="https://twitter.com/?lang=es" target="_blank"><img class="szicon" src="../IMG/X.jpg"
                    alt="X logo"></a>
        </div>
    </footer>

</body>

</html>