<!DOCTYPE html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/css.css">
<style>
body {
    background-color:lightblue;
}
</style>
</head>
<body>
<?php
echo "<h2>Projekt med Atea</h2>";
echo "Fakta<br><br><br>";
?>
<!-- 
    Container med bilderna och plus minus för att öka minska värde
--> 
<div class="Wallpaper">
<div class="container">
        <div class="box">
        <p> Mobiltelefon </p>
    <?PHP 
        $filepath= 'uploads\mobil.jpg'; 
        echo '<img src="'.$filepath.'" width="100%" 
        height="100%">'; 
    ?> 
    <p>
      </p><div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                  <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
          <input type="text" name="quant[1]" class="form-control input-number" value="0" min="0" max="10">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>

</div>
</div>
        <div class="box">
        <p> Laptop </p>
    <?PHP 
        $filepath= 'uploads\laptop.jpg'; 
        echo '<img src="'.$filepath.'" width="100%" 
        height="100%">'; 
    ?> 
    <p>
      </p><div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                  <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
          <input type="text" name="quant[2]" class="form-control input-number" value="0" min="0" max="10">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[2]">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>

</div>
</div>
<div class="box">
        <p> Skärm </p>
    <?PHP 
        $filepath= 'uploads\skarm.jpg'; 
        echo '<img src="'.$filepath.'" width="100%" 
        height="100%">'; 
    ?> 
    <p>
      </p><div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[3]">
                  <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
          <input type="text" name="quant[3]" class="form-control input-number" value="0" min="0" max="10">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[3]">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>
</div>
</div>
</div><br><br><br><br>
<div class="container">
<div class="box">
        <p> Skärm </p>
    <?PHP 
        $filepath= 'uploads\skarm.jpg'; 
        echo '<img src="'.$filepath.'" width="100%" 
        height="100%">'; 
    ?> 
    <p>
      </p><div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[4]">
                  <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
          <input type="text" name="quant[3]" class="form-control input-number" value="0" min="0" max="10">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[4]">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>
</div>
</div>
<div class="box">
        <p> Skärm </p>
    <?PHP 
        $filepath= 'uploads\skarm.jpg'; 
        echo '<img src="'.$filepath.'" width="100%" 
        height="100%">'; 
    ?> 
    <p>
      </p><div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[5]">
                  <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
          <input type="text" name="quant[3]" class="form-control input-number" value="0" min="0" max="10">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[5]">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>
</div>
</div>
<div class="box">
        <p> Skärm </p>
    <?PHP 
        $filepath= 'uploads\skarm.jpg'; 
        echo '<img src="'.$filepath.'" width="100%" 
        height="100%">'; 
    ?> 
    <p>
      </p><div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[6]">
                  <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
          <input type="text" name="quant[3]" class="form-control input-number" value="0" min="0" max="10">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[6]">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>
</div>
</div>
</div>
<br><br><br><br><br><br><br>
<div style="text-align:center">
<form method="POST" action="karta.php" >
    <input type="submit" value="Lämna in"/>
  </form>
</div>
</body>

</html>
<script><?php include "./js/javascript.js"; ?></script>

