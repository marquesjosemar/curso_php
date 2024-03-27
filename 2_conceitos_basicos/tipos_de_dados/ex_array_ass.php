<!-- crie um array com caracteristicas de um carro; 
imprima duas caracteristicas 
-->

<?php

$carro = [
    'marca'=> 'VolksWagem', 
    'modelo'=>'gol', 
    'ano'=> 2010
];

print_r($carro);
echo '<br><br>';
echo "$carro[modelo], $carro[marca]";

