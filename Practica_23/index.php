<!DOCTYPE html>
<html lang="es-MX">
    
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Contando caracteres y palabras</title>

    </head>

    <body>

        <?php

            $cadena_texto = 'Feliz año dos mil veinticuatro';

            $longitud = strlen($cadena_texto);
            echo '<h2>"'.$cadena_texto.'" tiene '.$longitud.' caracteres</h2>';

            $palabras = str_word_count($cadena_texto);
            echo '<h2>"'.$cadena_texto.'" tiene '.$palabras.' palabras</h2>';

        ?>

    </body>

</html>