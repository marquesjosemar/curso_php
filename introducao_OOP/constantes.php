<?php 

    class Humano {
        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function mostrarConst(){
            echo self::BRACOS;
        }
    }

    $josemar = new Humano;
    echo $josemar::BRACOS;