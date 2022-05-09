<?php
    $email = $_REQUEST['correo']; // Recibir correo destinatario

    include 'conexion.php';

    $sql = "SELECT * FROM corredor WHERE email = '$email'";

    $consulta = mysqli_query($conexion,$sql);

    if ($fila = mysqli_fetch_array($consulta)){

        $correoD = "$email"; // Declarar Destianatario
        $titulo = "Solicitud de recuperación de contraseña (LUP)"; // Asunto del correo
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: mariotiskevin@gmail.com';
        
        // Cuerpo del correo
        $mensaje = '
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <title></title>
        </head>
        <body>
            <h3>Recuperacion de contraseña</h3>
            <p>HOLA! Sr(a). '.$fila['nombres_completos'].'</p>
            <p>Se ha solicitado la recuperacion de su contraseña para su cuenta en LUP</p>
            <p>Haga click al siguiente boton, sera redirigido para el cambio de su contraseña</p>
            <form action="http://localhost/lup/corredor/nueva-contrase%C3%B1a.php" method="post">
                <input type="hidden" name="cedula" value="'.$fila['cedula'].'">
                <input type="hidden" name="contraseña" value="'.$fila['contrasena'].'">
                <button type="submit">Reestablecer contraseña</button>
            </form>
            <p>Si NO ha sido usted haga caso omiso a este mensaje</p>
        </body>
        </html>';


        $correoR = "From: mariotiskevin@gmail.com"; // Remitente del correo
        
        if (mail($correoD, $titulo, $mensaje, $headers)){
            echo '<div class="alert alert-info" type="alert-dismissible" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> Verifique su correo electronico <span class="fw-bold">"'.$correoD.'"</span>, hemos enviado un enlace para reestablecer su contraseña</div>';
        }else{
            echo '<div class="alert alert-danger" type="alert-dismissible" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> Error al enviar el correo</div>';
        }
    }else{
        echo '<div class="alert alert-danger" type="alert-dismissible" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> <span class="fw-bold">ERROR</span> - EL correo electronico no corresponde a ningun usuario registrado en <span class="fw-bold">LUP</span></div>';
    }



    

?>