<?php

/*
crie uma class cachorro
crie o metodo latir e andar
execute o metodo em novas instancias da classe */


class Cachorro {

    function latir(){
        echo "au au <br>";
    }

    function andar(){
        echo "agora estou andando";
    }
}

$caramelo = new Cachorro;
$caramelo->latir();
$caramelo->andar();

//posso criar outras instancias da classe e chamar os mesmos métodos.