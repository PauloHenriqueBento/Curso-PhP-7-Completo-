<?php

class sql extends PDO { //PDO é nativo do PhP

    private $conn;

    public function __construct(){ //Método que sempre rodará quando a classe for instanciada

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "One@piece123");

    }

    private function setParams($statment, $parameters = array()){

        foreach($parameters as $key => $value){

            $this -> setParam ($statment, $key, $value);

        }

    }

    private function setParam($statment, $key, $value){
        
        $statment -> bindParam($key, $value);

    }

    public function query($RawQuery, $params = array()){

        $stmt = $this -> conn -> prepare($RawQuery);

        $this-> setParams($stmt, $params);

        $stmt -> execute();

        return $stmt;

    }


    public function select($RawQuery, $params = array()):array{

        $stmt = $this -> query($RawQuery, $params);

        return $stmt -> fetchall(PDO::FETCH_ASSOC);

    }
}

?>