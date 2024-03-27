<!-- and: &&
or: ||
not: !  -->

<?php

// operador AND - TODAS AS PREPOSIÇÕES DEVEM SER VERDADE

if(5 > 10 && 10 > 5) { //FALSO
    echo "entrou no if 1 <br>";
}

if(50 > 10 && 10 > 5) { //verdadeira
    echo "entrou no if 2 <br>";
}

if(50 > 10 && 10 > 5) { //verdade
    echo "entrou no if 3 <br>";
}

if(50 > 10 && 10 > 500) { //falso
    echo "entrou no if 4 <br>";
}

$a = 10;
$b = 5;
$c = 12;
$d = 12;

if($a > $b && $c == $d) { //verdade
    echo "entrou no if 5 <br>";
}

if($b <= $a && $c >= $d) { //verdade
    echo "entrou no if 6 <br>";
}

if($b === $a && $c > $d) { //falso
    echo "entrou no if 7 <br>";
}

if(($b <= $a && $c >= $d) && $a > $b) { //verdade
    echo "entrou no if 8 <br>";
}
echo "<br>";
echo "Operador OR <br>";
// OPERADOR OR (OU) - APENAS UM DOS LADOS DA FRASE POSSA SER VERDADEIRO PARA O RESULTADO SER VERDADEIRO. SÓ SERÁ FALSO SE TODAS FOREM FALSAS.

if(5 > 2 || 3 < 4) { //true
    echo "A frase 1 é verdadeira <br>";
}

if(5 > 2 || 30 < 4) { //true
    echo "A frase 2 é verdadeira <br>";
}

if(5 > 20 || 3 < 4) { //true
    echo "A frase 3 é verdadeira <br>";
}

if(5 > 20 || 30 < 4) { //falsa
    echo "A frase 4 é verdadeira <br>";
}

$a = 10;
$b = 20;
$c = 30;
$d = 40;

if($a > $b || $d > $c) { //só bastou 1 sentença verdadeira pro resultado todo ser verdade.
    echo "A operação 5 é verdadeira <br>";
}

if(($a > $b || $d > $c) && $c < $d ){ //true
    echo "A operação 6 é verdadeira <br>";
}

if(($a > $b || $d > $c) || $c < $d) {
    echo "A operação 7 é verdadeira <br>";
}