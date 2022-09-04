<?php

/* operadores de comparacion:
 * ==
 * <
 * >
 * <=
 * >=
 * != diferente
 * ! negacion
 */

/* operadores logicos:
 * &&
 * or, ||
 * xor - evalua que se cumpla una y solo una condicion. si se cumplen dos o mas no nos deja
 */

$edad = 16;
$nombre = "Carlos";

if($edad>=18 && $nombre == "Carlos"){
    echo "<h1> Bienvenido </h1>";
} else {
    echo "<h1> Eres menor de edad y/o no te llamas Carlos </h1>";

}

echo "<br>";

$mes = "Julio";

if($mes == "Diciembre") {
    echo "Feliz Navidad";
} else if ($mes == "Enero"){
    echo "Feliz Anio Nuevo";
} else if ($mes == "Julio"){
    echo "Feliz Julio";
} else{
    echo "El mes que pusiste no tiene celebracion";
}