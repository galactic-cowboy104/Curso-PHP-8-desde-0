<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Declaración de constantes</title>
    
    </head>

        <?php

            // Declarando constantes
            const NOMBRE = 'Carlos';
            const EDAD = 21;
            const ESTATURA = 1.69;
            const SOLTERO = TRUE;

            # Mostrando nombre en pantalla
            echo '<h3>Nombre: ';
            echo NOMBRE;
            echo '</h3>';

            # Mostrando edad en pantalla
            echo '<h3>Edad: ';
            echo EDAD;
            echo '</h3>';

            # Mostrando estatura en pantalla
            echo '<h3>Estatura: ';
            echo ESTATURA;
            echo '</h3>';

            # Mostrando estado civil en pantalla
            echo '<h3>Soltero: ';
            echo SOLTERO;
            echo '</h3>';

        ?>

    <body>
        
    </body>

</html>