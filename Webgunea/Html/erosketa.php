<?php
session_start();
?>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "db_zinema1";

// Konexioa sortu
$mysqli = new mysqli($servername, $username, $password, $db);

// Konexioa egiaztatu
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
?>
            
<!DOCTYPE html>
<html lang="eu">

<head>
    <title>Elorrieta zinema - Erreserbak</title>
    <meta charset="UTF-8">
    <meta name="author" content="1.taldea">
    <meta name="keywords" content="Erreserbak, Erreserbak egitea">
    <meta name="description" content="Erreserbak egiteko gunea">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/erosketa.css">
    <!-- Nunito letra mota -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
	
    <script>
    function datuakAtera() {
		<?php
	
    if (isset($_GET['zinema']) && isset ($_GET['filmaizena']) &&  isset ($_GET['eguna']) && isset ($_GET['saioak']) &&  isset ($_GET['kant'])) {
		$zinema = $_GET['zinema'];
		$filma = $_GET['filmaizena'];
		$eguna = $_GET['eguna'];
		$saioa = $_GET['saioak'];
		$kant = $_GET['kant'];
        
        //Zinema ateratzeko
        $sql = "SELECT izena from zinema where id_zinema=$zinema";

		$emaitza = $mysqli->query($sql);

		$row = $emaitza->fetch_assoc();

		$izenazinema = $row ['izena'];

		//Filma ateratzeko
		$sql2 = "SELECT izena from filma where id_filma = $filma";

		$emaitza2 = $mysqli->query($sql2);

        $row2 = $emaitza2->fetch_assoc();

		$filmaizena = $row2['izena'];	
    

        //Prezioa areta
        $sql3 = "SELECT prezioa from SAIOA where id_saioa = $saioa";

        $emaitza3 = $mysqli->query($sql3);

        $row3 = $emaitza3->fetch_assoc();

        $prezioa = $row3['prezioa'];

       $prezioTotala = $prezioa * $kant; 
     
    }
	?>
}

</script>
    
</head>

<body onload="datuakAtera()">
    <table>
        <thead>
            <th>EROSKETA LABURPENA</th>
        </thead>
        <tbody>
            <tr>
                <td>ZINEMA</td>
                <td><?php echo $izenazinema ?></td>
            </tr>

            <tr>
                <td>PELIKULA</td>
                <td><?php echo $filmaizena ?></td>
            </tr>

            <tr>
                <td>EGUNA</td>
                <td><?php echo $eguna ?></td>
            </tr>

			<tr>
				<td>KANTITATEA</td>
                <td> <?php echo $kant ?></td>
			</tr>

            <tr>
                <td>PREZIOA</td>
				<td> <?php echo $prezioTotala ?> </td>
            </tr>

           

        </tbody>
    </table>
</body>

</html>