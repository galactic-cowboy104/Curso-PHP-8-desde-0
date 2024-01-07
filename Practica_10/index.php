<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Estructura condicional múltiple</title>

    </head>

    <body>

        <?php

            $dia = 4;

            if($dia == 1) {
                echo '<h1>Lunes</h1>';
            } else if($dia == 2) {
                echo '<h1>Martes</h1>';
            } else if($dia == 3) {
                echo '<h1>Miércoles</h1>';
            } else if($dia == 4) {
                echo '<h1>Jueves</h1>';
            } else if($dia == 5) {
                echo '<h1>Viernes</h1>';
            } else if($dia == 6) {
                echo '<h1>Sábado</h1>';
            } else if($dia == 7) {
                echo '<h1>Domingo</h1>';
            } else {
                echo '<h1>Valor inválido</h1>';
            } 

        ?>
        
    </body>

</html>