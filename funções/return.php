<?php

function soma($n1,$n2){

    return $n1 + $n2;
}

$resultado = soma(2,4);

echo $resultado; 

echo "<br>";


//crie uma função que retorne um numero ao qudrado
function quadrado($num){

    $resultado = $num ** 2;
    return $resultado;
}

echo quadrado(2);