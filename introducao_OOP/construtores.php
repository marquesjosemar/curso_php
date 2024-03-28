<?php

    class Carro {
        public $portas;
        public $cor;
        public $marca;

        function __construct($portas, $cor, $marca){
            $this->portas = $portas;
            $this ->cor = $cor;
            $this -> marca = $marca;
        }
    }

    $ferrari = new Carro(4, "vermelha","ferrari");

    echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor";