<?php

    session_start();

    include 'conexion_be.php';
    $mail = $_POST['mail'];
    $contrasenna = $_POST['contrasenna'];
    $contrasenna= hash('sha512', $contrasenna);

    $validar_login = mysqli_query($conn, "SELECT * FROM usuarios WHERE mail='$mail' and contrasenna='$contrasenna'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario']= $mail;
        header("location: ../index1.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos");
                window.location = "../formulario.php";
            </script>

        ';
        exit;
    }


?>