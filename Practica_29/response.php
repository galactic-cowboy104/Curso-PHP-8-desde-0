<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Respuesta</title>

    </head>

    <body>

        <?php

            $nombre = $_POST['nombre'];
            $materia = $_POST['materia'];
            $validar = $_POST['validar'];

            echo"<h2>El nombre es: ".$nombre."</h2>";
            echo"<h2>La materia es: ".$materia."</h2>";
            echo"<h2>¿Validó la materia?: ".$validar."</h2>";

        ?>
        
    </body>

</html>