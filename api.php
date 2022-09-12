<?php
$json = array(
  'Leo' => 35,
  'Alice' => 37, 
  'Dora' => 43
);
$json = $phone
echo json_encode($json);
?>

<?php
// API URL
$url = 'https://ateawebapi.herokuapp.com/product/';

// Initialize a new cURL resource
$ch = curl_init();

//Set URL
curl_setopt($curl, CURLOPT_URL, $url);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Setup request to send json via POST
$data = $json
{
    'phone': '',
    'laptop': '',
    'monitor':''
};
$json

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Return response instead of outputting
curl_setopt($ch, CURLOPT_POST, true);

// Execute the POST request
$run = curl_exec($ch);

// Close cURL resource
curl_close($ch);

echo $run;
?>

<?php
$phone = $_POST['quant[1]'];
$laptop = $_POST['quant[2]'];
$monitor = $_POST['quant[3]'];
?>