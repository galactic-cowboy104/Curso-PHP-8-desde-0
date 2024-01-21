<?php

    session_name("CON");
    session_start();

    if(isset($_SESSION['contador'])) {
        $_SESSION['contador'] ++;
    } else {
        $_SESSION['contador'] = 1;
    }

?>

<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Manejo de sesiones</title>

    </head>

    <body>

        <?php
            echo "<h2>Has recargado esta página ".$_SESSION['contador']." veces.</h2>";
        ?>
        
    </body>
    
</html>