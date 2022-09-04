<?php
// comprobar si se enviaron los datos desde un formulario. Probelma: no comprueba por cual formulario se ha enviado

/* forma uno:

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "Se enviaron por GET";
} else {
    echo "Se enviaron por POST";
}

*/

// forma dos:

if (isset($_POST["submit"])) {
    echo "Se han enviado los datos correctamente";
    print_r($_POST["submit"]);
}