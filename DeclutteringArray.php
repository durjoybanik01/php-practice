<?php

$fruits = array('apple','banana','orange','plum','dates','mango');

$random = ['a'=> 12,'b'=> 13,'c' => 14,'d'=> 15,'e'=> 16,'f'=>17,12 => 18];

$newFruits = array("Jackfruits","tamarind","pineapple");
$someFruits = array_splice($fruits,2,2,$newFruits);

print_r($someFruits);
print_r($fruits);


