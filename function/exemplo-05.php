<?php

$a = 10;

function trocaValor(&$b){ //passagem de parametro por referencia

    $b += 50;

    return $b;

}

echo $a; //10

echo "<br>";

echo trocaValor($a); // 60

echo "<br>";

echo trocaValor($a); // 110

echo "<br>";

echo trocaValor($a); //160

echo "<br>";

echo trocaValor($a); //210


?>