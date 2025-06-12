<?php

require_once('./src/exercise1/numberChecker.php');


use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase {

    public function test_if_is_even(): void {
       $number = new NumberChecker(8);
       $this->assertTrue($number->isEven());
    }

     public function test_if_is_odd(): void {
       $number = new NumberChecker(7);
       $this->assertFalse($number->isEven());
    }

    public function test_if_is_positive(): void {
        $number = new NumberChecker(3);
        $this->assertTrue($number->isPositive());
    }

    public function test_if_is_negative(): void{
        $number = new NumberChecker(-4);
        $this->assertFalse($number->isPositive());
    }

}

?>