<?php
# para borrar las cookies poner una fecha que ya paso. time() - 60 * 60 * 24 * 30
setcookie("font-size", "30px", time() + 60 * 60 * 24 * 30, "/")

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset= "UTF-8">
	<title>Document</title>
</head>
<body>
    <h1>Cookie Seteada</h1>
</body>
</html>