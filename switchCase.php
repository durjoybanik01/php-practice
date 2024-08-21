<?php


$n = 12;
$r = $n %2;

switch($r){
    case 0:
        echo "{$n} is an even number";
        break;
    default: 
    echo "{$n} is a odd number";
}

echo "\n";

$color = "red";

switch($color){
    case "red":
        echo "This is my favorite color";
        break;
    case "green":
        echo "This is my favorite color";
        break;
    case "blue":
        echo "This is not my favorite color";
        break;
    default:
        echo "this color is ok";
}

echo "\n";

$n = abs(13);
$r = $n % 2;

switch ($r){
    case 0:
        switch($n){
            case $n>0:
                echo "$n is a positive even number";
                break;
            case $n<0:
                echo "$n is a negative even number";
                break;
        }
        break;
    default:
       switch($n){
           case $n>0:
               echo "$n is a positive odd number";
               break;
           case $n<0:
               echo "$n is a negative odd number";
               break;
    }

}

echo "\n";

switch (true){
    case ($r==0 && $n>0):
        echo "$n is a position even number";
        break;
    case ($r==0 && $n<0):
        echo "$n is a negative even number";
        break;
    case ($r==1 && $n>0):
        echo "$n is a position odd number";
        break;
    case ($r==1 && $n<0):
        echo "$n is a negative odd number";
        break;
    }

echo "\n";

$string =  "8balls";

switch($string){
    case "9balls":
        echo "Nine Ball";
        break;
    case (string) 8: 
        echo "8";
        break;
    case "8balls":
        echo "Eight Balls";
        break;
    
}