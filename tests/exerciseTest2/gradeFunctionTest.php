<?php

require_once('./src/exercise2/gradeFunction.php');

use PHPUnit\Framework\TestCase;

class gradeFunctionTest extends TestCase{
    
  public function test_if_student_in_first_division(): void{
        $this->assertEquals("This student belongs to First division",grade(61));
        $this->assertEquals("This student belongs to First division",grade(60));
   }
     
    public function test_if_student_in_second_division(): void{
        $this->assertEquals("This student belongs to Second division",grade(59));
        $this->assertEquals("This student belongs to Second division",grade(46));
        $this->assertEquals("This student belongs to Second division",grade(45));
  }

    public function test_if_student_in_third_division(): void{
        $this->assertEquals("This student belongs to Third division",grade(44));
        $this->assertEquals("This student belongs to Third division",grade(34));
        $this->assertEquals("This student belongs to Third division",grade(33));
    }

    public function test_if_student_fail(): void{
        $this->assertEquals("This student failed", grade(32));
        $this->assertEquals("This student failed", grade(31));
        $this->assertEquals("This student failed", grade(0));
        $this->assertEquals("This student failed", grade(-1));
    }
}
?>