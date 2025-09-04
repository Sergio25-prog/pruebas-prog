<?php
// Variables escalares: Contienen un solo valor.
$escalar_entero = 10; // Variable entera
$escalar_flotante = 10.5; // Variable flotante
$escalar_cadena = "Hola, mundo"; // Variable de cadena
$escalar_booleano = true; // Variable booleana

echo "Variables escalares:\n";
echo "Entero: $escalar_entero\n";
echo "Flotante: $escalar_flotante\n";
echo "Cadena: $escalar_cadena\n";
echo "Booleano: " . ($escalar_booleano ? 'true' : 'false') . "\n";

// Variables compuestas: Contienen múltiples valores.
$arreglo = array(1, 2, 3, 4, 5); // Arreglo
$objeto = new stdClass();
$objeto->nombre = "Juan";
$objeto->edad = 30; // Objeto

echo "\nVariables compuestas:\n";
echo "Arreglo: ";
print_r($arreglo);
echo "\nObjeto: ";
print_r($objeto);
?>
