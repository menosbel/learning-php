<?php

// muestra valores booleanos, a diferencia de print_r que no lo hace
// muestra la info de que contiene cada variable. tenemos el desglose y el valor

$texto = "Carloas";
$numero = 10;
$numero2 = "5";
$arreglo = array("Carlos", "Cesar", "Alejandro");
$arreglo_asociativo = array("nombre"=>"Carlos", "edad"=>20);
$booleano = false;

echo "<pre>";
var_dump($arreglo_asociativo);
echo "</pre>";