<?php
    // Conexion a la base de datos
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "lup";

    $conexion = mysqli_connect($server,$user,$pass,$db) or die ("Error al conectar con la base de datos".mysqli_error($conexion));
?>