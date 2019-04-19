<?php

require_once __DIR__."/../../vendor/autoload.php";
require_once __DIR__."/main.php";

class MyTestCases extends \PHPUnit\Framework\TestCase
{
    public function testBaseCase() {
        $this->assertEquals(['*'], tower_builder(1));
    }
    public function testDescriptionExamples() {
        $this->assertEquals([
            '  *  ',
            ' *** ',
            '*****'
        ], tower_builder(3));
        $this->assertEquals([
            '     *     ',
            '    ***    ',
            '   *****   ',
            '  *******  ',
            ' ********* ',
            '***********'
        ], tower_builder(6));
    }
}