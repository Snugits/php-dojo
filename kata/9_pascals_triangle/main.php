<?php

/**
 * https://www.codewars.com/kata/5226eb40316b56c8d500030f/train/php
 * Write a function that, given a depth (n),
 * returns a single-dimensional array/list representing
 * Pascal's Triangle from the first to the n-th level.
 *
 * pascals_triangle(4) == [1, 1, 1, 1, 2, 1, 1, 3, 3, 1]
 */
function pascals_triangle($n) {
    $arr = [];

    foreach (range(0, $n-1) as $sotaRow) {
        $countOfElementsInRow = $sotaRow;
        foreach (range(0, $countOfElementsInRow) as $element) {
            $arr[] = fact($sotaRow) / (fact($sotaRow - $element) * fact($element));
        }
    }

    return $arr;
}

function fact($n) {
    if($n <= 1){
        return 1;
    }
    return $n*fact($n-1);
}