<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: index1.php");

    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="formulario">
        <h1>Inicio de Sesion</h1>
        <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
            <div class="username" required>
                <input type="text" name="mail" required>
                <label>Mail
                </label>
            </div>
            <div class="username">
                <input type="password" name="contrasenna" required>
                <label>Contraseña</label>
            </div>
            <div class="recordar">¿Olvido su Contraseña?
            </div>
            <input type="submit" value="Iniciar">
            <div class="registrarse">
                Quiero <a href="registro.php">Registrarme Ya!</a>
            </div>
        </form>
    </div>
</body>
</html>