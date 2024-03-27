<?php

$josemar = [
    'nome' => 'josemar',
    'idade' => 34,
    'profissao' => 'desenvolvedor'
];

foreach($josemar as $carac => $value){
    echo "$carac => $value <br>";
};

echo "<br>";

$numeros = [1,2,3,4,5,6];

foreach ($numeros as $num => $value) {
    echo $num . '<br>';
}