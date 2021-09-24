<?php

//Ao se referenciar a um atributo ou método de uma classe, usar o "->"

class Pessoa {

    public $nome; //Atributo da classe

    public function falar(){ //Método

        return "Salve familía, meu nome é $this->nome!";//this chama atributo dentro da class

    }

}

$paulo = new Pessoa();
$paulo->nome = "Paulo Bento";
echo $paulo->falar();

?>