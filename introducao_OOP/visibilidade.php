<?php

    class Pessoa {
        private $nome;

        private function saudacao(){
            return "olá, meu nome é " . $this->nome;
        }

        public function mostrarSaudacao(){
            return $this->saudacao();
        }
    }


    $pessoa1 = new Pessoa;
    //$pessoa1->nome = "josemar"; dá erro
    echo $pessoa1->mostrarSaudacao();
