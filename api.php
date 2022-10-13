<?php
//require_once('./karta.php');
use MongoDB\Operation\InsertOne;

require_once('./vendor/autoload.php');
class api
{
  function __construct()
  {
    $this->db = (new MongoDB\Client('mongodb+srv://bubi1600:backend@cluster0.es6kxyd.mongodb.net/?retryWrites=true&w=majority'))->test;
  }
  public function insertNewItem($itemInfo = [])
  {
    if (empty($itemInfo)) {
      return false;
    }
    //insert data
    $insertable = $this->db->products->insertOne([
      'mobil' => $itemInfo['mobil'],
      'laptop' => $itemInfo['laptop'],
      'skarm' => $itemInfo['skarm'],
      'statdator' => $itemInfo['statdator'],
      'surfplatta' => $itemInfo['surfplatta']
    ]);
    //return this inserted documents mongodb id
    return $insertable->getInsertedId();
  }
/*public function aggregateProducts()
 {
 $cursor = $this->db->products->aggregate([
 [['$group' => ['_id' => null, 'TotalMobil' => ['$sum' => ['$toInt' => '$mobil']], 'TotalLaptop' => ['$sum' => ['$toInt' => '$laptop']], 'TotalSkarm' => ['$sum' => ['$toInt' => '$skarm']], 'TotalStatdator' => ['$sum' => ['$toInt' => '$statdator']], 'TotalSurfplatta' => ['$sum' => ['$toInt' => '$surfplatta']]]]]
 ]);
 //$this->assertInstanceOf(Cursor::class , $cursor);
 print_r($cursor);
 }*/
}
?>
<?php
require_once('./api.php');

$db = new api;

//if (isset($_POST['mobil'], $_POST['laptop'], $_POST['skarm'], $_POST['statdator'], $_POST['surfplatta'])) {
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $insertable = $db->insertNewItem([
    'mobil' => $_POST['mobil'],
    'laptop' => $_POST['laptop'],
    'skarm' => $_POST['skarm'],
    'statdator' => $_POST['statdator'],
    'surfplatta' => $_POST['surfplatta']
  ]);
  if ($insertable) {

  }
}
//test insert new data
//print_r($db->insertNewItem([
//    'phone' => '5',
//    'laptop' => '5', 
//    'monitor' => '5',
//    'stationary' => '5',
//    'misc' => '5'
//]));
//exit();
?>
