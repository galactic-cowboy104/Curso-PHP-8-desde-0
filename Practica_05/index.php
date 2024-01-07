<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Declaración de arreglos</title>

    </head>

    <body>

        <?php

            // Array de tipo escalar
            $estudiantes = array('Carlos', 'José', 'Vanessa', 'Katy');
            
            // Array de tipo asociativo
            $tutor = [
                'nombre' => 'Ricardo', 
                'apellido' => 'Fernández', 
                'edad' => 23
            ];

             // Array de dimensiones múltiples
             $clases = [
                'horarios' => [2, 3, 4], 
                'cursos' => ['PHP', 'Python', 'Javascript']
             ];

            // Mostrando el nombre del alumno 2
            echo '<h3>El nombre del alumno 2 es: ';
            echo $estudiantes[1];
            echo '</h3>';

            // Mostrando el apellido del tutor
            echo '<h3>El apellido del tutor es: ';
            echo $tutor['apellido'];
            echo '</h3>';

            // Mostrando el horario de la clase
            echo '<h3>El horario de la clase es: ';
            echo $clases['horarios'][2];
            echo '</h3>';

        ?>
        
    </body>

</html>