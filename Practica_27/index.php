<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Obteniendo día y fecha actual en formato US</title>

    </head>

    <body>
        <?php

            date_default_timezone_set("America/Mexico_City");
            
            $fecha_num = date("Y/m/d");
            $fecha_text = date("l d F Y");

            echo "<h2>".$fecha_num."</h2>";
            echo "<h2>".$fecha_text."</h2>";

            $hora_12 = date("h:i a");
            $hora_24 = date("H:i");

            echo "<h2>".$hora_12."</h2>";
            echo "<h2>".$hora_24."</h2>";

            $fecha_com1 = date("Y-m-d h:i A");
            $fecha_com2 = date("l d F Y H:i");

            echo "<h2>".$fecha_com1."</h2>";
            echo "<h2>".$fecha_com2."</h2>";

        ?>

    </body>

</html>