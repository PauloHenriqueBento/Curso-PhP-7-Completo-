<?php

require_once("config.php");

//Retorna 1 usuário do banco
//$root = new Usuario();
//$root -> loadById(2);
//echo $root;


//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista)


//Carrega lista de usuarios buscando pelo login
//$search = Usuario::search("Amarilis");
//echo json_encode($search);

//Login
$user = new Usuario();
$user->login("Ruffy", "Rei dos Piratas");

echo $user;


?>