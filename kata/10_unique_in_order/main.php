<?php

/**
 * https://www.codewars.com/kata/54e6533c92449cc251001667/train/php
 * Implement the function unique_in_order which takes
 * as argument a sequence and returns a
 * list of items without any elements with
 * the same value next to each other
 * and preserving the original order of elements.
 *
 * uniqueInOrder('AAAABBBCCDAABBB') == ['A', 'B', 'C', 'D', 'A', 'B']
 * uniqueInOrder('ABBCcAD')         == ['A', 'B', 'C', 'c', 'A', 'D']
 * uniqueInOrder([1,2,2,3,3])       == [1,2,3]
 */
function uniqueInOrder($iterable){
    if (empty($iterable)) {
        return [];
    }

    $ret = array();

    $array = $iterable;
    if (is_string($iterable)) {
        $array = str_split($iterable);
    }

    foreach ($array as $index => $char) {
        if (!isset($iterable[$index + 1])) {
            $ret[] = $char;
            break;
        }
        if ($char !== $iterable[$index + 1]) {
            $ret[] = $char;
        }
    }

    return $ret;
}