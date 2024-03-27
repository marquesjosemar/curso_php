<?php

class Carro {
    public $marca;
    public $cor;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($vel){
        $this->velocidadeMaxima = $vel;
    }

    function getVelocidadeMaxima(){
        echo "A velocidade maxima do carro é $this->velocidadeMaxima  km/h";

    }
}


//instanciando novos objetos

$bmw = new Carro;
$bmw->setVelocidadeMaxima(200);
$bmw->getVelocidadeMaxima();
echo "<br>";

$ferrari = new Carro;
$ferrari->setVelocidadeMaxima(400);
$ferrari->getVelocidadeMaxima();