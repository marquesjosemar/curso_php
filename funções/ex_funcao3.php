<?php

// crie uma função
//  define uma variavel nome e sobrenome
//  imprima os valores concatenados


function nomeCompleto (){

    $nome = "josemar";
    $sobrenome = "marques";

    $nomeJunto = $nome . " " .  $sobrenome;
    
    echo $nomeJunto;
}

nomeCompleto();