<?php

class Pessoa {

    public $nome = "Rasputin";
    protected $idade = 45;
    private $senha = "123456";

    public function verDados(){

        echo $this->nome    . '<br>';
        echo $this->idade   . '<br>';
        echo $this->senha   . '<br>';

    }

}

$objeto = new Pessoa();

//echo $objeto->nome . "<br>"; //Public pode ser acessada fora da class
//echo $objeto->idade . "<br>"; //Protectec só pode ser acessada quem está dentro da própria classe ou quem herda
//echo $objeto->senha . "<br>"; // Mesma coisa do Protected, diferença que os herdeiros não pode receber

$objeto->verDados(); // Por ser um metodo da mesma classe que tá o Protected e o Private... ele mostra as informações

?>