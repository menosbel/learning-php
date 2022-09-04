<?php

$numero = 7;

// para trabajar con variables que estan fuera de una funcion. primero hay que pasarlas como parametro
function mostrarNumero($numero){
    echo $numero;
}

mostrarNumero($numero);


// desde afuera de la funcion no podemos acceder a una variable que esta dentro de una funcion. para eso hay que usar "return"
function mostrarNum(){
    $num = 10;
    return $num;
}

echo mostrarNum();
