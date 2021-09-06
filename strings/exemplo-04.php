<?php

$frase = "A repetição é a mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, "mãe");

$texto = substr($frase, 0, 17);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto2);

?>