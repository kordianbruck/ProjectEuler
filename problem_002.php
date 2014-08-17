<?php

/*
 * Project Euler: https://projecteuler.net/
 */

$sum = 2;
$prev1=2;
$prev2=1;
$fib=0;
while ($fib < 4000000) {
    $fib=$prev1+$prev2;
    
    if ((($fib % 2) === 0)) {
        $sum += $fib;
    }
    
    $prev2=$prev1;
    $prev1=$fib;
    
}
echo $sum;
