<?php

$nomes = ['josemar', 'luciana','pedro', 'josé', 'davi', 'debora'];

foreach($nomes as $nome){
    echo( "O nome do índice atual é $nome ");
    echo "<br>";
    if ($nome == 'josemar') {
        $data_hoje = date('d/m/y');
        echo "- A data de hoje é $data_hoje";
        echo "<br>";
        
    }
    
}


echo "$data_hoje";