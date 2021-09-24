<?php

class Animal {

    public function falar(){

        return "Som";

    }

    public function mover(){

        return "Andar";
        
    }

}

class Cachorro extends Animal { //Altera a propriedade do método da classe-pai

    public function falar(){

        return "Late";

    }
}

class Gato extends Animal {

    public function falar(){

        return "Mia";
    }
}

class Passaro extends Animal {

    public function falar(){

        return "canta";

    }

    public function mover(){

        return "Voa e " . parent::mover(); //Chama a atributo ou método da classe-pai
    }
}

$pluto = new Cachorro();

echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "----------------------------------------<br>";

$garfield = new Gato();

echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br>";

echo "----------------------------------------<br>";

$canario = new Passaro();

echo $canario->falar() . "<br>";
echo $canario->mover() . "<br>";
?>