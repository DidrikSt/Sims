<?php
require_once('./vendor/autoload.php');
class api
{
  function __construct()
  {
    $this->db = (new MongoDB\Client('mongodb+srv://bubi1600:backend@cluster0.es6kxyd.mongodb.net/?retryWrites=true&w=majority'))->test->products;
  }
  public function insertNewItem($itemInfo = [])
  {
    if (empty($itemInfo)) {
      return false;
    }
    //insert data
    $insertable = $this->db->insertOne([
      'mobil' => $itemInfo['mobil'],
      'laptop' => $itemInfo['laptop'],
      'skarm' => $itemInfo['skarm'],
      'statdator' => $itemInfo['statdator'],
      'surfplatta' => $itemInfo['surfplatta']
    ]);
    //return this inserted documents mongodb id
    return $insertable->getInsertedId();
  }
}
?>