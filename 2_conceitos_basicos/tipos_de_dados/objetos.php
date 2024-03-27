<?php

    class Pessoa {

        function falar() {
            echo "Olá pessoal!";
        }

    }

    $josemar = new Pessoa();
    $josemar ->nome = "josemar";

    echo $josemar ->nome;
    echo '<br>';

    $josemar->falar();
?>