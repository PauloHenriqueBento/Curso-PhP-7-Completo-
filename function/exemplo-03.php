<?php

function ola($texto, $periodo="Bom dia"){
    return "Olá $texto! $periodo!<br>";
}

echo ola("mundo"); //Se deixar em branco, pega o valor na hora de criar a function
echo ola("","Boa noite"); // Deixa espaço vazio
echo ola("Bento","Boa tarde");
echo ola("Henrique","");

?>