<?php

/*
 * Project Euler: https://projecteuler.net/
 */
$factors=primefactor(600851475143);
sort($factors);
echo array_pop($factors);

function primefactor($num) {
    $sqrt = sqrt($num);
    for ($i = 2; $i <= $sqrt; $i++) {
        if ($num % $i == 0) {
            return array_merge(primefactor($num / $i), array($i));
        }
    }
    return array($num);
}