<?php
require_once('./api.php');
$db = new api;

if (isset($_POST['mobil'], $_POST['laptop'], $_POST['skarm'], $_POST['statdator'], $_POST['ovrigt'])) {
    $insertable = $db->insertNewItem([
        'phone' => $_POST['mobil'],
        'laptop' => $_POST['laptop'],
        'monitor' => $_POST['skarm'],
        'stationary' => $_POST['statdator'],
        'misc' => $_POST['ovrigt']
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
    <table class="fl-table" id="tabell" style="width:100%">
        <tr>
            <th>&nbsp;Mobiler</th> <!-- &nbsp; är whitespace för html är konstig.-->
            <th>&nbsp;Laptops</th>
            <th>&nbsp;Skärmar</th>
            <th>&nbsp;Stationär dator</th>
            <th>&nbsp;Surfplatta</th>
        </tr>
        <?php
echo "<tr>";
echo "<td>&nbsp;" . $mobil . "</td>";
echo "<td>&nbsp;" . $laptop . "</td>";
echo "<td>&nbsp;" . $skarm . "</td>";
echo "<td>&nbsp;" . $statdator . "</td>";
echo "<td>&nbsp;" . $surfplatta . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>&nbsp;" . $mobil * 70 . " kg" . "</td>";
echo "<td>&nbsp;" . $laptop * 160 . " kg" . "</td>";
echo "<td>&nbsp;" . $skarm * 100 . " kg" . "</td>";
echo "<td>&nbsp;" . $statdator * 520 . " kg" . "</td>";
echo "<td>&nbsp;" . $surfplatta * 100 . " kg" . "</td>";

echo "</tr>";

?>
</table> <br />
   <div class="total">
   <?php
//totala mängden co2 behövs uppdateras med övrigt och pryl 6
echo "Totala mängden co2: " . $mobil * 70 + $laptop * 160 + $skarm * 100 + $statdator * 520 + $surfplatta * 100;
?>
</div>
<?php
echo "<p id='Karta'>Karta där man lämnar sina tekniska enheter<br/></p>";
?>
    <div id='map'></div>
    <!--Det är div id='map' som skapar själva kartan -->




</body>

</html>
<script><?php include "./js/javascript.js"; ?></script>