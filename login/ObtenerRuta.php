<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/opciones.css">
    <title>Document</title>
</head>
<body>
<?php

$current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// La variable almacena la dirección de la pagina donde se utiliza $_SERVER para obtener el nombre del servidor
echo '<p style="color: white;">La ruta actual es\'' . $current_url . '\' </p>';
?>

</body>
</html>