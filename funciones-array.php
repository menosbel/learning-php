<?php

$amigo = array("telefono" => 45550999, "edad" => 20, "pais" => "mexico");

// extraer elementos d euna arreglo asociativo como si fueran variables

extract($amigo);

echo $telefono . "<br>";
echo $edad . "<br>";

// extraer ultimo elemento del arreglo

$semana = array(
    "Lunes", "Martes", "Miercoles",
    "Jueves", "Viernes", "Sabado", "Domingo"
);

$ultimo_dia = array_pop($semana);

foreach ($semana as $dia){
    echo $dia . "<br>";
}

// muetsra todos los elementos separados por lo que pongamos nosotros

join(" - ", $semana);

// couantos elementos tenemos en el arreglo

count ($semana);

// mostrar arreglo en orden ascendente

sort($semana);
echo join(", ", $semana) . "<br>";

rsort($semana);
echo join(", ", $semana) . "<br>";

$semana_reverse = array_reverse($semana);
echo join(", ", $semana_reverse) . "<br>";
