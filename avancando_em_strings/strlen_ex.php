<?php

$frase = "O rato roeu a roupa do rei de roma";
$contadordeAs = 0;

for ($i=0; $i < strlen($frase); $i++) { 

    if($frase[$i] == "a"){
        $contadordeAs++;
    }
   
    
}

echo "O numero de letras a é: $contadordeAs";