<?php

class Pessoa {

    public $nome;

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }


}


$pessoa1 = new Pessoa;
$pessoa1-> setNome("<h1>Josemar e Luciana</h1>");
echo $pessoa1-> getNome();
