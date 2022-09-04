<?php
// el argumento debe ser de tipo entero
// declare(strict_types=1) -- si quiero que si o si sea ese tipo de dato

function cuadrado(int $numero){
    return $numero * $numero;
}
// si pongo un numero como cadena de texto funciona igual. php hace lo posible por encontrar el numero
$numero = "2";
echo "El cuadrado de " . $numero . " es " . cuadrado($numero) . ".";

