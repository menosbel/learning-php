<?php


class Persona
{
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInformacion()
    {
        echo $this->nombre . " tiene " . $this->edad . " años de edas y es de " . $this->pais . ".<br>";
    }
}

$carlos = new Persona("Carlos Arturo", 23, "Mexico");
$carlos->mostrarInformacion();

$alejandro = new Persona("Alejandro", 30, "Chile");
$alejandro->mostrarInformacion();