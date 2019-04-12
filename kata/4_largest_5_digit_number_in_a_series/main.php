<?php

/**
 * In the following 6 digit number:
 * 283910
 * 91 is the greatest sequence of 2 consecutive digits.
 * In the following 10 digit number:
 * 1234567890
 * 67890 is the greatest sequence of 5 consecutive digits.
 *
 * Complete the solution
 * so that it returns the greatest sequence
 * of five consecutive digits found within the number given.
 * The number will be passed in as a string of only digits.
 * It should return a five digit integer.
 * The number passed may be as large as 1000 digits.
 */
function solution(string $s): int {
    //$max = 0;
    $buffer = 0;
    $digits = [];
    preg_match_all('/\d/', $s, $digits);
    $digits = $digits[0];
    foreach ($digits as $index => $digit) {
        $buffer = max($buffer, (int)implode('', array_slice($digits, $index, 5)));
    }

    return $buffer;
}