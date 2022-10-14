<?php 
    session_start();

    // include("db_connection.php");
    error_reporting(-1);            // Report all errors
    ini_set("display_errors", 1);   // display all errors  

    $dbservername = "studentmysql.miun.se";
    $dbusername = "fist2000";
    $dbpassword = "7zaeup47";
    $dbname = "fist2000";

    # kontaktar databasen eller visa felmeddelande vid error
    $db = new mysqli("$dbservername", "$dbusername", "$dbpassword", "$dbname"); 
    if ($db->connect_errno > 0 ) { die ('Fel vid anslutning [' . $db->connect_error . ']'); }



    if (!empty($_REQUEST["submit"])) {
        $_SESSION["phones"] = $_POST["mobil"];
        $_SESSION["laptops"] = $_POST["laptop"];
        $_SESSION["monitors"] = $_POST["skarm"];
        $_SESSION["PC"] = $_POST["statdator"];
        $_SESSION["tablets"] = $_POST["surfplatta"];

        $stmt = $db->prepare("INSERT INTO Products (mobil, laptop, skarm, statdator, surfplatta) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $_POST["mobil"], $_POST["laptop"], $_POST["skarm"], $_POST["statdator"], $_POST["surfplatta"]);
        $stmt->execute();        
        
        unset($_REQUEST["submit"]); //disablear submit-knappen
        header("Location: karta.php");
        exit();
    }
    
?>
<!DOCTYPE html>

<head>
    <title>Inlämning av eletronik</title>
    <?php include 'navbar.php'?>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <link rel="stylesheet" href="./css/css.css">

</head>
<body>
    <?php
    echo "<br><br><br><br>"
    ?>
    <div class="feedback">
        <h1 id="feedback"> Feedback <h1>
            <?php
                echo "<p id='faktaMobil'>0 mobiler orsakar 0kg co2<br/></p>";
                echo "<p id='faktaLaptop'>0 laptops orsakar 0kg co2<br/></p>";
                echo "<p id='faktaSkarm'>0 skärmar orsakar 0kg co2<br/></p>";
                echo "<p id='faktaStat'>0 Stationära orsakar 0kg co2<br/></p>";
                echo "<p id='faktaSurfplatta'>0 surfplattor orsakar 0kg co2<br/></p>";
            ?>
    </div>
    
    <!-- Container med bilderna och plus minus för att öka minska värde -->
    <form method="post" action="">
        <div class="Wallpaper">
        <div class="sammanfattning">
        <h3>Hej och välkommen!</h3>
        <h2>Nedanför kan ni se olika alternativ där ni kan trycka i vad ni vill lämna in och hur många av de olika alternativen. 
            Vi är extremt tacksamma över att ni väljer att lämna in er elektronik till oss, bidraget kommer att göra stor skillnad för de på Kyeshero Sjukhuset i Kongo.<br>
            Tack så hemskt mycket att du väljer att skicka in dina gamla elektroniska prylar.</h2>
        <?php 
       
        ?>    
        
        </div>
            <div class="container">
                <div class="box">
                <p title="Vid inlämning av iPhone stäng av Hitta min iPhone"> Mobiltelefon  * </p> 
                    <?PHP
                        $filepath = 'uploads\mobil.jpg';
                        echo '<img src="' . $filepath . '" width="100%" height="100%">';
                    ?>
                    <p>
                    </p>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="mobil">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                        </span>
                        <input type="text" name="mobil" class="form-control input-number" value="0" min="0" max="10">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" data-type="plus"
                                data-field="mobil">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>

                    </div>

                </div>
                <div class="box">
                    <p> Laptop </p>
                    <?PHP
                        $filepath = 'uploads\laptop.jpg';
                        echo '<img src="' . $filepath . '" width="100%" height="100%">';
                    ?>
                    <p>
                    </p>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" disabled="disabled"
                                data-type="minus" data-field="laptop">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                        </span>
                        <input type="text" name="laptop" class="form-control input-number" value="0" min="0" max="10">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" data-type="plus"
                                data-field="laptop">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>

                    </div>
                </div>
                <div class="box">
                    <p> Skärm </p>
                    <?PHP
                        $filepath = 'uploads\skarm.jpg';
                        echo '<img src="' . $filepath . '" width="100%"     height="100%">';
                    ?>
                    <p>
                    </p>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" disabled="disabled"
                                data-type="minus" data-field="skarm">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                        </span>
                        <input type="text" name="skarm" class="form-control input-number" value="0" min="0" max="10">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" data-type="plus"
                                data-field="skarm">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="box">
                    <p> Stationär </p>
                    <?PHP
$filepath = 'uploads\stationar.jpg';
echo '<img src="' . $filepath . '" width="100%" 
        height="100%">';
?>
                    <p>
                    </p>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" disabled="disabled"
                                data-type="minus" data-field="statdator">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                        </span>
                        <input type="text" name="statdator" class="form-control input-number" value="0" min="0"
                            max="10">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" data-type="plus"
                                data-field="statdator">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="box">
                    <p> Surfplatta </p>
                    <?PHP
$filepath = 'uploads\tablet.jpg';
echo '<img src="' . $filepath . '" width="100%" 
        height="100%">';
?>
                    <p>
                    </p>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" disabled="disabled"
                                data-type="minus" data-field="surfplatta">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                        </span>
                        <input type="text" name="surfplatta" class="form-control input-number" value="0" min="0" max="10">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" data-type="plus"
                                data-field="surfplatta">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="box"><br>
<input type="submit" name="submit" id="submit" value="Lämna in" />
</div>
   </form>
            </div>
    </body>

    </html>
    <script><?php include "./js/javascript.js"; ?></script>