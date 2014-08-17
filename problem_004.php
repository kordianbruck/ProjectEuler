<?php

/*
 * Project Euler: https://projecteuler.net/
 */

$num1 = 100;
$num2 = 100;

$largestPal = 0;

for (; $num1 <= 999 ; $num1++) {
    for(;$num2 <= 999;$num2++) {
        $mul = $num1 * $num2;
        if (isPal($mul) && $mul > $largestPal) {
            $largestPal = $mul;
        }
    }
    
    $num2=100;
}

echo $largestPal;

function isPal($val) {
    return $val . '' === strrev($val);
}
