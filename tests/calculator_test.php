<?php
require_once('calculator.php'); //our calculator class which we will creater later.
class CalculatorTest extends PHPUnit_Framework_TestCase{
  public function testAdd(){
      $calc = new Calculator();
      $sum = $calc->add(array(2,3,4,5));
      $this->assertEquals(14, $sum); //check if 2+3+4+5 is equal to 14
  }
  public function testSubtract(){
      $calc = new Calculator();
      $difference = $calc->subtract(5,2);
      $this->assertEquals(3, $difference); //check if 5 - 2 is equal to 3
  }
}
?>
