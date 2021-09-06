<?php

$nome = "paulo bento";

$nome = strtoupper($nome); // Converte para Maisculo 

echo $nome . ' uppercase <br>';

$nome = strtolower($nome); // Converte para Minusculo

echo $nome . ' lowercase <br>';

echo ucfirst($nome) . '<br>'; // Apenas a primeira letra do paragrafo é maiscula

echo ucwords($nome); // Apenas a primeira letra da palavra é maiscula

?>