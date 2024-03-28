<?php

class Humano {

}

class Animal {

}

$marcos = new Humano;

if($marcos instanceof Humano){
    echo "Marcos é humano <br>";
} else {
    echo "marcos não é humano <br>";
}