<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/master.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <title>Corredor | LUP</title>
</head>

<body >
    <!-- Header -->
    <?php include "./components/header.php" ?>
    
    <main>
        <!-- Datos del perfil del corredor -->
        <div class="container">
        <?php
            $cedula = $_GET['w1'];

            include '../config/ConexionDB.php';
            $connect = new ConexionDB();
            $conexion = $connect->conectar();

            $sql1 = "select * from corredor where cedula = '$cedula'";

            $fila = mysqli_query($conexion,$sql1) or die ('Error al consultar'.mysqli_error($fila));

            while ($datos = mysqli_fetch_array($fila)){

        ?>
            <!-- Foto de perfil y nombre del corredor -->
            <div class="text-center my-4">
                <img src="../assets/img/avatar-e8cff4b76c3e751563b2b42e5a914aa8.jpg" alt="Foto de Perfil" class="rounded-circle mx-auto" width="100px" height="100px">
                <h3><?php echo $datos['nombres_completos']; ?></h3>
            </div>
            <!-- Datos personales del usuario-->
            <div class="container my-4 bg-light border">
                <h3>Datos Personales</h3>
                <p>Numero de documento: <?php echo $datos['cedula']; ?></p>
                <p>Edad: <?php echo $datos['edad']; ?></p>
                <p>Años de experiencia: <?php echo $datos['anos_experiencia']; ?></p>
                <p>Propiedades vendidas: <?php echo $datos['propiedades_vendidas']; ?></p>
            </div>
            <!-- datos de contacto -->
            <div class="container my-4 bg-light border">
                <h3>Contactar</h3>
                <p><i class="fas fa-envelope"></i> <?php echo $datos['email']; ?></p>
                <p><i class="fas fa-mobile-alt"></i> +57-<?php echo $datos['telefono_movil']; ?></p>

            </div>

        <?php } ?>
        </div>
        
        <!-- Card para mostrar las propiedades -->
        <div class="container bg-light border my-3">
            <div class="row d-flex justify-content-center">
                <h2 class="text-center mt-5">Propiedades del corredor</h2>
                <?php

                    $sql2 = "select * from propiedad where cedula = $cedula";

                    $prop = mysqli_query($conexion,$sql2) or die ('Error al consultar'.mysqli_error($prop));

                    while ($props = mysqli_fetch_array($prop)){
        
                ?>
                    <!-- Card para ver la informacion basica de la propiedad-->
                    <div class="card col-lg-3 p-0 mx-3 my-4"">
                        <img src="../assets/img/house-g94b118331_1920.jpg" width="100%" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title my-0 text-muted text-center" style="font-size : 12px"><?php echo $props['codigo']; ?></p>
                            <h5 class="card-title text-center"><?php echo $props['direccion']; ?></h5>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <i class="fas fa-bed"></i> <?php echo $props['habitaciones']; ?>
                                    </div>
                                    <div class="col">
                                        <i class="fas fa-bath"></i> <?php echo $props['baños']; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <i class="fas fa-car"></i> <?php echo $props['garaje']; ?>
                                    </div>
                                    <div class="col">
                                        <i class="fas fa-ruler-combined"></i> <?php echo $props['habitaciones'].'m²'; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center my-3">
                                <hr>
                                <h5>Precio: <span class="text-danger">$<?php echo $props['precio']; ?></span><span style="font-size: 12px;">COP</span></h5>
                                <hr>
                                <button class="btn btn-primary"><a href="./propiedad.php?w1=<?php echo $props['codigo'] ?>" class="m-0 p-0 nav-link text-light">Ver Propiedad</a></button>
                            </div>
                        </div>
                    </div>
                <?php
                } 
                ?>
            </div>
        </div>
    </main>
    <footer class="py-4 bg-light">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">
                    Copyright &copy; LUP 2021
                </div>
                <div>
                    <a href="#">Privacy Policy</a>
                            &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/switch.js"></script>
</body>
</html>