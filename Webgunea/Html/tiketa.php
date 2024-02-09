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
    < <link rel="stylesheet" href="../Css/ticketa.css">
    <!-- Nunito letra mota -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">

    <script>

        function zinemak(){
            <?php
            $mysqli = new mysqli("localhost","root","", "db_zinema");
            $sql = "SELECT id_zinema,izena FROM zinema";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) {
                ?>
                    var aukera = document.createElement("option");
                    aukera.value = "<?php echo $row['id_zinema']; ?>";
                    aukera.textContent = "<?php echo $row['izena']; ?>";
                    zinema.appendChild(aukera);
    
                <?php
                }
            ?>
            <?php
                if(isset($_GET['zinema'])){
                ?>
                document.getElementById('zinema').value = "<?php echo $_GET['zinema']?>";
                <?php       
                $zinema = $_GET['zinema'];          
                $sql = "SELECT id_filma,izena FROM filma JOIN saioa using (id_filma)  WHERE id_zinema = $zinema";
                $result = $mysqli->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    var aukera = document.createElement("option");
                    aukera.value = "<?php echo $row['id_filma']; ?>";
                    aukera.textContent = "<?php echo $row['izena']; ?>";
                    document.getElementById('filmaizena').appendChild(aukera);
                <?php
                }
            }
            ?>
            <?php
                if(isset($_GET['zinema']) & isset($_GET['filmaizena'])){
                    ?>
                document.getElementById('filmaizena').value = "<?php echo $_GET['filmaizena']?>";
                <?php
            }
            ?>
        }

        function rekargatuZ(){
            let zinema = document.getElementById("zinema");
            window.location = window.location.pathname + "?zinema="+zinema.value;
        }

        function rekargatuF(){
            let filma = document.getElementById("filmaizena");
            let zinema = document.getElementById("zinema");
            window.location = window.location.pathname + "?zinema="+zinema.value+"&filmaizena="+filma.value;
              
        }

        function rekargatuD(){
            if(isset($_GET['zinema']) & isset($_GET['filmaizena'])){
            
            }else{
                window.alert("Guztia ondo bete!");
            }
        }
    </script>
</head>
<body onload="zinemak()">
<main class="erreserbaform" > 
  <form action="tiketa.php" method="get" id="tiketaform">
        <ul>
            <li>
                <label for="zinema">ZINEMA: </label>
                <select id="zinema" name="zinema" onchange="rekargatuZ()">
                        <option></option>
                </select>
            </li>

            <li>
                <label for="filmaizena">FILMA:  </label>
                <select id="filmaizena" name="filmaizena" onchange="rekargatuF()">
               
                    <option></option>

                </select>

            </li>
            
            <li>
                <label for="eguna">EGUNA: </label>
                <input type="date" name="eguna" id="eguna" onchange="rekargatuD()">
            </li>

            <li>
                <label for="saioak">SAIOA: </label>
                <select id="saioak" name="saioak">

                    <option></option>

                </select>

            </li>

            
        </ul>
        <input type="submit" name="EROSI" value="EROSI">
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
