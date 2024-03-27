<!-- crie um array com alguns valores (pelo menos 10) de tipos de dados diferentes;
    faça um loop while para exibir apenas os dados que são strings
 -->

<?php

$todosTipos = ["josemar",10, 120.20, true, [], "marques", "alô", false];
$x = count($todosTipos); //função count
$y = 0;

while( $y < $x){

    //checando o indice do array
    if(is_string($todosTipos[$y])) {
        echo $todosTipos[$y] . "<br>"; //checando se y é string
    }

$y++;

}

