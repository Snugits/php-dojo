<?php

require_once __DIR__."/../../vendor/autoload.php";
require_once __DIR__."/main.php";

class MyTestCases extends \PHPUnit\Framework\TestCase
{
    public function testExamples() {
        $this->assertEquals([1], pascals_triangle(1));
        $this->assertEquals([1, 1, 1], pascals_triangle(2));
        $this->assertEquals([1, 1, 1, 1, 2, 1], pascals_triangle(3));
        $this->assertEquals([1, 1, 1, 1, 2, 1, 1, 3, 3, 1], pascals_triangle(4));
        $this->assertEquals([1, 1, 1, 1, 2, 1, 1, 3, 3, 1, 1, 4, 6, 4, 1], pascals_triangle(5));
    }
}