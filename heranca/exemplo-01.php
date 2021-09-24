<?php

class Documento{

    private $numero;

    public function getNumero(){

        return $this -> numero;

    }

    public function setNumero($n){

        $this -> numero = $n;

    }

}

class CPF extends Documento{

    public function validar():bool{
        
        $numeroCPF = $this->getNumero(); // chama a function da class Documento

        return true;

    }

}

$doc = new CPF();

$doc -> setNumero("456933328-10");

var_dump($doc -> validar());

echo "<br>";

echo $doc -> getNumero();

?>