<?php

    session_start();

    if (!isset($_SESSION['usuario'])) {
        echo '
            <script>
                alert("Por favor inicia sesión");
                window.location = "login_registro.php"
            </script>
        ';
        session_destroy();
        die();
        
    }
    //session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bienvenida </title>
</head>
<body>
    <h1> PÁGINA EN DESARROLLO ... Proximamente XD</h1>
    <a href="php/cerrar_sesion.php">Cerrar sesión</a>

</body>
</html>