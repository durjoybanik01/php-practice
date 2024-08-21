?<?php
/**
 * Summary of isEven
 * @param mixed $n
 * @return bool
 */

include_once "Function1.php";

$x = 4;

if(isEven($x)){
    echo "{$x} is an even number.";
}else {
    echo "{$x} is a odd number.";  
}

echo PHP_EOL;

//factorial 
$x = "ere";
echo "Factorial of {$x} is ".factorial($x);

echo PHP_EOL;
//optional parameter

$ft = "coffee";
$n = "2 cups";

serve($ft,$n);
