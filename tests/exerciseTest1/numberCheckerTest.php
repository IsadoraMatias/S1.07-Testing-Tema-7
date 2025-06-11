<?php

require_once('./src/exercise1/numberChecker.php');


use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase {

    public function test_if_is_even() {
       $number = new NumberChecker(8);
       $this->assertTrue($number->isEven());
    }

     public function test_if_is_odd() {
       $number = new NumberChecker(7);
       $this->assertFalse($number->isEven());
    }

    public function test_if_is_positive() {
        $number = new NumberChecker(3);
        $this->assertTrue($number->isPositive());
    }

    public function test_if_is_negative(){
        $number = new NumberChecker(-4);
        $this->assertFalse($number->isPositive());
    }

}

?>