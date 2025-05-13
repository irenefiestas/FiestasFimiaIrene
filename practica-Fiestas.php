<?php
/**
 * Script de ejemplo para documentación con phpDocumentor.
 *
 * Este script contiene dos funciones como ejemplo para la generación
 * de documentación automática.
 *
 * @author Irene Fiestas
 * @version 1.0
 */

/**
 * Función que calcula la suma de dos números.
 *
 * @param float $a Primer número.
 * @param float $b Segundo número.
 * @return float La suma de ambos números.
 *
 * @internal Esta función es un ejemplo básico de suma.
 */
function sumar($a, $b) {
    return $a + $b;
}

/**
 * Función que devuelve un mensaje personalizado.
 *
 * @param string $nombre Nombre de la persona.
 * @return string Mensaje de bienvenida.
 *
 * @internal Esto es una información interna para desarrolladores.
 */
function mensajeBienvenida($nombre) {
    return "Bienvenid@ $nombre.";
}
?>