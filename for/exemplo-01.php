<?php

for ($i = 0; $i < 1000; $i+=5){

    if ($i >= 200 && $i <= 800) continue; //Faz o if continuar pro prox. index sem rodar o restante

    if($i === 900)break; // Interrompe o for

    echo "O index tá na posição ". ($i) ."<br>";
}

?>