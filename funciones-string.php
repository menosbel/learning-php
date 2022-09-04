<?php

$texto = "< > & '' ";

// los caaracteres son convertidos en entidades html para que no se ejecuten. para que no nos inyecten codigo
htmlspecialchars($texto);

//eliminar todos los espacios en blanco al inicio y final
$texto2 = " Hola ";
trim ($texto2);

// tamanio string, incluye espacios
strlen($texto2);

// pedazo linea de una cadena de texto. dos parametros: desde donde corta y cuantos caracteres queremos mostrar
substr($texto2, 1, 2);

// convertir todos caracteres en mayusculas o minusculas
strtoupper($texto2);
strtolower($texto2);

// en que posicion se encuentra una letra
strpos($texto2, "H");