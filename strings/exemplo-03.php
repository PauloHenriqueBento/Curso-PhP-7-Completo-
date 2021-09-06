<?php

$empresa = "Hcode";

//troca as letras, (letra original, a que quer trocar, variavel)
$empresa = str_replace ("o", "0", $empresa);
$empresa = str_replace ("e", "3", $empresa);

echo $empresa;

?>