<!DOCTYPE html>
<html lang="es-MX">
    
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Ciclo o bucle Foreach</title>

    </head>

    <body>

        <?php

            $laptop = [ 
                'Marca y modelo'=>'Acer Nitro 5', 
                'Sistema Operativo'=>'Windows 11', 
                'Procesador'=>'AMD Ryzen 5 4600H', 
                'Memoria de almacenamiento'=>'256GB', 
                'Memoria RAM'=>'24GB'
            ];

            echo '<h2>Datos de la laptop: </h2>';
            echo '<ul>';

            foreach($laptop as $clave=>$valor) {
                echo '<li>'.$clave.': '.$valor.'</li>';
            }

            echo '</ul>';

        ?>

    </body>

</html>