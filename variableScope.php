<?php

/*$name = "Earth";// global scope


function doSomeThing(){
   // echo $name;
   global $name;
    echo $name;
}

doSomeThing();*/

/*function doSomeThing(){// local Scope
    $name = "Earth";
    echo $name;
}

doSomeThing();*/

function doSomeThing(){
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo PHP_EOL;

}

doSomeThing();
doSomeThing();
doSomeThing();
doSomeThing();

function doExtra(){
    static $i;
    $i = $i ?? 0;
    echo $i;
}

doExtra();

