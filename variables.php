<?php
//son case sensitive. no pueden usar espacio, empezar con numeros o usar caracteres especiales
# Stirng: cadena de texto
$nombre = "Carlos";

# Integer: numeros enteros
$numero = 7;

# Double/float: numeros con decimales
$numero_decimal = 7.7;

# Boolean: verdadero o falso
$verdadero = false;

# Array
# Objeto
# Clase
# Null: cuando a una variable no se le ha asignado ningun valor

#concatenar es mejor forma de hacerlo por seguridad
echo "Hola, $nombre <br>";
echo "Hola, " . $nombre . "\n";

echo "<br>";
echo gettype($numero);