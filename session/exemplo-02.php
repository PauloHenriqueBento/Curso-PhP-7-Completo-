<?php

require_once("config.php");

session_unset($_SESSION['nome']); //Limpa uma variavel de sessão
//Senão colocar a variavel ele apaga todas as variaveis de sessão

echo $_SESSION['nome']; //Mostra a sessão

session_destroy(); // Limpa variaveis e remove usuário.

?>