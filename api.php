<?php
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