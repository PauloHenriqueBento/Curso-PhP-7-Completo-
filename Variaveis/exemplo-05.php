<?php
 ini_set('display_errors', 1);

 ini_set('display_startup_errors', 1);
 
 error_reporting(E_ALL);

$nome = "Paulo";

function teste() {
    global $nome; //Pega a variavel nome que está fora do escopo teste
    echo $nome;
}

function teste2(){

    $nome = "Henrique"; //Essa variavel não interfere com a criada inicialmente, pois está funciona apenas nesse escopo
    echo $nome." teste 2";
}

teste();

teste2();

?>