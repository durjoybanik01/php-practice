<?php

$person = array ('fname'=>'Hello','lname'=>'world');
$newperson = $person;
$newperson['lname']='Durjoy';

print_r($person);
print_r($newperson);
//copy by value /deep value
//copy by reference /shallow copy/use &

function printData(&$person){
    $person['fname'] .= " changed";
    print_r($person);
}

printData($person);
print_r($person);