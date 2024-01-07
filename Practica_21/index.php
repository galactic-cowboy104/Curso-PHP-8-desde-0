<!DOCTYPE html>
<html lang="es-MX">
    
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Invocación de funciones</title>

    </head>

    <body>

        <?php

            include 'funcion.php';

            echo saludo('Zoé');            

            $nombre = 'Saúl';
            echo saludo($nombre);

            echo saludo($nombre = 'Daniel')
            
        ?>

    </body>

</html>