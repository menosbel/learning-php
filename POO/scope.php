<?php

class Usuario {
    # public accedo desde cualquier parte, adentro o fuera de la clase
    # protected solo se puede acceder desde dentro de la clase y otras que heredaron
    # private solo se puede acceder desde dentro de la clase que fue creada
    public $nombre;
    public $correo;

    function __construct($nombre, $correo) {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarInfo() {
        return $this->correo;
    }
}

class Miembro extends Usuario {

    public function __construct($nombre, $correo, $id) {
        parent::__construct($nombre, $correo);
        $this->id = $id;
    }

    public function mostrarId(){
        return "Este es el ID: " . $this->id;
    }
}

$carlos = new Miembro("Carlos", "carlos@mail.com", "#163");
echo $carlos->mostrarId();