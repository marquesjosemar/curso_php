<!-- crie variaveis que recebem idades
    cheque se as idades são maiores ou iguais a 18
    se sim, imprima uma mensagem que a pessoa é maior de idade.
 -->

 <?php

 $idade1 = 15;
 $idade2 = 18;
 $idade3 = 20;
 
 $maioridade = 18;

 $msg = "é maior de idade";

 
 if($idade1 >= $maioridade){
    echo "1 - ";
    echo $msg . "<br>";
 } else{
    echo "1 - ";
    echo "essa pessoa é menor de idade <br>";
 }

 if($idade2 >= $maioridade){
    echo "2 - ";
    echo $msg . "<br>";
 }

 if($idade3 >= $maioridade){
    echo "3 - ";
    echo $msg . "<br>";
 }