<?php

$n = "12";

//$students = array("Rahim","Karim",123,"Monir");
$students = ["Rahim","Karim",123,"Monir"];

var_dump($students);
echo count($students);
echo PHP_EOL;
$n = count($students);
for ($i=0; $i<$n; $i++){
    echo $students[$i].PHP_EOL;
}



