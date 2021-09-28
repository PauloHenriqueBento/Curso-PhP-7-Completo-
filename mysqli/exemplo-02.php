<?php

$conn = new mysqli("localhost", "root", "One@piece123", "dbphp7"); //tabela de conexão
//mysqli(endereço, login, senha, nome-do-banco)

if ($conn -> connect_error){

    echo "Error: " . $conn -> connect_error;

} else{
    
    echo "<h1 style='text-align:center'>Banco de dados Conectado</h1> <br><div style='text-align:center'><img src='https://cdn2br.mundo.com/fotos/201801/13-2-600x400.jpg'></div>";

}

$result = $conn -> query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

//var_dump($result);

while ($row = $result->fetch_array(MYSQLI_ASSOC)){

    array_push($data, $row); //Adiciona novo item no array data, o que tiver no row
    //var_dump($row);

}

echo json_encode($data);

?>