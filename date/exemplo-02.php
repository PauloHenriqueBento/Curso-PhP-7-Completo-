<?php

$ts = strtotime("2001-09-11"); // PEga informação com base nessa data
//$ts = strtotime("now"); // Pega as informações com base de agora
//$ts = strtotime("+1 day");//Pega a informação do dia seguinte (com base no dia que o código for rodado)
//$ts = strtotime("+1 week");//Pega a informação da semana seguinte (com base no dia que o código for rodado)
//$ts = strtotime("-1 day");//Pega a informação do dia anterior (com base no dia que o código for rodado)
//$ts = strtotime("-1 week");//Pega a informação da semana anterior (com base no dia que o código for rodado)

echo date("l d/m/Y", $ts);

?>