<?php

# no se puede acceder a una clase a no ser que se herede
abstract class Persona {
    public function saludo(){
        return "Hola";
    }
}

class Estudiante extends Persona {

}

$carlos = new Estudiante;
echo $carlos->saludo();