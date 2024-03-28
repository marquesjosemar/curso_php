<?php

abstract class Animal {
    
}

class Cachorro extends Animal {
    public function emitirSom() {
        return "au au";
    }
}

class Gato extends Animal {
    public function emitirSom(){
        return "miau";
    }
}

$caramelo = new Cachorro;
echo $caramelo->emitirSom();