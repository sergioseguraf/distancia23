<?php
/**
 * Script para realizar operaciones matemáticas básicas.
 *
 * Este script contiene funciones para sumar y restar dos números.
 *
 * Autor: Sergio Segura Franco
 * Versión: 1.0
 */

/**
 * Realiza la suma de dos números.
 *
 * @param float $num1 El primer número a sumar.
 * @param float $num2 El segundo número a sumar.
 * @return float El resultado de la suma.
 * @throws InvalidArgumentException Si los parámetros no son números.
 * @deprecated Esta función está marcada como obsoleta y será eliminada en futuras versiones.
 * @since 1.0
 */
function sumar($num1, $num2) {
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException('Los parámetros deben ser números.');
    }
    return $num1 + $num2;
}

/**
 * Realiza la resta de dos números.
 *
 * @param float $num1 El número del cual se restará el segundo número.
 * @param float $num2 El número que se restará al primer número.
 * @return float El resultado de la resta.
 * @throws InvalidArgumentException Si los parámetros no son números.
 * @since 1.0
 */
function restar($num1, $num2) {
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException('Los parámetros deben ser números.');
    }
    return $num1 - $num2;
}
?>

