<?php

$fruits = ['apple','banana','orange','plum','dates','mango'];
$random = array('a'=>12,'f'=>23,'b'=>3,'c'=>1,'d'=>4);


// $newFruits1 = array_slice($fruits,0,3);
// $newFruits2 = array_slice($fruits,3,null,true);

// $newFruits = array_merge($newFruits1,$newFruits2);
 
// print_r($newFruits1);
// print_r($newFruits2);
// print_r($newFruits);

// $newFruitsPlus = $newFruits1 + $newFruits2;

// print_r($newFruitsPlus);

$r1 = array_slice($random,0,2,true);
$r2 = array_slice($random,2,null,true);
$r3 = array('j'=>34,'k'=>32);
$randomData = array_splice($random,2,2,array('j'=>34,'k'=>32));
$radomCorrection = $r1+$r2+$r3;

print_r($random);
print_r($randomCorrection);
print_r($randomData);

