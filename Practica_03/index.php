<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Declaración de variables</title>

    </head>

    <body>

        <?php

            // Declarando variables
            $nombre = 'Carlos';
            $edad = 21;
            $estatura = 1.69;
            $soltero = TRUE;

            # Mostrando nombre en pantalla
            echo '<h3>Nombre: ';
            echo $nombre;
            echo '</h3>';

            # Mostrando edad en pantalla
            echo '<h3>Edad: ';
            echo $edad;
            echo '</h3>';

            # Mostrando estatura en pantalla
            echo '<h3>Estatura: ';
            echo $estatura;
            echo '</h3>';

            # Mostrando estado civil en pantalla
            echo '<h3>Soltero: ';
            echo $soltero;
            echo '</h3>';

        ?>
        
    </body>

</html>