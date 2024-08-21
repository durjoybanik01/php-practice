<?php

$students = ["Rahim","Karim","Durjoy"];

$students[2]="Hello World";


// $n = count($students);
// for ($i = 0; $i < $n ; $i++){
//     echo $students[$i].PHP_EOL;
// }

array_pop($students);
array_shift($students);

//echo $student.PHP_EOL;

$students[]="Jamal";
array_push($students, "Goal");
array_unshift($students,"Salam");
 
$n = count($students);
for ($i = 0; $i < $n ; $i++){
    echo $students[$i].PHP_EOL;
}


