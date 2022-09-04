<?php
$paises = array (
    "Mexico", "España", "Colombia", "Peru",
    "Argentina", "Venezuela", "Guatemala"
);

foreach($paises as $pais){
    echo $pais . "<br>";

    if($pais == "España"){
        break;
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Paises latinoamericanos</h1>
    <?php
    foreach ($paises as $pais){
        if ($pais == "España"){
            continue;
        }
        echo $pais . "<br>";
    }

    ?>

</body>
</html>