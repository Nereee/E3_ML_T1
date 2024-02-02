<?php
include 'login.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form id="form-erreserba">
        <ul>

            <li>
                <label for="izena">ERABILTZAILEA:  </label>
                <input type="text" id="izena" placeholder="Idatzi hemen zure izena">
            </li>

            <li>
                <label for="aretoa">ARETOA: </label>
                <select id="aretoa" name="aretoa">

                    <option>Cars</option>
                    <option>Cars</option>
                    <option>Cars</option>
                    <option>Cars</option>

                </select>
            </li>

            <li>
                <label for="zinemaiz">FILMA: </label>
                <select id="zinemaizena" >

                    <option>Cars</option>
                    <option>Cars</option>
                    <option>Cars</option>
                    <option>Cars</option>
                </select>

            </li>

            <li>
                <label for="eguna">SAIOA: </label>
                <select id="saioak" name="saioak" >

                    <option>cars</option>
                    <option>Cars</option>
                    <option>Cars</option>
                    <option>Cars</option>

                </select>

            </li>

            <li>
                <label for="ordua">ORDUA: </label>
                <select id="ordua" name="ordua" >

                    <option>Cars</option>
                    <option>Cars</option>
                    <option>Cars</option>
                    <option>Cars</option>

                </select>
            </li>
        </ul>
    </form>
</body>
</html>

