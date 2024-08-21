<?php 

for ($i = 20;$i<50;$i++){
    if($i %13 == 0){
    echo $i;
    echo PHP_EOL;
    continue;
}
if($i %10 == 0){
    echo $i;
    echo PHP_EOL;
    break;
}
}