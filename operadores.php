<?php
/* Operadores Aritmetricos:
+
-
*
/
% modulo
*/

$numero = 10;
$numero2 = 6;

$resultado = $numero + $numero2;
echo $resultado;


/* Operadores de Asignacion:
=
+=
-=
*=
/=
*/

$numero3 = 10;
$numero4 = 5;

// $numero3 = $numero3 + 7;
$numero += 7;
echo $numero3;


/* Operadores de Comparacion:
== igualdad. comprueba tipo de dato
=== identico. comprueba valor y tipo de dato (por ejemplo "10" string no es igual a 10 integer)
!=, <> diferente
!==
>
<
>=
<=
*/

$num = 10;
if ($num === 10) {
    echo "Es identico";
} else {
    echo "Es diferente";
}

/* Operadores Logicos:
and, &&
or, ||
xor
!
*/

/* Operadores de Incremento y Decremento:
agrega unidades de una en una a nuestras variables
++$x  primero muestra numero en pantalla y despues lo muestra con la suma
$x++
--$x
$x--
*/

$n = 10;
// $n = $n + 1;
// $n += 1;
$n ++;
echo $n;

/* Operadores de Cadenas:
.
.=
*/

$texto = "Hola ";
$texto .= "mundo";

echo $texto;