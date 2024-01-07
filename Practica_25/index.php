<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <title>Funciones matemáticas</title>

    </head>

    <body>

        <?php

            echo '<h3>La potencia de 5 elevado a 3 es: '.pow(5, 3).'</h3>';
            echo '<h3>La raíz cuadrada de 144 es: '.sqrt(144).'</h3>';
            echo '<h3>Uno número random del 1-100 es: '.rand(1, 100).'</h3>';
            echo '<h3>La parte entera del número 4.3 es: '.floor(4.3).'</h3>';
            echo '<h3>El redondeo del número 7.1 es: '.ceil(7.1).'</h3>';


        ?>
        
    </body>

</html>