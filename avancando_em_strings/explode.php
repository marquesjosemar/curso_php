<?php

$fraseB = "Carro, Avião, Barco, Navio";

$fraseBArray = explode(",", $fraseB); //agora já virou array

for ($i=0; $i < count($fraseBArray) ; $i++) { 
    echo "$fraseBArray[$i] <br>";
}

echo "<br>";

$veiculos = "carro-navio-helicoptero-barco-jangada";

$veiculosArray = explode("-", $veiculos);

for($i=0; $i < count($veiculosArray); $i++){
    echo "$veiculosArray[$i] <br>";

}