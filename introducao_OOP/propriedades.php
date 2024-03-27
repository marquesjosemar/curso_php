<?php

class Carro {
    public $rodas = 4;
    public $aro = 20;
    public $cor = "vermelha";
}


$ferrari = new Carro;
echo "ferrari " . $ferrari->cor . "<br>";
