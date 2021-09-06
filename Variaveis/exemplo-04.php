<?php

$nome = (int)$_GET["a"]; //(int)força o valor que vier na URL para Integer 

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; //Pega o IP do ambiente de quem tá acessando

echo $ip;

?>