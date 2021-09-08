<?php

session_id('monj4pooafjqd581ee3atmetos');

require_once("config.php");

session_regenerate_id(); //Gera uma novo id de sessão

echo session_id();

//var_dump($_SESSION);

?>