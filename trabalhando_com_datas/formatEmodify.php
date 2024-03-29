<?php

// data atual
$data = new DateTime();

echo $data->format('d/m/y') . "<br>";

echo $data->format('D - M - Y') . "<br>";

// data +5 dias
$data->modify('+5 dias');
echo $data->format('d/m/y') . "<br>";