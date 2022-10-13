<?php 
    session_start();

    include("db_connection.php");
    OpenCon();
    //conn start 
    if (!empty($_REQUEST["submit"])) {
        $_SESSION["phones"] = $_POST["mobil"];
        $_SESSION["laptops"] = $_POST["laptop"];
        $_SESSION["monitors"] = $_POST["skarm"];
        $_SESSION["PC"] = $_POST["statdator"];
        $_SESSION["tablets"] = $_POST["surfplatta"];
        
        $sql = "INSERT INTO Products (mobil, laptop, skarm, statdator,surfplatta) VALUES ('$mobil','$laptop','$skarm','$statdator','$surfplatta')";
        $query = mysqli_query($conn,$sql);

        header("Location: karta.php");
        CloseCon($conn);
        
        exit();
    }
    
?>
<!DOCTYPE html>

<head>
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
                echo "<p id='faktaMobil'>0 mobiler orsakar kg 0 co2<br/></p>";
                echo "<p id='faktaLaptop'>0 laptops orsakar kg 0 co2<br/></p>";
                echo "<p id='faktaSkarm'>0 skärmar orsakar kg 0 co2<br/></p>";
                echo "<p id='faktaStat'>0 Stationära orsakar kg 0 co2<br/></p>";
                echo "<p id='faktaSurfplatta'>0 surfplattor orsakar kg 0 co2<br/></p>";
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
        echo "asssss";

        echo $_SESSION["phones"] ;
        echo $_SESSION["laptops"] ;
        echo $_SESSION["monitors"];
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
                <div class="box2">
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
                <div class="box2">
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
            </div>
            
            <br><br><br>
            <div style="text-align:center" >

                <input type="submit" name="submit" id="submit" value="Lämna in" />
    </form>
    </div>
    </body>

    </html>
    <script><?php include "./js/javascript.js"; ?></script>