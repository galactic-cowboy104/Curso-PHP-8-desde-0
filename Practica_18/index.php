<!DOCTYPE html>
<html lang="es-MX">
    
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Sentencias break y continue</title>

    </head>

    <body>

        <?php

            $counter = 1;

            echo '<h3>Con sentencia break:</h3>';

            while($counter <= 20) {
               
                echo '<p>Contador: '.$counter.'</p>';
               
                if($counter == 10)
                    break;

                $counter ++;
            }

            $counter = 1;
            
            echo '<h3>Con sentencia continue:</h3>';

            while($counter <= 20) {
                
                if($counter % 2 == 0) {
                    $counter ++;
                    continue;
                }

                echo '<p>Contador: '.$counter.'</p>';
                $counter ++;
        
            }
            
        ?>

    </body>

</html>