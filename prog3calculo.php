<?php
// INDICADOR 1: Identifica la sintaxis para declarar funciones.

/*
  Sintaxis para declarar una función en PHP:
  
  function nombreDeLaFuncion(parametro1, parametro2, ...) {
      // Bloque de código a ejecutar
      return valor_a_devolver; // Opcional
  }

  - 'function': Es la palabra clave para iniciar la declaración.
  - 'nombreDeLaFuncion': Nombre que le damos a la función.
  - '(parametro1, ...)': Son los valores de entrada (argumentos) que la función puede recibir.
  - '{ ... }': Delimitan el cuerpo o bloque de código de la función.
  - 'return': Devuelve un valor como resultado de la ejecución.
*/

// --- Declaración de Funciones ---

/**
 * Función para calcular el precio total (subtotal) de la venta.
 * @param int $unidadesVendidas - Cantidad de productos vendidos.
 * @param float $precioPorUnidad - Costo de cada producto.
 * @return float - El subtotal de la venta (unidades * precio).
 */
function calcularPrecioTotal(int $unidadesVendidas, float $precioPorUnidad): float {
    // Se calcula el producto de las unidades por el precio.
    return $unidadesVendidas * $precioPorUnidad;
}

/**
 * Función para calcular el total de la venta aplicando un impuesto.
 * @param float $precioTotal - El subtotal sobre el cual se aplica el impuesto.
 * @param float $impuesto - El porcentaje de impuesto a aplicar (ej. 0.15 para 15%).
 * @return float - El monto final incluyendo el impuesto.
 */
function calcularTotalVentas(float $precioTotal, float $impuesto = 0.15): float {
    // Se calcula el monto del impuesto y se suma al precio total.
    $montoImpuesto = $precioTotal * $impuesto;
    return $precioTotal + $montoImpuesto;
}

/**
 * Función para calcular un descuento si el monto supera un mínimo.
 * @param float $totalVentas - El monto total de la venta (con impuesto).
 * @param float $montoMinimo - El umbral para aplicar el descuento.
 * @param float $porcentajeDescuento - El porcentaje a descontar (ej. 0.10 para 10%).
 * @return float - El monto del descuento a aplicar. Devuelve 0 si no aplica.
 */
function aplicarDescuento(float $totalVentas, float $montoMinimo = 200.0, float $porcentajeDescuento = 0.10): float {
    // Condicional para verificar si el total de la venta supera el monto mínimo.
    if ($totalVentas > $montoMinimo) {
        // Si supera, calcula y devuelve el monto del descuento.
        return $totalVentas * $porcentajeDescuento;
    } else {
        // Si no, no hay descuento.
        return 0.0;
    }
}


// --- Ejecución del Programa ---

// Datos de entrada para la venta
$unidades = 15;
$precioUnitario = 25.50; // USD

// 1. Calcular el precio total (subtotal)
$precioTotal = calcularPrecioTotal($unidades, $precioUnitario);

// 2. Calcular el total de las ventas (con impuesto del 15%)
$totalVentas = calcularTotalVentas($precioTotal);

// 3. Calcular el descuento (si aplica)
$descuento = aplicarDescuento($totalVentas);

// 4. Calcular el pago final
$pagoFinal = $totalVentas - $descuento;

// --- Mostrar Resultados ---
echo "--- Resumen de la Venta ---\n";
echo "Unidades Vendidas:  . $unidades . \n";
echo "Precio por Unidad: $" . number_format($precioUnitario, 2) . " USD\n";
echo "---------------------------------\n";
echo "Precio Total (Subtotal): $" . number_format($precioTotal, 2) . " USD\n";
echo "Total de la Venta (con 15% de impuesto): $" . number_format($totalVentas, 2) . " USD\n";

if ($descuento > 0) {
    echo "Descuento Aplicado (10%): -$" . number_format($descuento, 2) . " USD\n";
    echo "<strong>Total a Pagar: $" . number_format($pagoFinal, 2) . " USD\n";
} else {
    echo "No aplica descuento.\n";
    echo "Total a Pagar: $" . number_format($totalVentas, 2) . " USD\n";
}

?>  