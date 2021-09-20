<?php

function soma(int ...$valores):string { //Retorna o tipo atribuido dps dos dois pontos

    return array_sum($valores);

}

echo var_dump(soma(2, 2));

echo "<br>";

echo soma(25, 33);


?>