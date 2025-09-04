<?php

/*Jerarquía y precedencia:
Paréntesis: Se evalúan las expresiones dentro del paréntesis primero.
Exponentes: Se evalúan las expresiones con exponentes como pow()después.
Multiplicación y división: Se evalúan las expresiones con multiplicación y división de izquierda a derecha.
Suma y resta: Se evalúan las expresiones con suma y resta de izquierda a derecha.*/

$a = 2;
$b = 3;
$c = 4;

$x = -$b + pow($b, 2) - $a * $c * (4 * $a + $b) - pow($a, 2);

echo "El resultado de la ecuación x = -b + b^2 - a*c* (4*a+b) - a^2 es: $x\n";
?>
