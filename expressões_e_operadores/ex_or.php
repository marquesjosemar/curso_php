<!-- verdifique as seguintes operações com OR
    12<5 OR "JOAO" === "JOAO"
    1>5 OR 1
    20 === "20" AND 51 >= 31
-->

<?php
echo "operador OR <br>";

if(12<5 || "joão" === "joão"){
    echo "operação 1 verdadeira <br>";
}

if(1>5 || 1){
    echo "operação 2 verdadeira <br>";
}


if(20 === "20" && 51 >= 31){
    echo "operação 3 FALSA <br>";
}
