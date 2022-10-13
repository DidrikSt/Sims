<?php

function OpenCon()
 {
 $servername = "studentmysql.miun.se";
 $username = "fist2000";
 $password = "7zaeup47";
 $dbname = "fist2000";
 $conn = new mysqli($servername, $username, $password, $dbname) or die("Connect failed: %s\n". $conn -> error);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mobil = $_POST['mobil'];
    $laptop = $_POST['laptop'];
    $skarm = $_POST['skarm'];
    $statdator = $_POST['statdator'];
    $surfplatta = $_POST['surfplatta'];
}

$sql = "INSERT INTO Products (mobil, laptop, skarm, statdator,surfplatta) VALUES ('$mobil','$laptop','$skarm','$statdator','$surfplatta')";
$query = mysqli_query($conn,$sql);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
 
return $conn;
}
 
function CloseCon($conn)
 {
 $conn -> close();
 }
//OpenCon();
//CloseCon();

?>