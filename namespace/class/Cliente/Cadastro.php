<?php

namespace Cliente; //invoca a pasta anterior

class Cadastro extends \Cadastro  { //Contrabarra volta na raiz

    public function registrarVenda(){

        echo "venda registrada no nome do cliente: " . $this -> getNome();
    }

}

?>