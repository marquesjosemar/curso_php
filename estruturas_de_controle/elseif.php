<!-- 
    crie uma variavel que recebe uma velocidade de uma carro;
    depois crie uma estrutura if que verifica essa velocidade;
    se a velocidade for menor que 40, imprima que o motorista está na velocidade correta;
    se igual a 40, imprima pa o motorista tomar cuidado;
    se maior de 40, imprima uma mensagem de multa. 
 -->


<?php

$velocidade = 50;
$limite = 40;

if($velocidade < $limite){
    echo "o motorista está na velocidade correta";
} else if ($velocidade == $limite) {
    echo "tome cuidado!";
} else if ($velocidade > $limite){
    echo "você foi multado!";

}





