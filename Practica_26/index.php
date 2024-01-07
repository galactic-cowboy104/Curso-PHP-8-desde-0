<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Formateando números y cantidades</title>

    </head>

    <body>
        <?php

            $cantidad1 = 12732.6;
            $cantidad2 = 1931.42;
        
            echo '<h2>La primera cantidad es: '.number_format($cantidad1, 2, '.', ',').'</h2>';
            echo '<h2>La segunda cantidad es: '.number_format($cantidad2, 2, '.', ',').'</h2>';
        
        ?>

    </body>

</html>