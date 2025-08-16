<?php

function describeType($var){
    $check = var_dump($var);
    return $check;
}

$d = describeType(1);
$d2 = describeType(null);
$d3 = describeType(3.25);
$d4= describeType([1,2,3,4]);
$d5 =describeType("Hello I'm Tien");

echo $d;
echo $d2;
echo $d3;
echo $d4;
echo $d5;

