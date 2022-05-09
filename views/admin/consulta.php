<?php  
    include "../../config/ConexionDB.php";

    // Consulta
    $email = $_REQUEST['email'];
    $contraseña = $_REQUEST['password'];

    $conexion = new ConexionDB;

    $consulta = mysqli_query($conexion->conectar(), "select * from usuario where email = '$email' and contraseña = '$contraseña'") or die ("Error en la consulta".mysqli_error($consulta));

    // validacion del documento
    if ($respuesta = mysqli_fetch_array($consulta)){ 
        session_start();
        $_SESSION['username'] = $respuesta['rol'];
        header ("Location: login-admin.php");
    }else{
        session_destroy();
        echo '<div class="alert alert-success" type="alert-dismissible" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>Email y/o contraseña incorrectas </div>';
    }
    
?>