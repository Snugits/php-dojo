<?php

require_once __DIR__."/../../vendor/autoload.php";
require_once __DIR__."/main.php";

class MyTestCases extends \PHPUnit\Framework\TestCase
{
    public function testSampleTest() {
        $this->assertEquals(['A','B','C','D','A','B'], uniqueInOrder('AAAABBBCCDAABBB'));
    }
}