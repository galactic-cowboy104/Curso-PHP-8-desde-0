<!DOCTYPE html>
<html lang="es-MX">
    
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Formateando cadenas de texto</title>

    </head>

    <body>

        <?php

            $cadena_texto = 'Hola mundo';

            echo '<h2>'.strtolower($cadena_texto).'</h2>';
            echo '<h2>'.strtoupper($cadena_texto).'</h2>';
            echo '<h2>'.ucfirst($cadena_texto).'</h2>';
            echo '<h2>'.ucwords($cadena_texto).'</h2>';

        ?>

    </body>

</html>