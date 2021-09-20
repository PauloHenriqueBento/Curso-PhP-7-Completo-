<?php

function ola(){

    $argumentos = func_get_args(); //Cria um array com todos os parametros recebidos

    return $argumentos;

}

var_dump(ola("Bom dia"));

?>