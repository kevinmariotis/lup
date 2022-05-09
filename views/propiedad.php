<?php session_start() ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet"> 
    <title>Propiedad</title>
    <!--Css-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/master.css">
    <!--Bootstrap.min-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--CDN Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      *{
          box-sizing: border-box;
          font-family: 'Roboto', sans-serif;
      }

      .Image{
          height: 72%;
          width: 100%;
      }

      .p{
          font-size: 1em;
      }

    </style>
    
</head>
<body>
    <!-- Header -->
    <?php include "./components/header.php" ?>

    <?php 
    
        include '../config/ConexionDB.php';
        $connect = new ConexionDB();
        $conexion = $connect->conectar();
        
        $codigo = $_GET['w1'];

        $sql = "SELECT * from propiedad WHERE codigo = $codigo";

        $consulta = mysqli_query($conexion,$sql);

        $propiedad = mysqli_fetch_array($consulta);
    
    ?>


    <!-- Corusel -->
    <div class="d-flex justify-content-center m-4">
        <div id="carouselExampleControls" class="carousel slide carousel-fade w-50 p-3 border" style="height: 25rem;"  data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../assets/img/house-g94b118331_1920.jpg" style="max-height: 23rem;" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="../assets/img/house-g9462f9d93_1920.jpg" style="max-height: 23rem;" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" style="height: 30rem;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" style="height: 30rem;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <p class="container text-white text-center bg-primary gradient fs-4 fst-italic rounded">Precio: <i class="fa fa-usd" aria-hidden="true"></i><?php echo $propiedad['precio'] ?></p>
    <!--container-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
              <div class="row p-3 border border-1">
                <div class="col-sm m-2 text-center">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title m-0"><i class="fa-solid fa-barcode"></i></h5>
                        <p class="mt-0 p-0">Codigo de propiedad</p>
                        <p class="card-text"><strong><?php echo $propiedad['codigo'] ?></strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm m-2 text-center">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title m-0"><i class="fa-solid fa-bed"></i></h5>
                        <p class="mt-0 p-0">Habitaciones</p>
                        <p class="card-text"><strong><?php echo $propiedad['habitaciones'] ?></strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm m-2 text-center">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title m-0"><i class="fa-solid fa-bath"></i></h5>
                        <p class="mt-0 p-0">Baños</p>
                        <p class="card-text"><strong><?php echo $propiedad['baños'] ?></strong></p>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-sm m-2 text-center">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title m-0"><i class="fa-solid fa-car"></i></h5>
                        <p class="mt-0 p-0">Garajes</p>
                        <p class="card-text"><strong><?php echo $propiedad['garaje'] ?></strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm m-2 text-center">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title m-0"><i class="fa-solid fa-ruler-combined"></i></h5>
                        <p class="mt-0 p-0">Area de construccion</p>
                        <p class="card-text"><strong><?php echo $propiedad['area'] ?>M²</strong></p>
                      </div>
                    </div>
                </div>
                <div class="col-sm m-2 text-center">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title m-0"><i class="fa-solid fa-users"></i></h5>
                        <p class="mt-0 p-0">Estrato</p>
                        <p class="card-text"><strong><?php echo $propiedad['estrato'] ?></strong></p>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-sm m-2 text-center">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title m-0"><i class="fa-solid fa-home-alt"></i></h5>
                        <p class="mt-0 p-0">Tipo de inmueble</p>
                        <p class="card-text text-uppercase"><strong><?php echo $propiedad['tipo'] ?></strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm m-2 text-center">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title m-0"><i class="fa-solid fa-battery-half"></i></h5>
                        <p class="mt-0 p-0">Estado del inmueble</p>
                        <p class="card-text text-uppercase"><strong><?php echo $propiedad['estado'] ?></strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm m-2 text-center">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title m-0"><i class="fa-solid fa-hand-holding-dollar"></i></h5>
                        <p class="mt-0 p-0">Tipo de negocio</p>
                        <p class="card-text text-uppercase"><strong><?php echo $propiedad['tipo_negocio'] ?></strong></p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <?php 
                
                $cedula = $propiedad['cedula'];

                $sql = "SELECT * from corredor WHERE cedula = '$cedula'";

                $consult = mysqli_query($conexion,$sql);

                $fila = mysqli_fetch_array($consult);
            
            ?>
            <div class="col-sm ms-1 border border-1 p-3">
              <h2 class="bg-primary bg-gradient text-white text-center fs-6">Corredor (a)</h2>
              <img src="img/avatar-e8cff4b76c3e751563b2b42e5a914aa8.jpg" class="col-sm-3 col-lg-3 imgw rounded-circle" alt="">
              <p class="fs-3"><?php echo $fila['nombres_completos'] ?></p>
              <h5 class="fw-bold fs-6">Descripción:</h5>
              <p class="fst-italic">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, veritatis eum doloribus molestiae quas praesentium magnam repellat inventore fuga consequuntur assumenda error nesciunt corporis voluptate sint, sapiente asperiores. Error, officiis.</p>
              <a class="btn btn-warning btn-sm" href="./perfil-corredor.php?w1=<?php echo $fila['cedula'] ?>" role="button">Perfil del Corredor</a>
            </div>
        </div>
    </div>
<hr class="border border-1 border-dark">

<!--Aside-->
<div class="row">
    <aside class="col-lg-12 text-center">
        <a class="btn btn-primary" href="#" role="button"><i class="fa-brands fa-facebook-square" style="font-size: 24px;"></i> Facebook</a>
        <a class="btn btn-warning" href="#" role="button"><i class="fa-brands fa-instagram" style="font-size: 24px;"></i> Instagram</a>
    </aside>
</div><!--Aside-->

</div> <!--Container principal-->
<br>
<!--Footer-->
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