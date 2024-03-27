<?php

//definição do contador
$x = 0;

//inicio/definição da estrutura
while($x < 10) {

    //corpo do loop
    echo $x . "<br>";
    //incremento do contador
    $x++;
}

echo "Continuando o código <br>";

$x = 10;

//inicio/definição da estrutura
while($x > 0) {

    //corpo do loop
    echo $x . "<br>";
    //decremento do contador
    $x--;
}

echo "Continuando o código <br>";

$z = 10;

//inicio/definição da estrutura
while($z > 0){

    //corpo do loop
    if($z % 2 !=0){ //resto da divisao da variavel z, se for diferente de zero mostrar o resultado.
        echo $z . "<br>";
    }
    //decremento do contador
    $z--;
}

