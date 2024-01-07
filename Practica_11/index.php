<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Estructura condicional anidada</title>

    </head>

    <body>
    
        <?php

            $edad = 55;
            $genero = 'F';

            if($genero == 'M') {
                if($edad >= 60) {
                    echo '<h2>Puede jubilarse</h2>';
                } else {
                    echo '<h2>No puede jubilarse</h2>';
                }
            } if($genero == 'F') {
                if($edad >= 54) {
                    echo '<h2>Puede jubilarse</h2>';
                } else {
                    echo '<h2>No puede jubilarse</h2>';
                }
            }

        ?>

    </body>

</html>