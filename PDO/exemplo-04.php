<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "One@piece123");

$id = 1;

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado";

?>