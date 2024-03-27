<?php

function velocidadeMaxima($vel){

echo "A velocidade máxima é de $vel km/h <br>";
}

velocidadeMaxima(50);
velocidadeMaxima(80);

echo "<br>";

function descreverAnimais($nome, $raca){

    echo "o $nome é da raça $raca <br>";
}

descreverAnimais("bob", "caramelo");
descreverAnimais("Douglas", "Pastor Alemão");


// Exercicio 33

// crie uma função;
// ela deve receber um parametro de nome, idade e genero ;
// imprima "olá eu sou o NOME  e tenho x anos"

echo "<br>";

function NomeIdade($nome,$idade,$genero){
    
    echo "Olá, eu sou $genero $nome e tenho $idade anos <br>";

}

NomeIdade("Josemar", 35, "o");
NomeIdade("Luciana", 33, "a");
