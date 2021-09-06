<?php


$total = 150;
$desconto = 0.9;

do{
   // echo $total . "<br>";
    $total *= $desconto;
} while ($total > 100);

echo number_format($total, 2, ",", ".");

?>