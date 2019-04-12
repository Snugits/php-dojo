<?php

require_once __DIR__."/../../vendor/autoload.php";
require_once __DIR__."/main.php";

class MyTestCases extends \PHPUnit\Framework\TestCase
{
    public function testSampleTests() {
        $this->assertEquals("42 -9", highAndLow("8 3 -5 42 -1 0 0 -9 4 7 4 -4"));
    }
}