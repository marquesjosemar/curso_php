<?php

// crie uma função que verifica se um numero é par ou impar;
// se for par imprima uma mensagem;
// se for impar imprima uma mensagem;


function parOuimpar ($num) {

    if($num % 2 == 0){
        echo " O numero $num é par <br>";
    } else {
        echo " O numero $num é impar <br>";
    }
}


parOuimpar(2);
parOuimpar(5);