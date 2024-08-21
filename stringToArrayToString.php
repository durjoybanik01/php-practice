<?php

$vegetables = explode(",","DURJOY,BANIK,is,a,boy");//explode uses to convert string to array

echo $vegetables[0].PHP_EOL;
echo count($vegetables)."\n";

$vegetablesString = join (',',$vegetables);//join uses to convert array to string

echo $vegetablesString.PHP_EOL;

$vegetables = preg_split("/(, |,)/","DURJOY, BANIK, is, a,boy");
print_r($vegetables);