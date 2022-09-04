<?php
function sumar($numero1, $numero2){
    $resultado = $numero1 + $numero2;
    return $resultado;
}
// valor devuelto (25) se guarda dentro de $resultado
$resultado = sumar(10, 15);

// tood lo que se escriba despues de return no se va a ejecutar


function saludo($nombre){
    return "Saludo, " . $nombre;
  }


echo saludo(Juan);