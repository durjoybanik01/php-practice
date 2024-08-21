<?php

$students = [//associative array
    "12"=>"Hasan",
    "23"=>"Karim",
    "34"=>"Rahim"
];

echo $students["12"].PHP_EOL;

$foods =[
    "vegetables"=>"Brinjal,Brocolis,Carrot,Capsicum",
    "Fruits"=>"Orange,banana,apple",
    "Drinks"=>"water,milk"
];

//$foods['Drinks']=$foods['Drinks'].",Orange Juice";
$foods['Drinks'].=",Orange Juice";

echo count($foods).PHP_EOL;

echo $foods["vegetables"].PHP_EOL;
echo $foods["Fruits"].PHP_EOL;
echo $foods["Drinks"],PHP_EOL.PHP_EOL;

foreach ($foods as $key=>$value){
    echo $key."=".$value.PHP_EOL;
}

echo PHP_EOL;

$keys = array_keys($foods);
for ($i=0; $i<count($keys); $i++){
    $key = $keys[$i];
    echo $foods[$key].PHP_EOL;
}

echo PHP_EOL;

$values = array_values($foods);
for ($i=0; $i<count($values);$i++){
    $value = $values[$i];
    echo $value.PHP_EOL;
}


