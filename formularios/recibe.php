<?php
// metodo post no envia datos por la url, como si hace GET
// POST-permite enviar archivos. POST-Usuario no puede manipular la info.


//print_r($_POST);

if(!$_POST) {
    header("Location: http://localhost/curso_PHP/formularios/");
} else {
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $year = $_POST['year'];
    $terminos = $_POST['terminos'];

    echo "Hola, " . $nombre . " eres " . $sexo;
}

if ($nombre){
    echo $nombre . "<br>";
} else {
    echo "El usuario no establecio su nombre <br>";
}

// solo para traer info y mostrarla en pantalla pero no para editar info en una base de datos.
// print_r($_GET);

// htmlspecialchars($nombre);