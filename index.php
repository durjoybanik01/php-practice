<?php
echo "Hello World!";

//variable 
$name ="Bangladesh0";
$age = 123;

echo $name;
echo $age;

$my_name = "hello my name is durjoy\n";
echo $my_name;
echo " Hello ",$name;
echo "\n";
echo  "Hello $name \n";
echo "Hello {$name} \n";

define('pi',3.1416);
echo "value of pi = ".pi,"\n";
echo constant("pi");

$pi = 3.1416;
$constant = 'constant';

echo "Value of PI ={$constant('pi')} \n";


$name = "Earth";
var_dump( $name );

 /* 
 Integer Int
 double / float 
 Null
 string
 object
 resource
 Array
 boolean*/

 $result = true;
 var_dump( $result);

 $name = "Earth";
 echo 'we\'re living on '.$name,"\n";
 printf(" we're living on %s \n",$name);

 $fname = "Durjoy";
 $lname = "Banik";
 printf("My %s name is %s %s","full", $fname,$lname);

