<?php

//Cria um exemplo de o que uma classe deve ter. É obrigatório ter essas informações
interface Veiculo {

    public function acelerar($velocidade);
    public function freiar ($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo {

    public function acelerar ($velocidade){

        echo "Veiculo acelerou até <strong>" . $velocidade . " km/h</strong>";

    }

    public function freiar($velocidade){

        echo "Veiculo freiou até <strong>" . $velocidade . " km/h</strong>";

    }

    public function trocarMarcha($marcha){

        echo "Veiculo engatou a marcha <strong>" . $marcha . "</strong>";
    }

    /*public function get_capacidadeTanque($litros){
        echo "O tanque tem: $litros L";
    }*/

}

$carro = new Civic;
$carro->trocarMarcha(1);
echo "<br>";
$carro->acelerar(30);
echo "<br>";
$carro->trocarMarcha(2);
echo "<br>";
$carro->acelerar(60);
echo "<br>";
$carro->trocarMarcha(1);
echo "<br>";
$carro->freiar(30);
echo "<br>";
//$carro->get_capacidadeTanque(45);

?>