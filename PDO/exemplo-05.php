<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "One@piece123");

$conn->beginTransaction();

$id = 3;

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();
echo "Deletado";

?>