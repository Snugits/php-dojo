<?php

require_once __DIR__."/../../vendor/autoload.php";
require_once __DIR__."/main.php";

class MyTestCases extends \PHPUnit\Framework\TestCase
{
    public function testSampleTests() {
        $this->assertEquals([ 8, 64 ], parse("iiisdoso"));
        $this->assertEquals([ 8, 64 ], parse("iiisxxxdoso"));
    }
}