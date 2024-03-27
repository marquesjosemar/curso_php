<?php

/*
crie um array com os valores: batata, pera, maçã, feijão, arroz
remova maçã e feijão.
 */

$arr = ['batata', 'pera', 'maca', 'feijao', 'arroz'];

$result = array_splice($arr, 2, 2);

print_r($arr); 
echo "<br>";
print_r($result);