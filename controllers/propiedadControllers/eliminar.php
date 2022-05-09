<?php
    include '../../config/ConexionDB.php';
    include '../../models/propiedadModel.php';

    $codigo_eliminar = $_REQUEST['codigo_eliminar'];

    $propiedad = new Propiedad();
    $propiedad->deletePropiedad($codigo_eliminar);
?>
<div class="alert alert-success my-2" type="alert-dismissible" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <?php echo "Eliminado exitosamente"; ?>
</div>