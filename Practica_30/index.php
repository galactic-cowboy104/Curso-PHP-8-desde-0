<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Métodos empty() y isset()</title>

    </head>

    <body>

        <?php

            if(isset($_POST['numero'])) {

                if(empty($_POST['numero'])) {
                    echo "<h3>El número está vacío</h3>";
                } else {
                    echo "<h3>El valor del número es: ".$_POST['numero']."</h3>";
                }

            }

        ?>

        <form method="POST">
            <div>
                <input type="text" name="numero">
                <button type="submit">Enviar</button>
            </div>
        </form>
        
    </body>

</html>