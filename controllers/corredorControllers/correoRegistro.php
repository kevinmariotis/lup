<?php
    $correoD = "$email"; // Declarar Destianatario
    $titulo = "Informacion de registro (Credenciales LUP)"; // Asunto del correo
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: mariotiskevin@gmail.com';
    // cuerpo del corrreo
    $mensaje = '
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <title></title>
        </head>
        <body>
            <h3>BIENVENID@</h3>
            <p>Hola! Sr(a). '.$nom.'</p>
            <p>De parte del equipo de LUP le damos una grata bienvenida a nuestra plataforma</p>
            <p>Estamos muy contentos que usted haga parte de nuestra comunidad, sus credenciales de inicio de sesion son las siguientes:</p>
            <p>Usuario: '.$email.'</p>
            <p>contraseña: '.$pass.'</p>
            <a href="http://localhost/lup/corredor/login.php">Iniciar Sesion</a>
        </body>
        </html>';
    mail($correoD,$titulo,$mensaje,$headers);