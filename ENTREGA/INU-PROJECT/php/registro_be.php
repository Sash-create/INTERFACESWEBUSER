<?php

    include 'conexion_be.php';

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $fecha_nac = $_POST['fecha_nac'];
    $tipo = $_POST['tipo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $query = "INSERT INTO personas(nombres, apellidos, fecha_nac, tipo, usuario, password) VALUES ('$nombres', '$apellidos', '$fecha_nac', '$tipo', '$usuario', '$password')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../login_registro.php";
            </script>
        ';
    }else{
        echo '
        <script>
                alert("Inténtalo de nuevo, usuario no almacenado");
                window.location = "../login_registro.php";
        </script>
        ';
    }

    mysqli_close($conexion);

?>