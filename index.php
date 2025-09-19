<?php
// cadena original

$cadena = "Hola mundo, este es un ejemplo de cómo usar la función strstr en PHP.";

// buscar subcadena

$subcadena = "ejemplo";

$pos = 0;

while (($pos = strpos($cadena, $subcadena, $pos)) !== false) {

    // imprimir texto antes de la subcadena

    $antes = strstr($cadena, $subcadena, true);

    echo $antes . "\n";

    // imprimir subcadena en mayúsculas

    $sub = strtoupper($subcadena);

    echo $sub . "\n";

    // imprimir texto después de la subcadena

    $despues = strstr($cadena, $subcadena);

    $despues = substr($despues, strlen($subcadena));

    echo $despues . "\n";

    // avanzar el puntero de búsqueda

    $pos += strlen($subcadena);

}



?>
