<?php

class Pessoa {
    function falar(){
        echo "Olá, eu sou um objeto! <br>";
    }

    function soma($a,$b){
        echo $a+$b . "<br>";
    }
}


$mateus = new Pessoa;
$mateus->falar();
$mateus->soma(2,1);

$joao = new Pessoa;
$joao->soma(4,6);
