<?php  
    include '../../models/corredorModel.php';
    session_start();

    // Consulta
    $correo = $_REQUEST['email'];
    $contraseña = $_REQUEST['password'];

    $corredor = new Corredor;
    $consulta = $corredor->getCorredor($correo,$contraseña);

    // validacion del documento
    if ($consulta == false){
        echo '<div class="alert alert-success" type="alert-dismissible" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>Email y/o contraseña incorrectas </div>';
        
    }else{
        $_SESSION['username'] = $consulta['cedula'];
        $_SESSION['name'] = $consulta['nombres_completos'];
        $_SESSION['active'] = true;
        header ("Location: login.php");
    }
    
?>