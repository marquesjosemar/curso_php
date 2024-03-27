

<?php

$arr = [];

for($i = 1; $i <= 20; $i++){

    //adiciona elementos ao array
    array_push($arr, $i);

    
}

//outro loop que itera sobre o array
for ($i = 0; $i < count($arr); $i++) {
    
    //Se o resto da divisão de $arr[$i] por 2 for diferente de zero, significa que o número é ímpar.
    if($arr[$i] % 2 !=0){
        echo "numero impar: $arr[$i] <br>";
    }
}
