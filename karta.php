<!DOCTYPE html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/css.css">
<link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps.css'>
<script onload="mapContent();" src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps-web.min.js" defer></script>


</head>
<body>
<?php
    echo "<h2>Projekt med Atea</h2>";
    
    $mobil = $_POST["mobil"];
    $laptop= $_POST["laptop"];
    $skarm = $_POST["skarm"];
    //$pryl4 = $_POST["pryl4"];
    //$pryl5 = $_POST["pryl5"];
    //$pryl6 = $_POST["pryl6"];
    ?>
    <p id="sammanställningsID"> Sammanställning av dina elektroniska apparater
    <table id="tabell" style="width:100%">
        <tr>
            <th>&nbsp;Mobiler</th> <!-- &nbsp; är whitespace för html är konstig.-->         
            <th>&nbsp;Laptops</th>        
            <th>&nbsp;Skärmar</th>              
            <th>&nbsp;pryl4</th>              
            <th>&nbsp;pryl5</th>              
            <th>&nbsp;pryl6</th>              
        </tr>
        <tr>
            <?php 
            echo "<td>&nbsp;" . $mobil . "</td>";
            echo "<td>&nbsp;" . $laptop. "</td>";
            echo "<td>&nbsp;" . $skarm . "</td>";
            //echo "<td>&nbsp;" . $pryl4 . "</td>";
            //echo "<td>&nbsp;" . $pryl5 . "</td>";
            //echo "<td>&nbsp;" . $pryl6 . "</td>";
            ?>
            <td>&nbsp;pryl4</td>
            <td>&nbsp;pryl5</td>
            <td>&nbsp;pryl6</td>

        </tr>
    </table> <br />
    <?php 
        echo "<p id='Karta'>Karta där man lämnar sina tekniska enheter<br/></p>"; 
    ?>        
    <div id='map'></div>   <!--Det är div id='map' som skapar själva kartan -->




</body>

</html>
<script><?php include "./js/javascript.js"; ?></script>