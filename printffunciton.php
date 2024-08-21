<?php 
$fname = "Durjoy";
$lname = "Banik";

printf("His name is  %s %s \n",$fname,$lname);
printf('His name is  %2$s %1$s',$fname,$lname);//argument
echo "\n";

printf("The binary equivalent of %d is %b \n",12,12);
printf('The binary equivalent of %1$d is %1$b',12);
echo "\n";

$n = 45.126;
printf("%.2f \n",$n);

$m = 123;
$n =27;
printf("%04d \n",$m);
printf("%04d \n",$n);

$m = 123.932;
$n =27.23;

printf("%07.2f \n",$m);
printf("%07.2f \n",$n);

