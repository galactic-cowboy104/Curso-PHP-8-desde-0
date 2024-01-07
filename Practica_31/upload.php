<!DOCTYPE html>
<html lang="es-MX">
    
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Información del archivo</title>

    </head>

    <body>

        <?php 

            if(!file_exists("files")) {
                if(!mkdir("files", 0777)) {
                    echo "<h3>Error al crear el directorio</h3>";
                    exit();
                }
            }

            chmod("files", 0777);

            if(move_uploaded_file($_FILES['fichero']['tmp_name'], "files/".$_FILES['fichero']['name'])) {
                echo "<h3>Archivo subido con éxito</h3>";
            } else {
                echo "<h3>Error al subir el archivo</h3>";
            }
        
            echo "<h3>Nombre del archivo: ".$_FILES['fichero']['name']."</h3>";
            echo "<h3>Tipo de archivo: ".$_FILES['fichero']['type']."</h3>";
            echo "<h3>Error del archivo: ".$_FILES['fichero']['error']."</h3>";
            echo "<h3>Tamaño del archivo: ".$_FILES['fichero']['size']." bytes</h3>";

        ?>

        
    </body>

</html>