<?php

$a = NULL;

$b = 4;

$c = 10;

echo $a ?? $b ?? $c; //Se não tiver valor na primeira variavel, mostra a seguinte, e assim sucessivamente. Até encontrar uma com valor.

?>