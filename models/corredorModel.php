<?php

    class Corredor
    {
        public function setCorredor($ced,$nom,$edad,$tel,$años,$pro,$email)
        {
            $conexion = new ConexionDB;

            //generar contraseña aleatoria
            $caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            $longpalabra=8;
            for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
                $x = rand(0,$n);
                $pass.= $caracteres[$x];
            }

            $sql = "insert into corredor (cedula,nombres_completos,edad,telefono_movil,anos_experiencia,propiedades_vendidas,email,contrasena) values ('$ced','$nom',$edad,'$tel',$años,$pro,'$email','$pass')";
            $insertar = mysqli_query($conexion->conectar(), $sql);

        }

        public function getCorredor($correo,$contraseña)
        {
            $conexion = new ConexionDB;

            $sql = "select * from corredor where email = '$correo' and contrasena = '$contraseña'";
            $consultar = mysqli_query($conexion->conectar(),$sql) or die ("Error al insertar".mysqli_error($consultar));

            if ($res = mysqli_fetch_array($consultar)){
                return $res;
            }

            return false;
        }

        public function updateCorredor($ced,$nom,$edad,$tel,$años,$pro,$email,$pass)
        {
            $conexion = new ConexionDB;

            $sql = "update corredor set cedula = '$ced',nombres_completos = '$nom',edad = $edad,telefono_movil = '$tel',anos_experiencia = $años,propiedades_vendidas = $pro,email = '$email',contrasena = '$pass' where cedula = '$ced'";
            $insertar = mysqli_query($conexion->conectar(),$sql) or die ("Error al insertar".mysqli_error($insertar));

        }

        public function setSolicitud($ced,$nom,$edad,$tel,$años,$pro,$email)
        {
            $conexion = new ConexionDB;

            $consultar = mysqli_query($conexion->conectar(),"SELECT * FROM corredor WHERE email = '$email' OR cedula = '$ced'");

            if ($fila = mysqli_fetch_array($consultar)){
                $mensaje = '<div class="alert alert-warning" type="alert-dismissible" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    El correo electronico y/o el numero de cedula que ingreso ya se encuentra registrado en lup
                </div>';
                return $mensaje;
            }else{
                $sql = "insert into solicitud_registro (cedula,nombres_completos,edad,telefono_movil,anos_experiencia,propiedades_vendidas,email) values ('$ced','$nom',$edad,'$tel',$años,$pro,'$email')";

                $insertar = mysqli_query($conexion->conectar(),$sql) or die ("Error al insertar".mysqli_error($insertar));

                $mensaje = '<div class="alert alert-info" type="alert-dismissible" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Solicitud realizada correctamente</strong><br>
                    Nos contactaremos con usted muy pronto para confirmar sus datos y poder crear su usuario en <strong>LUP</strong>
                </div>';
                return $mensaje;
            }
        }

        public function deleteSolicitud($cedula)
        {
            $conexion = new ConexionDB;

            $sql = "delete from solicitud_registro where cedula = '$cedula'";
            $eliminar = mysqli_query($conexion->conectar(),$sql) or die ('error al eliminar'. mysqli_error($eliminar));
        }

        public function deleteCorredor($cedula)
        {
            $conexion = new ConexionDB;

            $sql = "delete from corredor where cedula = '$cedula'";
            $eliminar = mysqli_query($conexion->conectar(),$sql) or die ('error al eliminar'. mysqli_error($eliminar));
        }
    }

?>