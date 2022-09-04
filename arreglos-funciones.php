<?php
# contar

$meses = array("enero", "febrero", "marzo", "abril",
    "mayo", "junio", "julio", "agosto",
    "septiembre", "noviembre", "diciembre");

echo count($meses) . "<br>";

$ultimo_mes = count($meses) - 1;
echo $meses[$ultimo_mes];

echo "<br>";


# ordenar de forma ascendente y descendente

sort($meses);
rsort($meses);

?>

# recorrer

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meses del año</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
        <?php

        foreach($meses as $mes){
            echo "<li>" . $mes . "</li>";
        }

        ?>
    </ul>

</body>
</html>



