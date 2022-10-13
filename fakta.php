<?php session_start(); ?>
<!DOCTYPE html>
<head>
    <?php include 'navbar.php'?>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
img {  
    display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
  margin-top: 100px;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hey</title>
</head>
<body>
<?php
$profpic = "uploads/Faktasida.jpg";
?>
<?PHP
$filepath = 'uploads\Faktasida.jpg';
echo '<img src="' . $filepath . '">';
?>
</body>
</html>