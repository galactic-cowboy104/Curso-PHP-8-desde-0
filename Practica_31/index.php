<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Subiendo y enviando archivos</title>

    </head>

    <body>

        <h3>Subir archivo con PHP</h3>
        
        <form action="upload.php" method="POST" enctype="multipart/form-data">

            <input type="file" name="fichero" required>
            <br><br>
            <button type="submit">Enviar</button>

        </form>
        
    </body>

</html>