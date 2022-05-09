<?php

    $ced = $_REQUEST['cedula_eliminar'];

    $corredor = new Corredor;
    $corredor->deleteCorredor($ced);
    
?>
    <div class="alert alert-success" type="alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <?php echo "Eliminado exitosamente"; ?>
    </div>