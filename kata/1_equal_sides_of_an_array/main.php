<?php

function find_even_index($arr)
{
    $left = 0;

    foreach ($arr as $key => $value) {
        $right = array_sum($arr) - $value - $left;

        if ($left === $right) {
            return $key;
        }

        $left += $value;
    }

    return -1;
}
