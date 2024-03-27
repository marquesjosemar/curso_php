<?php

$arr = [1,2,3,4,5,6,67,8,9,10];

function soma($a,$b){
    return $a + $b;
}

$resultado = array_reduce($arr, "soma");
echo "$resultado <br>";

