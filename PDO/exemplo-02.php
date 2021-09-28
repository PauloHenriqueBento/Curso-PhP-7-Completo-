<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "One@piece123");

//SQL
$login = "José";
$password = "1234567890";

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");


$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);


$stmt->execute();
if($stmt->execute() === true){
    echo "Execute funcionou!";
}else{
    echo "Não executou";
}



?>