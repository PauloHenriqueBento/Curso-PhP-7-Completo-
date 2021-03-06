<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status()); // @https://www.php.net/manual/pt_BR/function.session-status.php

echo "<br>";

switch(session_status()) {
    case PHP_SESSION_DISABLED:
        echo "Sessões desabilitadas.";
        break;
    
    case PHP_SESSION_NONE:
        echo "Sessões habilitadas, mas nenhuma existir.";
        break;

    case PHP_SESSION_ACTIVE:
        echo "Sessões habilitadas, e uma existir.";
        break;
}

?>