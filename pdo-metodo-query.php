<?php


try {
    $conexion = new PDO("mysql:host=localhost;dbname=prueba_datos", "root", "");

    $resultados = $conexion->query("SELECT * FROM usuarios WHERE id = 2");

    foreach ($resultados as $fila) {
        echo $fila["nombre"] . "<br>";
        print_r ($fila);
    }

    $resultados2 = $conexion->query("INSERT INTO usuarios VALUES(null, 'Pedro')");

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
