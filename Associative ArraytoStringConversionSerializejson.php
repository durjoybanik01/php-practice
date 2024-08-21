?<?php

$student = [
    'fname' => 'Durjoy',
    'lname' => 'Banik',
    'age' => '24',
    'class' => 16,
    'section' => 'B'
];

print_r($student).PHP_EOL;

echo $student['fname'].' '.$student['lname'].PHP_EOL;

printf("%s %s \n",$student['fname'],$student['lname'].PHP_EOL);

$serialized = serialize($student);

echo $serialized.PHP_EOL;


$newstudent = unserialize($serialized);
print_r($newstudent).PHP_EOL;

$jsondata = json_encode($student);
echo $jsondata.PHP_EOL;

$student2 = json_decode($jsondata,true);
print_r($jsondata).PHP_EOL;  

