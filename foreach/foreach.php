<h1 style="text-align: center">Menu</h1>
<?php

$menu["segunda"] = "Virada Paulista";
$menu["terca"] = "Creme de milho";
$menu["quarta"] = "feijoada";
$menu["Quinta"] = "massa";
$menu["sexta"] = "churrasco";


foreach($menu as $dia => $cardapio){
    echo "<p style='text-align: center;'>no dia $dia costuma servir <strong>$cardapio</strong></p> <br>";
}