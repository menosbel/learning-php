<?php
// arrays: variables que nos permiten alamacenar mas de un valor

//
$semana = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");

# martes
echo $semana[1];

# modificar valor
$semana[7] = "FalconMasters";
echo $semana[7];

# otra forma de escribirlo
$arreglo = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];

$arreglo2 = array("cadena de texto", 1, array("asd", 123), true);

echo "<br>";
echo $semana[0] . "<br />";
echo $semana[1] . "<br />";