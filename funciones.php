<?php
/*
count();
sort();
rsort();
var_dump();
print_r();
 */

function saludo($nombre){
    echo "Saludo, $nombre!";
}

echo saludo("Cesar");

# parametros

function sumar($numero1, $numero2){
    $resultado = $numero1 + $numero2;
    echo $resultado;
}

echo sumar(10, 15);