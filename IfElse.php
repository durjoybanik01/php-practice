<?php
//1 -divisible by 4
//1 -divisible by 100
//1 -divisible by 400

$year = 2024;

if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0 ){
    echo "{$year} is a leap year";
}else if ($year % 4 == 0 && $year % 100 == 0 ){
    echo "{$year} is a leap year";
}
else if ($year % 4 == 0 ){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}

echo "\n";

if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "{$year} is a leap year";
}else {
    echo "{$year} is not a leap year";
}


