<?php

$edad = 18;
$edad = (isset($edad)) ? $edad : "El usuario no establecio su edad";

echo "Edad: " . $edad;




// devuelve true or false si la variable esta seteada
// isset($edad);