<?php

require_once('./src/exercise1/numberChecker.php');

use BcMath\Number;
use PHPUnit\Framework\TestCase;

class numberCheckerTest extends TestCase {

    public function test_if_is_even() {
       $number = new numberChecker(8);
       $this->assertTrue($number->isEven());
    }

     public function test_if_is_odd() {
       $number = new numberChecker(7);
       $this->assertFalse($number->isEven());
    }

    public function test_if_is_positive() {
        $number = new numberChecker(3);
        $this->assertTrue($number->isPositive());
    }

    public function test_if_is_negative(){
        $number = new NumberChecker(-4);
        $this->assertFalse($number->isPositive());
    }

}

?>