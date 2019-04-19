<?php

/**
 * https://www.codewars.com/kata/51e0007c1f9378fa810002a9/train/php
 *
 * Write a simple parser that will parse and run Deadfish.
 * Deadfish has 4 commands, each 1 character long:
 * - i increments the value (initially 0)
 * - d decrements the value
 * - s squares the value
 * - o outputs the value into the return array
 * Invalid characters should be ignored.
 * iiisdoso
 */
function parse($data) {
    $output=[];
    $val=0;
    foreach(str_split($data) as $value){
        switch($value){
            case 'i': $val++;break;
            case 'd': $val--; break;
            case 's': $val **= 2; break;
            case 'o': $output[] = $val; break;
        }
    }
    return $output;
}