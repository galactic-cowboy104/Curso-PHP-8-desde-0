<!DOCTYPE html>
<html lang="es-MX">
    
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Ciclo o bucle Do While</title>

    </head>

    <body>

        <?php

            $counter = 1;

            do {
                echo '<h3>Contador: '.$counter.'</h3>';
                $counter ++;
            } while($counter <= 20);

        ?>

    </body>

</html>