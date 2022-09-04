<?php
$conexion = new mysqli("localhost", "root", "", "prueba_datos");

if ($conexion->connect_errno) {
    die("Lo siento, hubo un problema con el servidor");
} else {
    $statement = $conexion->prepare("INSERT INTO usuarios(ID, nombre, edad) VALUES(?, ?, ?)");
    # reemplazar los placeholder ? con los valores que queremos usar.
    # una s por placeholder que tengamos
    # s = string
    # i = integer
    # d = double
    $statement->bind_param("ssi", $id, $nombre, $edad);
    $id = NULL;

    if(isset($_GET["nombre"]) && isset($_GET["edad"])) {
        $nombre = $_GET["nombre"];
        $edad = $_GET["edad"];
    }

    $statement->execute();
    if($conexion->affected_rows >= 1) {
        echo "Filas agregadas: " . $conexion->affected_rows;
    } else {
        echo "No se agrego nada";
    }
}


