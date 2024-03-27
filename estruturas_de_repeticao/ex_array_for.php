<!-- 
    crie um array de 1 a 10;
    utilize um loop for para criar este array
    dica: você pode utilizar o método array_push(arr,elemento) para inserir um elemento em um array;
    imprima o array criado com print_r.
 -->
<?php

$arr = [];

for($i = 1; $i <= 10; $i++){
    
    //é usada para adicionar elementos ao final de um array
    array_push($arr, $i); 


}

//é uma função que imprime informações sobre uma variável em um formato legível para humanos.
print_r($arr);