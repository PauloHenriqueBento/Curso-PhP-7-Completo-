<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "One@piece123");

//SQL
$login = "Ruffy";
$password = "Rei dos Piratas";
$id = 2;

$stmt = $conn->prepare("UPDATE tb_usuarios set deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");


$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados alterado!";



?>