<?php
    // Recoleccion de datos
    $ced = $_REQUEST['cedula'];
    $nom = $_REQUEST['nombre'];
    $edad = $_REQUEST['edad'];
    $tel = $_REQUEST['telefono'];
    $años = $_REQUEST['años_experiencia'];
    $pro = $_REQUEST['propiedades_vendidas'];
    $email = $_REQUEST['email'];

    $corredor = new Corredor;
    $corredor->setCorredor($ced,$nom,$edad,$tel,$años,$pro,$email);
    $corredor->deleteSolicitud($ced);

?>
    <!-- Alerta con mensaje de respuesta -->
    <div class="alert alert-success" type="alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <?php echo "Registrado exitosamente"; ?>
    </div>