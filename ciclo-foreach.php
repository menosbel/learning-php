<?php
$meses = array(
    "enero", "febrero", "marzo", "abril",
    "mayo", "junio", "julio", "agosto",
    "septiembre", "noviembre", "diciembre"
);

$alejandro = array("telefono" => 54445555, "edad" => 20, "pais" => "mexico");



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1> Meses </h1>
    <ul>
        <?php
            foreach($meses as $mes){
                echo "<li>" . $mes . "</li>";
            }

            foreach($alejandro as $dato => $valor){
                echo "<li>" . $dato . ": " . $valor . "</li>";
            }

        ?>
    </ul>
</body>
</html>
