<!DOCTYPE html>

<head>
    <?php include 'navbar.php'?>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/css.css">
</head>
<body>
    <?php
echo "<br><br><br><br><br><br>";
?>
    <div class="feedback">
        <h1> Feedback <h1>
                <?php
echo "<p id='faktaMobil'>Mobilfakta<br/></p>";
echo "<p id='faktaLaptop'>LaptopFakta<br/></p>";
echo "<p id='faktaSkarm'>SkärmFakta<br/></p>";
echo "<p id='faktaStat'>StationärFakta<br/></p>";
echo "<p id='faktaOvrigt'>ÖvrigtFakta<br/></p>";

?>
    </div>
    <!-- 
    Container med bilderna och plus minus för att öka minska värde
-->
    <form method="POST" action="karta.php">
        <div class="Wallpaper">
            <div class="container">
                <div class="box">
                    <p> Mobiltelefon </p>
                    <?PHP
$filepath = 'uploads\mobil.jpg';
echo '<img src="' . $filepath . '" width="100%" 
        height="100%">';

?>
                    <p>
                    </p>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" disabled="disabled"
                                data-type="minus" data-field="mobil">
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
echo '<img src="' . $filepath . '" width="100%" 
        height="100%">';
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
echo '<img src="' . $filepath . '" width="100%" 
        height="100%">';
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
                    <p> Övrigt </p>
                    <?PHP
$filepath = 'uploads\ovrigt.jpg';
echo '<img src="' . $filepath . '" width="100%" 
        height="100%">';
?>
                    <p>
                    </p>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" disabled="disabled"
                                data-type="minus" data-field="ovrigt">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                        </span>
                        <input type="text" name="ovrigt" class="form-control input-number" value="0" min="0" max="10">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" data-type="plus"
                                data-field="ovrigt">
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
                                data-type="minus" data-field="quant[6]">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                        </span>
                        <input type="text" name="quant[3]" class="form-control input-number" value="0" min="0" max="10">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" data-type="plus"
                                data-field="statdator">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div style="text-align:center" >

                <input type="submit" value="Lämna in" />
    </form>
    </div>
    </body>

    </html>
    <script><?php include "./js/javascript.js"; ?></script>