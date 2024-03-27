<?php

$a = 10;

while($a > 0) {

    if($a === 5 || $a === 2){
        echo "Pulou a execução $a <br>";
        $a--;
    }
    
    //pode-se colocar o break tambem para parar a execução em algum determinado ponto da contagem.
    
    echo "Executando o loop $a <br>";

    $a--;
}