<?php

//Modifica a data/dia com base na regional.
//@https://www.php.net/manual/pt_BR/function.strftime.php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucwords(strftime("%A %B")); //ucwords: converter as primeira letra da palavra para Maiscula

?>