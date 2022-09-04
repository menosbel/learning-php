<?php

# acceder sin necesidad de instancias

class Persona {
    public static $dia = "7 de septiembre";

    public static function saluds($nombre){
        return "Hola, buen dia " . $nombre;
    }
}

# $carlos = new Persona;
# echo $carlos->dia;

echo Persona::$dia;
echo Persona::saludo("Alex");
