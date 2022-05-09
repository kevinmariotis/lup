<?php
    // Conexion a la base de datos
    class ConexionDB
    {
        public function conectar()
        {
            $conexion = mysqli_connect("localhost","root","","lup") or die ("Error al conectar con la base de datos".mysqli_error($conexion));

            return $conexion;
        }
    }
    
?>