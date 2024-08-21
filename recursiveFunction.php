<?php

function printN($i){
    if ($i>= 10){
        return;
    }
    echo $i." ";

    $i++;

    printN($i);
}

printN(1);

//recursive function 

echo PHP_EOL;
function printNumber($counter,$end,$stepping=1){
    if($counter >$end){
        return;
    }
    echo $counter." ";
    $counter += $stepping;
    printNumber($counter,$end,$stepping);

}

printNumber(21,32,2);


echo PHP_EOL;
//Fibonacci series 

function fibonacci($old,$new,$end){

    static $start;
    $start = $start ?? 1;
    if ($start > $end){
        return;
    }
    $start++;
    
    echo $old." ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci($old, $new, $end);
}

fibonacci(0,1,10);

