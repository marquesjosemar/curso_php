<?php

class Humano {
    public function falar(){
        echo "Olá mundo! <br>";
    }

    private function gritar(){
        echo "estou gritando <br>";
    }

    public function acessarGritar(){
        $this->gritar();
    }

    protected function falarBaixo(){
        echo "xiiiii";
    }
}

class Programador extends Humano {
    public function acessarFalarBaixo(){
        $this->falarBaixo();
    }
}


$jose = new Programador;
$jose->falar();
$jose->acessarGritar();
$jose->acessarFalarBaixo();
