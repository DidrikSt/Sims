<?php
    session_start();




//require_once('./api.php');

error_reporting(E_ERROR | E_PARSE);

?>
<!DOCTYPE html>

<head>
  <?php include 'navbar.php'?>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/css.css">
  <link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps.css'>
  <script onload="mapContent();" src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps-web.min.js"
    defer></script>


</head>

<body>
  <?php


// $mobil = $_POST["mobil"];
// $laptop = $_POST["laptop"];
// $skarm = $_POST["skarm"];
// $statdator = $_POST["statdator"];
// $surfplatta = $_POST["surfplatta"];

echo "<h2>placeholder for css </h2>";
$Total = $_SESSION["phones"] *70 + $_SESSION["laptops"]*280 + $_SESSION["monitors"]*450 + $_SESSION["PC"]*175 + $_SESSION["tablets"]*110;

?>
  <br>
  <p id="sammanställningsID"> Sammanställning av dina elektroniska apparater
  <table class="wp-table">
    <tr>
      <th>Enhet</th>
      <th>Antal</th>
      <th>CO₂</th>
    </tr>
    <tr>
      <td>Mobiler</td>
      <?php 
          echo "<td>&nbsp;" . $_SESSION["phones"] . "</td>";
          echo "<td>&nbsp;" . $_SESSION["phones"] * 70 . " kg" . "</td>"; ?>
    </tr>
    <tr>
      <td>Laptops</td>
      <?php
        echo "<td>&nbsp;" . $_SESSION["laptops"] . "</td>";
        echo "<td>&nbsp;" . $_SESSION["laptops"] * 280 . " kg" . "</td>"; ?>
    </tr>
    <tr>
      <td>Skärmar</td>
      <?php
        echo "<td>&nbsp;" . $_SESSION["monitors"] . "</td>";
        echo "<td>&nbsp;" . $_SESSION["monitors"] * 480 . " kg" . "</td>"; ?>
      </tr>
    <tr>
      <td>Stationär dator</td>
      <?php
        echo "<td>&nbsp;" . $_SESSION["PC"] . "</td>";
        echo "<td>&nbsp;" . $_SESSION["PC"] * 175 . " kg" . "</td>"; ?>
    </tr>
    <tr>
      <td>Surfplatta</td>
      <?php
        echo "<td>&nbsp;" . $_SESSION["tablets"] . "</td>";
        echo "<td>&nbsp;" . $_SESSION["tablets"] * 110 . " kg" . "</td>"; ?>
    </tr>
    <tr>
      <td>Total</td>
      <?php
        echo "<td>&nbsp;" . "- " . "</td>";
        echo "<td>&nbsp;" . $Total . " kg</td>"; ?>
    </tr>
    
  </table>
  </table> <br />
  <div class="total">
    <?php
//totala mängden co2 behövs uppdateras med övrigt och pryl 6
// $Total = $mobil * 70 + $laptop * 160 + $skarm * 100 + $statdator * 520 + $surfplatta * 100;
echo "<p id='Totalmangd'>Totala mängden CO₂: " . $Total . "kg </p>";
?>
    <?php
echo "Det motsvarar: " . ceil($Total * 1000 / 240) . "km med Bensinbil <br/>";
echo "Det motsvarar: " . ceil($Total * 1000 / 210) . "km med Dieselbil <br/>";
echo "Det motsvarar: " . ceil($Total * 1000 / 90) . "km med Elbil";


?>
  </div>
  <div class="karta">
    <?php
  echo "</br></br></br></br>";
  echo "<p id='Karta'>Karta där man lämnar sina tekniska enheter<br/>";
  echo "Återtaget sker 08:00 till 13:00 den 25-27 Oktober<br/></p>";
?>
 
  </div>
  <div id='map'></div>
  <!--Det är div id='map' som skapar själva kartan -->




</body>

</html>
<script><?php include "./js/javascript.js"; ?></script>