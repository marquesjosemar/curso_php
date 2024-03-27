<!-- crie algumas variáveis com tipos de dados diferentes, strings, int e boolean, etc 
    cheque se a variavel é um inteiro com a função is_int()
    caso sim, apresente uma mensagem confirmando o tipo de dado
    caso não, apresente outra mensagem.

-->

<?php

$a= 10;
$b = "não é dado";
$c = true;

if(is_int($a)){
    echo "é um inteiro 1 <br>";
} else {
    echo "não é um inteiro";
}

if(is_int($b)){
    echo "é um inteiro 2 <br>";
} else {
    echo "não é um inteiro - variável 2 <br>";
}

if(is_int($c)){
    echo "é um inteiro 3 <br>";
} else {
    echo "não é um inteiro - variável 3 <br>";
}