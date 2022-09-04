<?php
$meses = array("enero", "febrero", "marzo", "abril",
    "mayo", "junio", "julio", "agosto",
    "septiembre", "noviembre", "diciembre");

for($i = 0; $i < count($meses); $i++){
    echo $meses[$i] . "<br>";
}

$contador = 0;
while ($contador < count($meses)){
    echo $meses[$contador] . "<br>";

    $contador++;
}