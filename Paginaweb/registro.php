<!DOCTYPE html>
<html lang="es">
<head>
    <script type="text/javascript" src="js/pass_validar.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style2.css">
    <title>Registro</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <section class="form-register">
        <h4>Registro de Usuario
        </h4>
        <form action="php/registro_usuario_be.php" id="frm" method="POST" class="formulario__register" enctype="multipart/form-data">
            <input class="controls" type="text" name="nombre" id="nombres" placeholder="Ingrese su Nombre" required>
            <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus Apellidos" required>
            <input class="controls" type="email" name="mail" id="correo" placeholder="Ingrese su Correo" required>
            <input class="controls" type="password" name="contrasenna" id="contrasena" placeholder="Ingrese su Contraseña" required>
            <input class="controls" type="password" name="contrasenna2" id="recontrasena" placeholder="Re-Ingrese su Contraseña" required>
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input class="controls" type="date" name="fecha_nacimiento" id="fecha-nacimiento" value="2009-01-01" min="1900-01-01" max="2009-01-01" required>
            <p>Estoy de acuerdo con los <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&pp=ygUXbmV2ZXIgZ29ubmEgZ2l2ZSB5b3UgdXA%3D">Terminos y Condiciones</a></p>
            <input class="buttons" type="submit" value="Registrar" onclick="ejecutarComprobacion()" >
            <p><a href="formulario.php">¿Ya Tengo Cuenta?</a></p>
        </form>
    </section>
</body>
</html>
<script type="text/javascript">

    //Ejecuccion de las 2 Funciones de comprobacion
    function ejecutarComprobacion(){
        validarPasswords();
        return validarEmail();
        validarPasswords();
    }

    //Funcion para validacion de Contraseñas
    function validarPasswords(){

        //Obtencion de datos del formulario para corroborar su igualdad
        var pass= document.getElementById("contrasena").value;
        var repass= document.getElementById("recontrasena").value;

            if (pass!=repass){
                alert("Las Contraseñas no Coinciden");
                document.getElementById("recontrasena").value='';
                document.getElementById("contrasena").value='';
                return false;
            }
    }

    function validarEmail(){
                
                // Obtener input de correo
                var mailInp = document.getElementById('correo');
                
                // Exprexion para validar mail.
                var validarEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/ ;
            
                // Comparar mail y ejecutar comprobacion
                if( validarEmail.test(mailInp.value) ){
                    return true;
                }else{
                    alert('Ingrese Correo Correctamente');
                    document.getElementById("correo").value='';
                    return false;
                }
    }

</script>
