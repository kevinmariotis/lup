<?php
    include_once '../../config/ConexionDB.php';
    $codigo = $_GET["w1"];
    $estado_v = $_GET["w2"];

    $connect = new ConexionDB;

    $sql = "update propiedad set estado_visualizacion = '$estado_v' where codigo = '$codigo'";

    $insertar = mysqli_query($connect->conectar(),$sql) or die ("Error al insertar".mysqli_error($insertar));

    header('location: /lup/views/corredor/perfil-corredor.php');

?>