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
        return $this->nombre . " tiene " . $this->edad . " años de edas y es de " . $this->pais . ".<br>";
    }
}

class Estudiante extends Persona{
    function __construct($nombre, $edad, $pais, $carrera) {
        parent::__construct($nombre, $edad, $pais);
        $this->carrera = $carrera;
    }
}

class Trabajador extends Persona {
    function __construct($nombre, $edad, $pais, $profesion)
    {
        parent::__construct($nombre, $edad, $pais);
        $this->profesion = $profesion;
    }
}

$carlos = new Estudiante("Carlos Arturo", 23, "Mexico", "Desarrollador");
echo $carlos->carrera . "<br>";

$damian = new Trabajador("Damian", 45, "Argentina", "Profesor");
echo $damian->profesion;