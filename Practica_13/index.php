<!DOCTYPE html>
<html lang="es-MX">
    
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Estructura de selección múltiple Match</title>

    </head>

    <body>

        <?php

            $edad = 21;

            $resultado = match(true) {

                $edad >= 60 => '<h1>Eres de la tercera edad</h1>',
                $edad >= 30 && $edad < 60 => '<h1>Eres un adulto mayor</h1>',
                $edad >= 18 && $edad < 30 => '<h1>Eres un adulto joven</h1>',
                $edad >= 12 && $edad < 18 => '<h1>Eres un adolescente</h1>',
                $edad >= 3 && $edad < 12 => '<h1>Eres un niño</h1>',
                $edad >= 0 && $edad < 3 => '<h1>Eres un bebé</h1>',
            
            };

            echo $resultado;

        ?>
    
    </body>

</html>