<?php

abstract class Automovel implements Veiculo { //Abstract: Não permite a classe ser instanciada

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

?>