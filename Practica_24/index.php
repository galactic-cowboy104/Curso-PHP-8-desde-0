<!DOCTYPE html>
<html lang="es-MX">
    
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Conversión de cadena de texto a arreglo</title>

    </head>

    <body>

        <?php

            $fecha_1 = '2021/11/29';
            $fecha_2 = '2023-08-12';
            $numeros = 'Uno Dos Tres Cuatro Cinco Seis Siete';

            $array_fecha1 = explode('/', $fecha_1);
            $array_fecha2 = explode('-', $fecha_2);
            $array_numeros = explode(' ', $numeros, 3);

            echo '<h2>Elemento 1 de la fecha 1: '.$array_fecha1[1].'</h2>';
            echo '<h2>Elemento 0 de la fecha 2: '.$array_fecha2[0].'</h2>';
            echo '<h2>Último elemento del array: '.$array_numeros[2].'</h2>';

        ?>
        
    </body>

</html>