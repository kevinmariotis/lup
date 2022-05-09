<?php
    // Recoleccion de datos
    $ced = $_REQUEST['cedula'];
    $nom = $_REQUEST['nombre'];
    $edad = $_REQUEST['edad'];
    $tel = $_REQUEST['telefono'];
    $años = $_REQUEST['años_experiencia'];
    $pro = $_REQUEST['propiedades_vendidas'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];

    $corredor = new Corredor;
    $corredor->updateCorredor($ced,$nom,$edad,$tel,$años,$pro,$email,$pass);

    ?>
        <div class="alert alert-success" type="alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <?php echo "Actualizado exitosamente"; ?>
        </div>
    <?php

?>