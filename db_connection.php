<?php

function OpenCon()
{
    $servername = "studentmysql.miun.se";
    $username = "fist2000";
    $password = "7zaeup47";
    $dbname = "fist2000";
    $conn = new mysqli($servername, $username, $password, $dbname); //or die("Connect failed: %s\n". $conn -> error);
    if ($conn->connect_errno > 0 ) { die ('Fel vid anslutning [' . $db->connect_error . ']'); }
}
function CloseCon($conn)
 {
 $conn -> close();
 }
 
 //  if (!$conn) {
   //      die("Connection failed: " . mysqli_connect_error());
//    }
   //echo "Connected successfully";

  // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //   $_SESSION["phones"] = $_POST["mobil"];
  //   $_SESSION["laptops"] = $_POST["laptop"];
  //   $_SESSION["monitors"] = $_POST["skarm"];
  //   $_SESSION["PC"] = $_POST["statdator"];
  //   $_SESSION["tablets"] = $_POST["surfplatta"];
  // }

// return $conn;




//OpenCon();
//CloseCon();
  ?>
