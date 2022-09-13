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
      'phone' => $itemInfo['phone'],
      'laptop' => $itemInfo['laptop'],
      'monitor' => $itemInfo['monitor'],
      'stationary' => $itemInfo['stationary'],
      'misc' => $itemInfo['misc']
    ]);
    //return this inserted documents mongodb id
    return $insertable->getInsertedId();
  }
}
?>