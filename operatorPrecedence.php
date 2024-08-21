<?php

$f = (false || true);//true
$e = (false or true);//($e  = false) or true / $e = false;

var_dump($f,$e);


$g = (true && false);
$d = (true and false);

var_dump($g,$d);