<?php

function sum( int $x = 0, int $y = 0 , int $z = 0):int{
    return $x+$y+$z;
}

echo sum(4,5,6);

echo PHP_EOL;

function total(int ...$numbers):int{
    $result =0;
    for($i = 0;$i < count($numbers); $i++){
        $result += $numbers[$i];
    }
    return $result;
}

echo total(1,2,3,4,5);