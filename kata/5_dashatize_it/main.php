<?php

/**
 * https://www.codewars.com/kata/58223370aef9fc03fd000071/train/php
 *
 * Given a number, return a string with dash'-'marks before and after each odd integer,
 * but do not begin or end the string with a dash mark.
 * dashatize(274) -> '2-7-4'
 * dashatize(6815) -> '68-1-5'
 */
function dashatize(int $num): string {
    // Replace with your code
    $str = (string)$num;
    $arr = ['1','3','5','7','9'];
    $targetarr = ['-1-','-3-','-5-', '-7-','-9-'];
    $result = str_replace($arr, $targetarr, $str);
    $result = str_replace('--', '-', $result);
    $result = trim($result, '-');
    return $result;
}