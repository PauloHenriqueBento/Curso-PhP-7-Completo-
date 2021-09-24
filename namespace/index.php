<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad -> setNome("Paulo Bento");
$cad -> setEmail("phbento@outlook.com.br");
$cad -> setSenha ("123456");

$cad -> registrarVenda();

?>