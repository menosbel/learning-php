<?php

// regresa 1 si el valor en la izq es mayor que el de la derecha
// regresa 0 si los valores en ambos lados son iguales
// regresa -1 si el valor de la derecha es mayor que el de la izq

// <    =   >
// 1    0   -1
echo  10 <=> 1;

$arreglo = [3,1,5,2,4];
//sort($arreglo);

/*

 function comparar($a, $b){
    if($a == $b){
        return 0;
    } elseif($a>$b){
        return 1;
    } else {
        return -1;
    }
}
*/

function comparar($a, $b){
    return $a <=> $b;
}

// usort arreglar el arreglo con la funcion que le digamos
usort($arreglo, "coparar");
echo implode(" - ", $arreglo);