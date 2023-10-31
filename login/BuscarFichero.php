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
$directorio = 'styles/img/'; 
$extension = '*.jpg'; 
$archivos = glob($directorio . $extension);
// se utiliza la función glob para buscar archivos en el directorio que coincidan con el contenido de la variable
if ($archivos) {
    echo '<p style="color: white;">Archivos encontrados:<br></p>';
    foreach ($archivos as $archivo) {
       echo $archivo . "<br>";
    }
} else {
    echo '<p style="color: white;">No se encontraron archivos.</p>';
}
?>


</body>
</html>