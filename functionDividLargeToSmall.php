<?php

function doTheLargeTask(){
    echo "Step A done\n";
    echo "Step B done\n";
    echo "Step C done\n";
    echo "Step D done\n";
}

doTheLargeTask();

function doTaskA(){
    echo "Step A Done\n";
}
function doTaskB(){
    echo "Step B Done\n";
}
function doTaskC(){
    echo "Step C Done\n";
}
function doTaskD(){
    echo "Step D Done\n";
}

doTaskA();
doTaskB();
doTaskC();
doTaskD();
