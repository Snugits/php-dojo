<?php

require_once __DIR__."/../../vendor/autoload.php";
require_once __DIR__."/main.php";

class MyTestCases extends \PHPUnit\Framework\TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {
        $s="aaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyz";
        $this->revTest(printerError($s), "3/56");
        $s = "kkkwwwaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyz";
        $this->revTest(printerError($s), "6/60");
        $s = "kkkwwwaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyzuuuuu";
        $this->revTest(printerError($s) , "11/65");
        $s = "a";
        $this->revTest(printerError($s) , "0/1");
        $s = "z";
        $this->revTest(printerError($s) , "1/1");
    }
}