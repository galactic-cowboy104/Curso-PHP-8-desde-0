<?php

    session_name("LOGIN");
    session_start();

?>

<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Inicio de sesión con usuario y contraseña</title>

    </head>

    <body>

        <form action="login.php" method="POST">

            <div>
                <label for="usuario">Nombre de usuario:</label>
                <input type="text" name="usuario" id="usuario" required>
            </div>
            
            <br>

            <div>
                <label for="clave">Contraseña:</label>
                <input type="password" name="clave" id="clave" required>
            </div>

            <br>

            <div>
                <input type="submit" value="Enviar">
            </div>

        </form>
        
    </body>

</html>