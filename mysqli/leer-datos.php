<?php

$conexion = new mysqli("localhost", "root", "", "prueba_datos");

if ($conexion->connect_errno) {
    die("Lo siento, hubo un problema con el servidor");
} else {
    # si le paso una variable por la url me la guarda en variable id y si no usa 1
    # $id = isset($_GET["id"]) ? $_GET["id"] : 1;
    # $sql = "SELECT * FROM usuarios WHERE ID = $id";
    $sql = "SELECT * FROM usuarios";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows) {
        # mostrar una fila del resultado. cada vez que se ejecuta, trae un usuario
        /* echo "<pre>";
        var_dump($resultado->fetch_assoc());
        echo $resultado->fetch_assoc()["nombre"];
        echo "</pre>";
        */

        while($fila = $resultado->fetch_assoc()){
            echo $fila["ID"] . " - " . $fila["nombre"] . "<br>";
        }



    } else {
        echo "No hay datos.";
    }
}
