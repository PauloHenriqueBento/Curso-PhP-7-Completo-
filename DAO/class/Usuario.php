<?php

class Usuario{
    
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    //Construction da Class usuario GET and SET

    public function getIdusuario(){
        return $this->idusuario;
    }
    public function setIdusuario($value){
        $this->idusuario = $value;
    }

    public function getDeslogin(){
        return $this->deslogin;
    }
    public function setDeslogin($value){
        $this->deslogin = $value;
    }

    public function getDessenha(){
        return $this->dessenha;
    }
    public function setDessenha($value){
        $this->dessenha = $value;
    }

    public function getDtcadastro(){
        return $this->dtcadastro;
    }
    public function setDtcadastro($value){
        $this->dtcadastro = $value;
    }

    public function loadById($id){ //Pega elemento do banco com base no ID

        $sql = new sql();

        $result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID" =>$id
        ));

        if(isset($result[0])){

            $row = $result[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));

        }

    }

    public static function getList(){ //Lista todo mundo

        $sql = new sql();

        return $sql -> select("SELECT * FROM tb_usuarios ORDER BY deslogin");

    }

    public static function search($login){ //Pesquisa usuario conforme a busca

        $sql = new sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
            ':SEARCH'=> "%".$login."%"
        ));
    }

    public function login($login, $password){

        $sql = new sql();

        $result = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
            ":LOGIN" =>$login,
            ":PASSWORD" => $password
        ));

        if(isset($result[0])){

            $row = $result[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));

        } else {

            throw new Exception("Login e/ou senha inválido");
        }

    }

    //Usa método mágico __toString para printar elemento na tela
    public function __toString(){

        return json_encode(array(
            "idusuario" => $this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }
}


?>