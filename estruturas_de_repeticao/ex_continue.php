<!-- 
    crie um array com valores inteiros de 10 a 100, com incremento de 10;
    aplique um loop neste array
    quando entrar os valores 30 ou 40, pule para a proxima execução.
 -->

 <?php

 $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$i = 0;

 while($i < count($arr)) {

    $numeroAtual = $arr[$i]; //só pra facilitar na leitura do continue
    
    if($numeroAtual == 30 || $numeroAtual == 40) {
        echo "pulou $numeroAtual <br>";
        $i++;
        continue;
    }

    echo "elemento: $numeroAtual <br>" ;
    
    $i++;
 }