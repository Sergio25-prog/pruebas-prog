<?php
// INDICADOR 2: Diferencia los tipos de funciones en PHP.

/*
  TIPOS DE FUNCIONES UTILIZADAS EN ESTE SCRIPT:

  1. FUNCIONES DEFINIDAS POR EL USUARIO:
     Son creadas por el programador para realizar una tarea específica. En este caso,
     `validarUsuario` y `validarContrasena` son de este tipo. Ambas reciben parámetros
     y retornan un valor (booleano).

  2. FUNCIONES INTEGRADAS O PREDEFINIDAS (BUILT-IN):
     Son funciones que ya vienen con el lenguaje PHP y están listas para usarse.
     Ejemplos utilizados aquí:
     - `strlen()`: Devuelve la longitud de una cadena.
     - `ctype_alpha()`: Comprueba si todos los caracteres de una cadena son letras.
     - `ctype_upper()`: Comprueba si un carácter es mayúscula.
     - `str_contains()`: Verifica si una cadena contiene otra (disponible en PHP 8+).
     - `preg_match()`: Realiza una comparación con una expresión regular.

  3. FUNCIONES ANÓNIMAS O CIERRES (CLOSURES):
     Aunque no se usan en este ejemplo específico para mantener la claridad, son funciones
     sin un nombre definido, útiles para asignarlas a variables o pasarlas como argumentos
     a otras funciones. Ejemplo: $saludo = function() { echo "Hola"; };

  Este script se enfoca en las dos primeras, que son las más comunes y relevantes para
  la solución del problema.
*/

/**
 * Función definida por el usuario que valida el nombre de usuario.
 * Utiliza funciones integradas de PHP para verificar las reglas.
 *
 * @param string $usuario El nombre de usuario a validar.
 * @return bool Devuelve true si el usuario es válido, de lo contrario false.
 */
function validarUsuario(string $usuario): bool {
    // Regla 1: Longitud mínima de 6 y máxima de 10. (Uso de strlen)
    if (strlen($usuario) < 6 || strlen($usuario) > 10) {
        return false;
    }

    // Regla 2: Debe iniciar y finalizar con letra. (Uso de ctype_alpha)
    if (!ctype_alpha($usuario[0]) || !ctype_alpha($usuario[strlen($usuario) - 1])) {
        return false;
    }

    // Regla 3: Debe poseer al menos un número. (Uso de preg_match)
    if (!preg_match('/[0-9]/', $usuario)) {
        return false;
    }

    // Si todas las reglas se cumplen
    return true;
}

/**
 * Función definida por el usuario que valida la contraseña.
 *
 * @param string $contrasena La contraseña a validar.
 * @return bool Devuelve true si la contraseña es válida, de lo contrario false.
 */
function validarContrasena(string $contrasena): bool {
    // Regla 1: Longitud máxima de 8 caracteres.
    if (strlen($contrasena) > 8) {
        return false;
    }

    // Regla 2: El primer carácter debe ser mayúscula. (Uso de ctype_upper)
    if (!ctype_upper($contrasena[0])) {
        return false;
    }

    // Regla 3: Poseer un carácter especial (#$%&). (Uso de preg_match)
    if (!preg_match('/[#$%&]/', $contrasena)) {
        return false;
    }
    
    // Si todas las reglas se cumplen
    return true;
}


// --- Ejecución del Programa de Validación ---

$usuario1 = "juan8Perez"; // Válido
$contrasena1 = "Ventas#1"; // Válida

$usuario2 = "jp"; // Inválido (corto)
$contrasena2 = "ventas123"; // Inválida (sin mayúscula inicial ni carácter especial)

echo "--- Resultados de la Validación ---\n";

// Validación del primer set de credenciales
if (validarUsuario($usuario1) && validarContrasena($contrasena1)) {
    echo "Usuario '{$usuario1}' y contraseña son VÁLIDOS. ✅\n";
} else {
    echo "Usuario '{$usuario1}' o contraseña son INVÁLIDOS. ❌\n";
}

// Validación del segundo set de credenciales
if (validarUsuario($usuario2) && validarContrasena($contrasena2)) {
    echo "Usuario '{$usuario2}' y contraseña son VÁLIDOS. ✅\n";
} else {
    echo "Usuario '{$usuario2}' o contraseña son INVÁLIDOS. ❌<br>";
}
?>