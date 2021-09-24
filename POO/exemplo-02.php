<?php

class Carro {

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){ // get = pegar | Pega o valor de um atributo

        return $this->modelo;

    }

    public function setModelo($modelo){ // set = definir | Altera o valor de um atributo

        $this->modelo =  $modelo;

    }
    
    public function getMotor():float{

        return $this -> motor;

    }

    public function setMotor($motor){

        $this->motor = $motor;

    }

    public function getAno():int{

        return $this -> ano;

    }

    public function setAno($ano){

        $this->ano = $ano;

    }

    public function exibir(){

        return array(
            "modelo"   =>$this->getModelo(),
            "motor"    =>$this->getMotor(),
            "ano"      =>$this->getAno()
        );
    }

}

$gol = new Carro();
//$gol -> modelo = "Gol GT"; metodo para atribuir valor publico. retornará erro fatal se usar em atributo privado;
$gol -> setModelo("Gol Gt");
$gol -> setMotor("1.6");
$gol -> setAno("2017");
echo 'O modelo do carro é: <strong>' . $gol -> getModelo() . '</strong>';
echo "<br>";
echo 'O motor dele: <strong>' . $gol -> getMotor() . '</strong>';
echo "<br>";
echo 'E o ano: <strong>' . $gol -> getAno() . '</strong>';

echo "<br>";

print_r($gol);

?>