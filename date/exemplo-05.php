<?php

$dt = new DateTime();

$periodo = new DateInterval("P15D"); //Da um periodo  15 dias a data

echo $dt -> format("d/m/Y H:i:s");

$dt -> add($periodo);

echo "<br>";

echo $dt -> format("d/m/Y H:i:s");

?>