<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/opciones.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Opciones</title>
</head>
<body>
    <div class="wrapper">
        <h1>Opciones</h1>
        <?php
        session_start();
        // Inicia  la sesión con PHP

        if (isset($_SESSION['username'])) {
            //  Este metodo comprueba si el usuario ha iniciado sesión 
            echo "Bienvenido, mi señor " . $_SESSION['username'] . ".<br>";
            echo "Ha iniciado sesión en: " . $_SESSION['access_time'] . "<br>";
        } else {
            header("Location: index.html");
        }
        ?>
        <div class="botones">
            <button><a href="ObtenerRuta.php">Obtener Ruta Actual</a></button>
            <button><a href="BuscarFichero.php">BuscarFichero</a></button>
            <button><a href="CrearFichero.php">Crear Fichero</a></button>
        </div>
    </div>
</body>
</html>
