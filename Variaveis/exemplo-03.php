<?php
//Exemplo de variaveis

$nome = 'Paulo';
$sobrenome = "Bento";

$ano = 1999; //Integer
$salario = 2350.00; // Float
$bloqueado = false; //Booleano

$frutas = array("abacaxi", "laranja", "manga"); //Array

//echo $frutas[2]; //Mostrará manga pois começara com index 0

$nascimento = new DateTime();

//var_dump($nascimento);

 $arquivo = fopen("exemplo-03.php", "r"); //FILE OPEN, nesse caso abre o Exemplo.php

 //var_dump($arquivo);

$nulo = NULL; // Ausencia de valor
$vazio = ""; // Variavel iniciada e armazenada  na memória, porém sem informação

?>