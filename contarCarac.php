<?php
// Nombre de un cliente con espacios en blanco al inicio y al final
$nombreConEspacios = "  Carlos Soto  ";

// Aplicar las tres funciones para ver la diferencia
$nombreConTrim = trim($nombreConEspacios);
$nombreConLtrim = ltrim($nombreConEspacios);
$nombreConRtrim = rtrim($nombreConEspacios);

// Mostrar los resultados
echo "Original: '" . $nombreConEspacios . "'\n";
echo "Con trim(): '" . $nombreConTrim . "' (Elimina ambos lados)\n";
echo "Con ltrim(): '" . $nombreConLtrim . "' (Elimina solo el inicio)\n";
echo "Con rtrim(): '" . $nombreConRtrim . "' (Elimina solo el final)\n";

// Salida esperada:
// Original: '  Carlos Soto  '
// Con trim(): 'Carlos Soto' (Elimina ambos lados)
// Con ltrim(): 'Carlos Soto  ' (Elimina solo el inicio)
// Con rtrim(): '  Carlos Soto' (Elimina solo el final)
?>