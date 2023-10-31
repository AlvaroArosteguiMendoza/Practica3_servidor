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

$nombreArchivo = "que_no_voy_a_usar.txt"; 
$archivo = fopen($nombreArchivo, "w");
// este metodo abre o crea un archivo con el nombre que tenga la variable 

if ($archivo) {   
    $contenido = "Este es el contenido del nuevo archivo.";
    fwrite($archivo, $contenido);
    // esto escribe el contenido 
    fclose($archivo);
    // esto lo cierra 
    echo '<p style="color: white;">El archivo \'' . $nombreArchivo . '\' se ha creado exitosamente.</p>';
} else {
    echo '<p style="color: white;">No se pudo crear el archivo \'' . $nombreArchivo . '\'.<p>';
}

?>

</body>
</html>