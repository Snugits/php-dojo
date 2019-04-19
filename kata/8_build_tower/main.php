<?php

/**
 * https://www.codewars.com/kata/576757b1df89ecf5bd00073b/train/php
 *
 * Build Tower by the following given argument:
 * number of floors (integer and always greater than 0).
 * Tower block is represented as *
 *
 * PHP: returns an array;
 *
 * for example, a tower of 3 floors looks like below

[
'  *  ',
' *** ',
'*****'
]
 * and a tower of 6 floors looks like below
[
'     *     ',
'    ***    ',
'   *****   ',
'  *******  ',
' ********* ',
'***********'
]
 */
function tower_builder(int $n): array {
    $matrix=[];
    $maxLenght = $n * 2 - 1;
    for ($i=1; $i < $n+1; $i++){
        $currentLength = $i * 2 - 1;
        $toPad = ($maxLenght - $currentLength) / 2;
        $padding = str_repeat(" ", $toPad);
        $matrix[] = $padding . str_repeat("*", $currentLength) . $padding;
    }
    return $matrix;
}