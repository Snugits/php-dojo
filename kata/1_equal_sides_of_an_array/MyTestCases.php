<?php

require_once __DIR__."/../../vendor/autoload.php";
require_once __DIR__."/main.php";

class MyTestCases extends \PHPUnit\Framework\TestCase
{
    public function testIt() {
        $this->assertEquals(3,find_even_index(array(1,2,3,4,3,2,1)));
        $this->assertEquals(1,find_even_index([1,100,50,-51,1,1]));
        $this->assertEquals(-1,find_even_index([1,2,3,4,5,6]));
        $this->assertEquals(3,find_even_index([20,10,30,10,10,15,35]));
        $this->assertEquals(0,find_even_index([20,10,-80,10,10,15,35]));
        $this->assertEquals(6,find_even_index([10,-80,10,10,15,35,20]));
        $this->assertEquals(-1,find_even_index(range(1,100)));
        $this->assertEquals(0,find_even_index([0,0,0,0,0]));
        $this->assertEquals(3,find_even_index([-1,-2,-3,-4,-3,-2,-1]));
        $this->assertEquals(-1,find_even_index(range(-100,-1)));

    }
}