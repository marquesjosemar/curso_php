<!-- 
    crie um loop que vai até o numero 30;
    o contador deve iniciar como 4;
    faça incrementos de 2 em 2 no contador;
    utilize o break para parar o loop quando o contador chegar no numero 24.
 -->

 <?php

$limite = 30;
$cont = 4;

 while($cont < $limite) {
    echo "Executando o loop $cont <br>";

    if($cont === 24){
        echo "Parando o loop";
        break;
    }
    

    $cont += 2;
}
