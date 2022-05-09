<?php
    require_once "../../models/corredorModel.php";

    $ced = $_REQUEST['cedula'];
    $nom = $_REQUEST['nombre'];
    $edad = $_REQUEST['edad'];
    $tel = $_REQUEST['telefono'];
    $años = $_REQUEST['años_experiencia'];
    $pro = $_REQUEST['propiedades_vendidas'];
    $email = $_REQUEST['email'];

    $corredor = new Corredor;
    $mensaje = $corredor->setSolicitud($ced,$nom,$edad,$tel,$años,$pro,$email);
    echo $mensaje;
?>
    