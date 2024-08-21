<?php

$name;

if (isset($name)){
    echo "Name is set";
}else{
    echo "Not set";
}
echo PHP_EOL;
if (empty($name)){
    echo "Name is empty";
}else{
    echo "Not empty";
}
echo PHP_EOL;

if (empty($name)&&isset($name)){
    echo "Name is empty & set";
}else{
    echo "Not empty & set";
}

