<?php
require_once('./api.php');
$db = new api;

if (isset($_POST['mobil'], $_POST['laptop'], $_POST['skarm'], $_POST['statdator'], $_POST['surfplatta'])) {
    $insertable = $db->insertNewItem([
        'mobil' => $_POST['mobil'],
        'laptop' => $_POST['laptop'],
        'skarm' => $_POST['skarm'],
        'statdator' => $_POST['statdator'],
        'surfplatta' => $_POST['surfplatta']
    ]);
    if ($insertable) {

    }
}
//test insert new data
//print_r($db->insertNewItem([
//    'phone' => '5',
//    'laptop' => '5',
//    'monitor' => '5',
//    'stationary' => '5',
//    'misc' => '5'
//]));
//exit();
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
echo "<h2>Projekt med Atea</h2>";

$mobil = $_POST["mobil"];
$laptop = $_POST["laptop"];
$skarm = $_POST["skarm"];
$statdator = $_POST["statdator"];
$surfplatta = $_POST["surfplatta"];
//$pryl6 = $_POST["pryl6"];
?>
    <br><p id="sammanställningsID"> Sammanställning av dina elektroniska apparater
<table class="wp-table">
    <tr>
      <th>Enhet</th>
      <th>Antal</th>
      <th>CO₂</th>
    </tr>
    <tr>
      <td>Mobiler</td>
      <?php echo "<td>&nbsp;" . $mobil . "</td>";
      echo "<td>&nbsp;" . $mobil * 70 . " kg" . "</td>";?>
    </tr>
    <tr>
      <td>Laptops</td>
      <?php
      echo "<td>&nbsp;" . $laptop . "</td>";
      echo "<td>&nbsp;" . $laptop * 160 . " kg" . "</td>";?>
    </tr>
    <tr>
      <td>Skärmar</td>
      <?php
      echo "<td>&nbsp;" . $skarm . "</td>";
      echo "<td>&nbsp;" . $skarm * 100 . " kg" . "</td>";?>
    </tr>
    <tr>
      <td>Stationär dator</td>
      <?php
      echo "<td>&nbsp;" . $statdator . "</td>";
      echo "<td>&nbsp;" . $statdator * 520 . " kg" . "</td>";?>

    </tr>
    <tr>
      <td>Surfplatta</td>
      <?php
      echo "<td>&nbsp;" . $surfplatta . "</td>";
      echo "<td>&nbsp;" . $surfplatta * 100 . " kg" . "</td>";?>
    </tr>
  </table>
</table> <br />
   <div class="total">
   <?php
//totala mängden co2 behövs uppdateras med övrigt och pryl 6
echo "<p id='Totalmangd'>Totala mängden co2: " . $mobil * 70 + $laptop * 160 + $skarm * 100 + $statdator * 520 + $surfplatta * 100 . "kg </p>";
?>
<?php
$Total = $mobil * 70 + $laptop * 160 + $skarm * 100 + $statdator * 520 + $surfplatta * 100;
echo "Detta är samma sak som: ". ceil($Total*1000 / 240) . "km med Bensinbil <br/>";
echo "Detta är samma sak som: ". ceil($Total*1000 / 210) . "km med Diselbil <br/>";
echo "Detta är samma sak som: ". ceil($Total*1000 / 90) . "km med Elbil";


?>
</div>
<div class="karta">
<?php
echo "<p id='Karta'>Karta där man lämnar sina tekniska enheter<br/></p>";
?></div>
    <div id='map'></div>
    <!--Det är div id='map' som skapar själva kartan -->




</body>

</html>
<script><?php include "./js/javascript.js"; ?></script>