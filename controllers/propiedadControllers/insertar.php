<?php
    include_once '../../models/propiedadModel.php';
    // Recoleccion de datos
    $cod = $_REQUEST['codigo'];
    $nom = $_REQUEST['nombre'];
    $dir = $_REQUEST['direccion'];
    $pre = $_REQUEST['precio'];
    $ciu = $_REQUEST['ciudad'];
    $habi = $_REQUEST['habitaciones'];
    $baño = $_REQUEST['baños'];
    $gar = $_REQUEST['garaje'];
    $area = $_REQUEST['area'];
    $est = $_REQUEST['estrato'];
    $esta = $_REQUEST['estado'];
    $tipo = $_REQUEST['tipo'];
    $tine = $_REQUEST['tipo_negocio'];
    $des = $_REQUEST['descripcion'];
    $cedula = $_REQUEST['cedula'];
    $estado_v = $_REQUEST['estado_visualizacion'];

    $propiedad = new Propiedad;
    $propiedad->setPropiedad($cod,$nom,$dir,$pre,$ciu,$habi,$baño,$gar,$area,$est,$esta,$tipo,$tine,$des,$cedula,$estado_v);

    

?>
<div class="alert alert-success my-2" type="alert-dismissible" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <?php echo "Registrado exitosamente"; ?>
</div>
