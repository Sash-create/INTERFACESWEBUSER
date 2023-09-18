<?php

    session_start();

    include 'conexion_be.php';

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM personas WHERE usuario='$usuario' AND password='$password'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $usuario;
        header("location: ../bienvenida.php");
        exit;
    }else {
        echo '
            <script>
                alert("Error, verifique los datos introducidos");
                window.location = "../login_registro.php";
            </script>
        ';

        exit;
    }





/*inicializar sesión
    session_start();

    if(isset($_SESSION["loggedin"]))&& $_SESSION["loggedin"] === true){
        header("location: home".php);
        exit;
    }

require_once "conexion.php";

$user = $password = "";
$user_err = $password_err = "";

//if($_SERVER["REQUEST_METHOD"] === "POST")




//<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>*/
?>