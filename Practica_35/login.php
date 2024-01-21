<?php

    if(!preg_match("/^[a-zA-Z]{3,10}$/", $_POST['usuario'])) {
        echo "<h2>El usuario no tiene el formato solicitado.</h2>";
        exit();
    }

    if(!preg_match("/^[a-zA-Z0-9.-_]{4,30}$/", $_POST['clave'])) {
        echo "<h2>La clave no tiene el formato solicitado.</h2>";
        exit();
    }

    if($_POST['usuario'] == "Carlos" && $_POST['clave'] == "6579") {

        session_name("LOGIN");
        session_start();

        $_SESSION['nombre'] = "Carlos";
        $_SESSION['apellido'] = "Trejo";
        $_SESSION['pais'] = "México";

        header("Location: info.php");

    } else {
        header("Location: index.php");
    }

?>