<?php

function getArray(){
    $Arr =[1,2,3,4,5];
    return $Arr;
}

function SumArray(){
    $x = array_sum(getArray()); // dùng array_sum để tính tổng các phần tử trong một array
    return $x;
}

print_r(getArray());

var_dump(getArray());

echo SumArray();