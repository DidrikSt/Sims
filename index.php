<!DOCTYPE html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
echo "Fakta<br>";
?>
<div class="container">
    <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <div class="card shadow">
         <div>
    <?PHP 
        $filepath= '\SIMS\uploads\mobil.jpg'; 
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
    </div>
    </div>

</body>

</html>
<script><?php include "./js/javascript.js"; ?></script>

