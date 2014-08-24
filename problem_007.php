<?php

/*
 * Project Euler: https://projecteuler.net/
 */
include 'lib.php';

$currPrime = 0;
for ($i = 0; $i < 10001; $i++) {
    $currPrime = gmp_nextprime($currPrime);
} 
echo gmp_strval($currPrime);