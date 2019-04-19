<?php

require_once __DIR__."/../../vendor/autoload.php";
require_once __DIR__."/main.php";

class MyTestCases extends \PHPUnit\Framework\TestCase
{
    public function testBasic() {
        $this->assertEquals('2-7-4', dashatize(274));
        $this->assertEquals('5-3-1-1', dashatize(5311));
        $this->assertEquals('86-3-20', dashatize(86320));
        $this->assertEquals('9-7-4-3-02', dashatize(974302));
    }

    public function testWeird() {
        $this->assertEquals('0', dashatize(0));
        $this->assertEquals('1', dashatize(-1));
        $this->assertEquals('28-3-6-9', dashatize(-28369));
    }
}