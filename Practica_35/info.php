<?php
    session_name("LOGIN");
    session_start();
?>

<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Información de sesión</title>

    </head>

    <body>

        <?php

            if(isset($_SESSION['nombre']) && isset($_SESSION['apellido']) && isset($_SESSION['pais'])) {

                echo "<h2>Nombre: ".$_SESSION['nombre']."</h2>";
                echo "<h2>Apellido: ".$_SESSION['apellido']."</h2>";
                echo "<h2>País: ".$_SESSION['pais']."</h2>";

                session_destroy();

            } else {
                echo "<h2> La sesión ha sido cerrada.</h2>";
            }

        ?>

    </body>

</html>