<?php

$i = 0;

    while($i <= 10){
        echo "Loop Externo $i <br>";

            //segundo contador
            $j = 1;
            while($j <= 5){
                echo "Loop interno $j <br>";
                $j++;
            }
        $i++;
    }