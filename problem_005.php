<?php

/*
 * Project Euler: https://projecteuler.net/
 */
error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 1);
set_time_limit(300);

$smallest = 0;
$done=false;

for ($num1=1; $num1 <= 500000000 && $done===false;  $num1++) {
    $done=true;
    
    for($i=1;$i <= 20 && $done===true;$i++) {
        if (($num1%$i) !== 0) {
            $done=false;
        }
    }
    
    $smallest=$num1;
}

echo $smallest;
