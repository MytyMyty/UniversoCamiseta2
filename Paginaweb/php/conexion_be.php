<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_register_db";
    $tablename="usuarios";
    //Conexion a Base de datos
    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed". $conn->connect_error);
    }else{
        echo 'Conexion exitosa';
    }

    //Chequear si existe la BD y crearla si no existe (Ya esta funcionaal!!)
    $sql = "SHOW DATABASES LIKE 'login_register_db'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // La BD existe, Seleccionarla
        $db = mysqli_select_db($conn, "login_register_db");
        echo"BD ya creada, Seleccionando..";
    } else {
        $dbcrear="CREATE DATABASE login_register_db";
        $check=mysqli_query($conn,$dbcrear);
        mysqli_select_db($conn,$dbname);
        echo "BD creada correctamente";
    }
    
    //Chequear si existe la Tabla de registro de usuarios y crearla si no existe (Funcional)
    $tabla="SHOW TABLEs LIKE 'USUARIOS'";
    $chtable=mysqli_query($conn,$tabla);
    if(mysqli_num_rows($chtable)<1){
        echo "Tabla no creada, Creando Tabla...";
        $tbcrear="CREATE TABLE USUARIOS(
            `id` INT NOT NULL AUTO_INCREMENT ,
            `nombre` VARCHAR(50) NOT NULL ,
            `apellidos` VARCHAR(100) NOT NULL ,
            `mail` VARCHAR(50) NOT NULL ,
            `contrasenna` VARCHAR(350) NOT NULL ,
            `fecha_nacimiento` DATE NOT NULL ,
            PRIMARY KEY (`id`))";
        $ok=mysqli_query($conn,$tbcrear);
        if(!$ok){
            echo "Fallo la creacion de tabla";
        }else{
            echo "Tabla Creada con exito";
        }
    }else{
        echo "Tabla ya existe";
    }

    $conn = new mysqli($servername, $username, $password,$dbname);



?>