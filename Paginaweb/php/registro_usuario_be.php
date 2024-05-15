<?php

    //Se incluye el file de Conexion a la Base de Datos
    include 'conexion_be.php';


    //Obtencion de datos del Formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $mail = $_POST['mail'];
    $contrasenna = $_POST['contrasenna'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    //Encriptar contraseña
    $contrasenna = hash('sha512', $contrasenna);

    //Creacion de la query para Añadir datos a la BD
    $query = "INSERT INTO usuarios(nombre, apellidos, mail, contrasenna, fecha_nacimiento) VALUES('$nombre','$apellidos','$mail','$contrasenna','$fecha_nacimiento')";
    
    //Verificacion de Usuario ya registrado
    $verificar_correo = mysqli_query($conn, "SELECT * FROM usuarios WHERE mail='$mail' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo'
            <script>
                alert("Correo ya Registado!! Inicie Sesion...");
                window.location ="../formulario.php";
            </script>
        ';
        exit();
    }


    //Ejecucion de la Conexion y luego la Query
    $ejecutar = mysqli_query($conn, $query);

    //Se vuelve al Index si es que se registra correctamente
    if($ejecutar){

        echo '
            <script>
                alert("Usuario Registrado Correctamente!");
                window.location ="../../index.php";
            
            </script>
        ';
    }
    

?>