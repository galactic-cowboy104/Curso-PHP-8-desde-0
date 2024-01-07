<!DOCTYPE html>
<html lang="es-MX">
    
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Estructura de selección múltiple Switch</title>

    </head>

    <body>

        <?php

            $dia = 7;
            
            switch($dia) {

                case 1:
                    echo '<h1>Lunes</h1>';
                    break;
                case 2:
                    echo '<h1>Martes</h1>';
                    break;
                case 3:
                    echo '<h1>Miércoles</h1>';
                    break;
                case 4:
                    echo '<h1>Jueves</h1>';
                    break;
                case 5:
                    echo '<h1>Viernes</h1>';
                    break;
                case 6:
                    echo '<h1>Sábado</h1>'; 
                    break;
                case 7:
                    echo '<h1>Domingo</h1>';
                    break;
                default:
                    echo '<h1>Valor inválido</h1>';

            }

        ?>
        
    </body>

</html>