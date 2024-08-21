<?php

$person = array('fname'=>'Hello','lname'=>'World');

print_r($person);
unset($person['lname']);//unset for delete any data from associative array
print_r($person);

