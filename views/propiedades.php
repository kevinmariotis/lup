<?php session_start(); ?>
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

    <h2 class="text-center my-4">Propiedades Publicadas</h2>
    <div class="row container mx-auto d-flex justify-content-center">
    <?php 
    
        $tipo = $_GET["w1"];
    
        include '../config/ConexionDB.php';
        $connect = new ConexionDB();
        $conexion = $connect->conectar();

        if ($tipo == 'todo'){
            $sql = "SELECT * from propiedad where estado_visualizacion = 'publica'";
        }else{
            $sql = "SELECT * from propiedad  where tipo = '$tipo' and estado_visualizacion = 'publica'";
        }

        $consulta = mysqli_query($conexion,$sql);
    ?>
    <div class="container px-5">
        <p class="text-uppercase text-muted"><i class="fa-solid fa-filter"></i> <?php echo $tipo ?>s</p>
        <hr>
    </div>
    <?php
        while ($props = mysqli_fetch_array($consulta)){
    ?>
        <!-- Card para ver la informacion basica de la propiedad-->
        <div class="card col-lg-3 p-0 mx-3 my-4">
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
                            <i class="fas fa-ruler-combined"></i> <?php echo $props['area'].'m²'; ?>
                        </div>
                    </div>
                </div>
                <div class="text-center my-3">
                    <hr>
                    <h5>Precio: <span class="text-danger">$<?php echo $props['precio']; ?></span><span style="font-size: 12px;">COP</span></h5>
                    <hr>
                    <button class="btn btn-primary"><a href="./propiedad.php?w1=<?php echo $props['codigo']; ?>" class="m-0 p-0 nav-link text-light">Ver Propiedad</a></button>
                </div>
            </div>
        </div>

    <?php
        };
    ?>
    </div>
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