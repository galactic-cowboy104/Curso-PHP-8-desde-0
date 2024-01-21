<?php

    setcookie("Idioma", "es", time() + (60 * 60 * 24 * 365), "/Curso_PHP/Practica_33/", "localhost", false, false);

?>

<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Manejo de cookies</title>

    </head>

    <body>

        <?php echo "<h1>El valor de la cookie es: ".$_COOKIE['Idioma']."</h1>";?>
        
    </body>

</html>