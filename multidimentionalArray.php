<?php

$foods = [
    'vegetables'=> explode(', ','Brinjal, brocoli, carrot, capsicum'),
    'fruits' => explode(', ','orange, banana, apple'),
    'drinks' => explode(', ','water, milk'),
];



array_push($foods["drinks"],"orange juice");
print_r($foods);

echo $foods["vegetables"][0].PHP_EOL;

$sample =[
    'test'=>[
        'test again'=>[
            'a','b','c','d'
        ]
    ]
];

echo $sample['test']['test again'][2];

$sample2 =[
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,4444],
    [11111,22222,33333,[1,2,3]],
];

print_r($sample2);

echo $sample2[4][3][0];



