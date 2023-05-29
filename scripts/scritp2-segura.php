<?php
/**
 * Clase para realizar operaciones con cadenas de texto.
 *
 * Esta clase contiene métodos para concatenar y revertir cadenas de texto.
 *
 * Autor: Sergio Segura Franco
 * Versión: 1.0
 */
class StringOperations {
    /**
     * Concatena dos cadenas de texto.
     *
     * @param string $str1 La primera cadena de texto.
     * @param string $str2 La segunda cadena de texto.
     * @return string La concatenación de las dos cadenas.
     * @throws InvalidArgumentException Si los parámetros no son cadenas de texto.
     * @since 1.0
     */
    public function concatenar($str1, $str2) {
        if (!is_string($str1) || !is_string($str2)) {
            throw new InvalidArgumentException('Los parámetros deben ser cadenas de texto.');
        }
        return $str1 . $str2;
    }

    /**
     * Revierte una cadena de texto.
     *
     * @param string $str La cadena de texto a revertir.
     * @return string La cadena de texto revertida.
     * @var string Esta variable almacena una cadena de texto.
     * @since 1.0
     */
    public function revertir($str) {
        return strrev($str);
    }
}
?>



