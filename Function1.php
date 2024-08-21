<?php
function isEven($n){//parameter

if($n % 2 == 0){
    return true;
}
    return false;
}

function factorial($n){//type hinting use int,float,string
    if (getType($n)!= "integer"){
        return "Invalid";
    }
    $result = 1;
    for ($i = $n;$i>1; $i-- ){
        $result *= $i;
    }
    return $result;
}

function serve($foodType,$numberOfItems="1 cup"){
   echo "{$numberOfItems} of {$foodType} has been served";
}