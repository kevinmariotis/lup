<?php
    class Propiedad
    {
        public function setPropiedad($cod,$nom,$dir,$pre,$ciu,$habi,$baño,$gar,$area,$est,$esta,$tipo,$tine,$des,$cedula,$estado_v)
        {
            $conexion = new ConexionDB;

            $sql = "insert into propiedad (codigo,nombre,direccion,precio,ciudad,habitaciones,baños,garaje,area,estrato,estado,tipo,tipo_negocio,descripcion,cedula,estado_visualizacion) values ($cod,'$nom','$dir',$pre,'$ciu',$habi,$baño,$gar,$area,$est,'$esta','$tipo','$tine','$des',$cedula,'$estado_v')";

            $insertar = mysqli_query($conexion->conectar(),$sql) or die ("Error al insertar". mysqli_error($insertar));
        }

        public function updatePropiedad($cod,$nom,$dir,$pre,$ciu,$habi,$baño,$gar,$area,$est,$esta,$tipo,$tine,$des)
        {
            $conexion = new ConexionDB;

            $sql = "UPDATE `propiedad` SET `nombre`='$nom',`direccion`='$dir',`precio`=$pre,`ciudad`='$ciu',`habitaciones`=$habi,`baños`=$baño,`garaje`=$gar,`area`=$area,`estrato`=$est,`estado`='$esta',`tipo`='$tipo',`tipo_negocio`='$tine',`descripcion`='$des' WHERE codigo = $cod";

            $insertar = mysqli_query($conexion->conectar(),$sql) or die ("Error al insertar". mysqli_error($insertar));
        }

        public function deletePropiedad($codigo)
        {
            $conexion = new ConexionDB;

            $sql = "delete from propiedad where codigo = $codigo";

            $eliminar = mysqli_query($conexion->conectar(),$sql) or die ('error al eliminar'. mysqli_error($eliminar));
        }
    }

?>