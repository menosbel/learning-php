<?php

function calcular_area_triangulo($base, $altura){
    $resultado = ($base * $altura) / 2;
    return $resultado;
}

echo "El triangulo tiene un area de " . calcular_area_triangulo(10,10) . " m2.";

// otra opcion

$area_triangulo = calcular_area_triangulo(10,10);
echo "El triangulo tiene un area de " . $area_triangulo . " m2.";