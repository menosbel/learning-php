<?php

$mes = "Diciembre";

switch($mes){
    case "Diciembre";
        echo "Feliz Navidad!";
    break;

    case "Enero";
        echo "Feliz Anio Nuevo";
    break;

    default;
        echo "En este mes no se celebra nada";
        break;
}

if ($mes == "Diciembre") {
    echo "Feliz Navidad";
} else if ($mes == "Enero") {
    echo "Feliz Anio Nuevo";
} else {
    echo "En este mes no se celebra nada";
}