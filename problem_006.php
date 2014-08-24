<?php

/*
 * Project Euler: https://projecteuler.net/
 */

include 'lib.php';


$numSingleSquare=0;
for($i=0;$i<101;$i++){
    $numSingleSquare+=$i*$i;
}

$numSumSquare=0;
for($i=0;$i<101;$i++){
    $numSumSquare+=$i;
}
$numSumSquare*=$numSumSquare;

echo $numSumSquare-$numSingleSquare;