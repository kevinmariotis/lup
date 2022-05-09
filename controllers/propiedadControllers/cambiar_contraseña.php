<?php

    include 'conexion.php';
    $cedula = $_REQUEST['cedula'];
    $contraseña = $_REQUEST['contraseña'];
    $confirmacion = $_REQUEST['confirmar'];

    if ($contraseña == $confirmacion){
        $sql = "UPDATE corredor SET contrasena = '$contraseña' WHERE cedula = '$cedula'";

        $consulta = mysqli_query($conexion,$sql);
    }else{
        echo '<div class="alert alert-danger" type="alert-dismissible" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> Las contraseñas no coinciden</div>';
    }

?>