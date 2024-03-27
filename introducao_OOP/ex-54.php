<?php

class Pessoa {
    public $nome;
    public $idade;

    function andar($m){
        echo "A pessoa andou $m metros";
    }
}

$josemar = new Pessoa;
$josemar->nome = "JOsemar";
$josemar->idade = 34;


echo "O nome dele é $josemar->nome e tem $josemar->idade anos";



$josemar->andar(20);