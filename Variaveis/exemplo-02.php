<?php
 //ini_set('display_errors', 1);
//phpinfo();
 //ini_set('display_startup_errors', 1);
 
// error_reporting(E_ALL);
//Melhor exemplo de criação de variaveis

$nomeCompleto = "Paulo Henrique bento dos Santos";
$anoNascimento = 1999;

//echo $nomeCompleto;

//Comentário de linha única
/*
Comentário de multiplas linhas (bloco de comentário)
*/

unset($nomeCompleto); // Limpa o valor na variavel


if (isset($nomeCompleto)){ // Verifica se a variavel é declarada ou é diferente de null
    echo $nomeCompleto;
}else{
    echo "A variavel nomeCompleto não foi declarada ou é nula!";
}

?>