<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Métodos GET y POST</title>

    </head>

    <body>
        
        <form action="response.php" method="POST">

            <div>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <br>

            <div>
                <label for="materia">Materia</label>
                <select name="materia" id="materia" required>
                    <option value="Matemáticas">Matemáticas</option>
                    <option value="Ciencias Naturales">Ciencias Naturales</option>
                    <option value="Geografía">Geografía</option>
                    <option value="Idioma Extranjero">Idioma extranjero</option>
                    <option value="Historia Universal">Historia Universal</option>
                </select>
            </div> 

            <br>
            
            <div>
                <label for="validar">¿Validar?</label><br>
                <input type="radio" name="validar" id="validar" value="Sí" required>
                <span>Sí</span>
                <input type="radio" name="validar" id="validar" value="No" required>
                <span>No</span>
            </div>

            <br>

            <div>
                <button type="submit">Enviar</button>
            </div>

        </form>

    </body>

</html>