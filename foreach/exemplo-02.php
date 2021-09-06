<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">

</form>

<?php

foreach ($_GET as $key => $value) {
    


    echo "O nomem do campo: $key <br>";

    echo " Valor do campo: $value";

    echo "<hr>";
}

?>