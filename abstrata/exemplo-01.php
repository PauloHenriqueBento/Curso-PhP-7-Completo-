<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function freiar ($velocidade);
    public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo { //Abstract: Não permite a classe ser instanciada serve de modelo para as demais classes

    public function acelerar ($velocidade){

        echo "Veiculo acelerou até <strong>" . $velocidade . " km/h</strong>";

    }

    public function freiar($velocidade){

        echo "Veiculo freiou até <strong>" . $velocidade . " km/h</strong>";

    }

    public function trocarMarcha($marcha){

        echo "Veiculo engatou a marcha <strong>" . $marcha . "</strong>";
    }

}

class DelRey extends Automovel {

    public function empurrar(){

    }

}

$carro = new Automovel();

$carro -> acelerar(200);

?>