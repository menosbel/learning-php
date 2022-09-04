<?php
// HACER UNA PEQUE;A VALIDACION DE LA VARIABLE.
//OPCION 1. Si primera condicion es verdadera GET nombre se va a guardar dentro de nombre, pero si no, se ejecuta Anonimo
//$nombre = isset($_GET["nombre"]) ? $_GET["nombre"] : "Anonimo";




/* OPCION 2. es lo mismo que esto:

if(isset($_GET["nombre"])){
    $nombre = $_GET["nombre"];
} else {
    $nombre = "Anonimo";
}
*/


// OPCION 3. si esta variable esta seteada la guarda dentro de nombre, si no guarda anonimo
$nombre = $_GET["nombre"] ?? "Anonimo";

echo $nombre;