<?php

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){

        $this -> logradouro = $a;
        $this -> numero     = $b;
        $this -> cidade     = $c;

    }

    public function __destruct(){ // "mata" variavel

       // var_dump("Destruir");

    }

    public function __toString(){

        return $this -> logradouro . ", " . $this -> numero . " - " . $this -> cidade;

    }

}

$meuEndereco = new Endereco("Rua prof cardoso Rangel", "21", "SP");

//var_dump($meuEndereco);
//print_r($meuEndereco);

//unset($meuEndereco);

echo $meuEndereco;

?>