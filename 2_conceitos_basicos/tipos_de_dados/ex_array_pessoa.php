<!-- 
    crie um array associativo com caracteristicas de uma pessoa;
    faça um if checando se ela é maior de idade e imprima uma mensagem, caso seja.

 -->

<?php

$pessoa=[
    'nome'=>'josemar',
    'idade'=> 30,
    'altura'=>1.75,
    'estado civil'=>'casado'
];

print_r($pessoa);
echo '<br>';

if($pessoa['idade']>=18){
    echo "$pessoa[nome] é maior de idade";
};