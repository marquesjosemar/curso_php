<?php
//escolhendo nome do animal através do this e OOP
class Animal {

    public $nome;

    function escolherNome($nome){
        $this->nome = $nome;
    }

    function latir(){
        return "au au";
    }
}

$frida = new Animal;
echo "o nome do animal é:  $frida->nome <br>";

$frida->escolherNome("Frida");
echo "o nome do animal é: $frida->nome";

$frida->latir();
