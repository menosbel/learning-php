<?php

$id = $_GET["id"];

try {
    $conexion = new PDO("mysql:host=localhost;dbname=prueba_datos", "root", "");

    $statement = $conexion->prepare("SELECT * FROM usuarios WHERE id = :id or :id2");
    $statement->execute(array(
        ":id" => $id,
        ":id2" => 5
    ));

   // mostrar resultados
    $resultado = $statement->fetchAll();
    foreach($resultado as $usuario) {
        print_r($usuario);
        echo $usuario["nombre"] . "<br>";
    }


} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}