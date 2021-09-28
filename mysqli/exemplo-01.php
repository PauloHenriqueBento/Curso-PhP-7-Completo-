<?php

$conn = new mysqli("localhost", "root", "One@piece123", "dbphp7");
//mysqli(endereço, login, senha, nome-do-banco)

if ($conn -> connect_error){

    echo "Error: " . $conn -> connect_error;

} else{
    
    echo "<h1 style='text-align:center'>Banco de dados Conectado</h1> <br><div style='text-align:center'><img src='https://cdn2br.mundo.com/fotos/201801/13-2-600x400.jpg'></div>";

}

$atmt = $conn -> prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$atmt -> bind_param("ss", $login, $pass);

$login = "Luffy";
$pass = "carne";

$atmt -> execute();

?>