<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d9893314cd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/master.css">
    <title>Lup</title>
</head>
<body>
    <?php include "./views/components/header.php" ?>

    <!--Section-->
    <main class="contenido">
        <div id="carouselExampleControls" class="carousel slide carousel-fade" style="height: 30rem;"  data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 30rem;">
                    <img src="./assets/img/slide1.jpeg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="fw-bold fs-1">Arrienda tu espacio con nosotros</h2>
                    </div>
                </div>
                <div class="carousel-item " style="height: 30rem;">
                    <img src="./assets/img/slide2.jpeg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="fw-boldc fs-1" >Elige bien donde construir tu hogar</h2>
                    </div>
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
        <div class="container text-center my-4">
            <div class="col p-3 border bg-light rounded"> 
                <form action="./filtrar.php" method="post">
                    <div class="container row">
                        <select class="form-select m-1 col-sm" aria-label=".form-select-sm example" name="estado">
                            <option selected>Estado</option>
                            <option value="1">Nuevo</option>
                            <option value="2">Usado</option>
                        </select>
                        <select class="form-select m-1 col-sm" aria-label=".form-select-sm example" name="tipone">
                            <option selected>Tipo Negocio</option>
                            <option value="1">Venta</option>
                            <option value="2">Arriendo</option>
                        </select>
                        <select class="form-select m-1 col-sm" aria-label=".form-select-sm example" name="precio">
                            <option selected>Precio</option>
                            <option value="1">Menos de $100.000.000</option>
                            <option value="2">$100.000.001 - $200.000.000</option>
                            <option value="3">$200.000.001 - $500.000.000</option>
                            <option value="3">$500.000.001 - $1.000.000.000</option>
                            <option value="3">Mas de $1.000.000.000</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary my-3 ">Buscar</button>
                </form>
        
                <p>¿Cuenta con un código de inmueble?</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ingresar Código
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ingrese Código</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="form-floating w-50 mx-auto mb-3">
                                    <input type="number" class="form-control" name="correo" placeholder="123456789" min=0 required>
                                    <label for="floatingInput">Codigo de propiedad</label>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Buscar</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            </form>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <?php
            include './config/ConexionDB.php';
            $connect = new ConexionDB();
            $conexion = $connect->conectar();

            $sql = "SELECT tipo FROM propiedad where estado_visualizacion = 'publica'";

            $consulta = mysqli_query($conexion,$sql);
            
            $casas = 0;
            $apart = 0;
            $lote = 0;
            $edif = 0;
            
            while ($tipo = mysqli_fetch_array($consulta)){
                if ($tipo['tipo'] == 'casa'){
                    $casas = $casas + 1;
                }
                if ($tipo['tipo'] == 'apartamento'){
                    $apart = $apart + 1;
                }
                if ($tipo['tipo'] == 'lote'){
                    $lote = $lote + 1;
                }
                if ($tipo['tipo'] == 'edificio'){
                    $edif = $edif + 1;
                }
            }

        ?>
        <div class="row my-4">
            <a href="./views/propiedades.php?w1=casa" class="nav-link text-dark col-sm">
                <div class="move">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-house-chimney"></i></h5>
                        <p class="card-text"><strong><?php echo $casas; ?></strong><br>Casas</p>
                        </div>
                    </div>
                </div>
            </a>  
            <a href="./views/propiedades.php?w1=apartamento" class="nav-link text-dark col-sm">
                <div class="">
                    <div class="card move">
                        <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-building"></i></h5>
                        <p class="card-text"><strong><?php echo $apart; ?></strong><br>Apartamentos</p>
                        </div>
                    </div>
                </div>
            </a>  
            <a href="./views/propiedades.php?w1=lote" class="nav-link text-dark col-sm">
                <div class="">
                    <div class="card move">
                        <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-screwdriver-wrench"></i></h5>
                        <p class="card-text"><strong><?php echo $lote; ?></strong><br>Lotes</p>
                        </div>
                    </div>
                </div>
            </a>  
            <a href="./views/propiedades.php?w1=edificio" class="nav-link text-dark col-sm">
                <div class="">
                    <div class="card move">
                        <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-hotel"></i></h5>
                        <p class="card-text"><strong><?php echo $edif; ?></strong><br>Edificios</p>
                        </div>
                    </div>
                </div>
            </a> 
        </div>
    </main>
    
    <?php include './views/components/footer.php' ?>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/switch.js"></script>
</body>
</html>