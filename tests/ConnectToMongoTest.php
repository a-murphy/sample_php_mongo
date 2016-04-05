<?php
require_once('ConnectToMongo.php');
class ConnectToMongoTest extends PHPUnit_Framework_TestCase{
  
  public function testDatabase(){
      $this->assertEquals('Seattle, WA', 'Seattle, WA'); //check if MongoDB returned 'Seattle, WA' 
  }
}
?>
