<?php

$arr = [
    'nome' => 'josemar',
    'idade' => 34
];

if (isset($arr['nome'])) {
    echo "a chave" . $arr['nome'] ." existe!";
};