<?php

for ($i=1; $i <= 5; $i++){
    //echo $i;
    echo PHP_EOL;
    for ($j=0; $j<$i ;$j++){
        echo "&";
    }
}

echo PHP_EOL;
$i = 0;

while ($i<10){
    $i++;
    echo $i.PHP_EOL;
}
echo PHP_EOL;
$i = 0;
do{
    $i++;
    echo $i.PHP_EOL;
}while($i<10);

echo PHP_EOL;

$i =0;

a: $i++;
echo $i.PHP_EOL;
if($i<10) goto a;

echo PHP_EOL;

for ($i = 10,$j = 1 ; $i>0 ; $i-- , $j++){
    echo $i.":".$j;
    echo $i.":".(11-$i);
    echo PHP_EOL;
}

echo PHP_EOL;

for ($i=0; $i<100; $i++){
    //if ($i % 7 == 0) echo $i."\n";
    //if ($i % 11 == 0) echo $i."\n";

    echo $i % 7 == 0 ? $i. "\n":'';
    echo $i % 11 == 0 ? $i. "\n":'';
}

echo PHP_EOL;

for ($i=0,$j=0; $i<100 ;$i+=7,$j+=11 ){
    echo $i.PHP_EOL;
    echo $j<100 ? $j.PHP_EOL:"";
}

echo PHP_EOL;

$i=0;

while ($i<5){
    echo $i;
    echo PHP_EOL;
    $i++;
}
echo "=========\n";
$j=0;

while ($j++<5){
    echo $j;
    echo PHP_EOL;
}
echo "=========\n";
$j=0;

while (++$j<5){
    echo $j;
    echo PHP_EOL;
}
echo "=========\n";


