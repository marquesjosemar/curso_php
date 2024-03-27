<?php

$str1 = "esta frase é muito grande";
$str2 = "esta não";

echo strlen($str1) . "<br>";
echo strlen($str2) . "<br>";

$tam1 = strlen($str1);
$tam2 = strlen($str2);

    if ($tam1 > $tam2) {
        echo "A frase 1 é maior que a frase 2";
    } else {
        echo "a frase 2 é maior que a frase 1";
    }