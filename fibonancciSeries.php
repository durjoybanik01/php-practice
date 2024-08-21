<?php
$veryold = 0;
$old = 1;
$new = 1;
$sum = 0;

for ($i=0;$i<10;$i++){
    echo $veryold.PHP_EOL;
    $old = $new;
    $new = $old + $veryold;
    $veryold = $old;

}
/*
initial 
v = 0;
o = 1;
n = 1;
1st loop
v = 1;
o = 1;
n = 1;
2nd loop
v = 1;
o = 1;
n = 2;
3rd loop
v = 1;
o = 2;
n = 3;

