<?php

//converta o seguinte array em string
//["o","php","é","muito","legal"]

$arr = ["o","php","é","muito","legal"];

$frase = implode(" ", $arr);

echo $frase;