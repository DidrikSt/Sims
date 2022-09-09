<!DOCTYPE html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/css.css">
<link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps.css'>
<script onload="mapContent();" src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps-web.min.js" defer></script>





<link rel="stylesheet" href="./css/css.css">

</head>
<body>
    <?php
    echo "<h2>Projekt med Atea</h2>";
    echo "<p id='Karta'>Karta där man lämnar sina tekniska enheter<br/></p>"; 
    ?>
        
    <div id='map'></div>   <!--Det är div id='map' som skapar själva kartan -->

</body>

</html>
<script><?php include "./js/javascript.js"; ?></script>