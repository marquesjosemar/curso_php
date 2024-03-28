<?php

    trait Objeto {
        public function teste(){
            echo "testando trait de objeto";
        }
    }

    class Central {
        use Objeto;
    }

    $x = new Central;
    $x->teste();