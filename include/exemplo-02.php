<?php

//include "link/exemplo-01.php"; // Chama o "código" de outro arquivo
require_once "link/exemplo-01.php"; //Chama o código de outro arquivo

require_once "link/exemplo-01.php"; //Chama o código de outro arquivo

/* Diferença entre include e require

No include não é obrigatório o código existir, a aplicação rodará memso sem ele.
No require é obrigatório, se o caminho estiver errado ou o arquivo não existir, o require retornar um fatal erro
*/

//require_once evita que o require seja chamado duas vezes (impedindo dar erro)
$resultado = somar(10, 20);

echo $resultado;


?>