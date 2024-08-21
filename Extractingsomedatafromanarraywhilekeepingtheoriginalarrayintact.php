<?php

$fruits = array('apple','banana','orange','plum','dates','mango');

$random = ['a'=> 12,'b'=> 13,'c' => 14,'d'=> 15,'e'=> 16,'f'=>17,12 => 18];

// $someFruits = array_slice($fruits,2);
//$someFruits = array_slice($fruits,2,2);
//$someFruits = array_slice($fruits,-5,-1);
//$someFruits = array_slice($fruits,3,3,true);
$randomData = array_slice ($random,3,null,true);


//print_r($someFruits);
print_r($randomData);