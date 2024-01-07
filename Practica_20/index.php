<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <title>Creación de funciones</title>

    </head>

    <body>

        <?php
        
            function saludo($nombre) {
                return '<h2>¡Hola! Mi nombre es: '.$nombre.'</h2>';
            }

            echo saludo('Zoé');            

            $nombre = 'Saúl';
            echo saludo($nombre);

            echo saludo($nombre = 'Daniel');

        ?>
        
    </body>

</html>