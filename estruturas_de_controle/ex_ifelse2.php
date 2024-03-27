<!-- crie uma variável que recebe um peso;
    caso seja maior que 80, imprima a msg que está pesado demais;
    se não, imprima "peso dentro do limite".
-->

<?php

$peso = 59.30;
$limite = 80;

if($peso > $limite){
    echo "está pesado demais";
} else {
    echo "peso dentro do limite!";
}
