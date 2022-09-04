<?php

class Persona {
    #propiedades
    public $nombre;
    public $edad;
    public $pais;
    #metodos
    public function mostrarInformacion(){
        echo "Hola mundo";
    }
}

$carlos = new Persona;
$carlos->nombre = "Carlos Arturo";
$carlos->edad = "23";
$carlos->pais = "Mexico";

$carlos->mostrarInformacion();

$alejandro = new Persona;
$alejandro->nombre = "Alejandro";
$alejandro->edad = "30";
$alejandro->pais = "Espana";