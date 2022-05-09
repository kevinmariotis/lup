<?php

    session_start();

    if (!isset($_SESSION['username'])){
        header ("location: login-admin.php");
    }else{
        if ($_SESSION['username'] == 'administrador'){
            // exito
        }else{
            header ("location: login-admin.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUP | Administrador</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../index.php">LUP</a>
            <!-- Boton navbar -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Boton Sidebar -->
            <button class="btn btn-dark btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </div>
    </nav>
    <!-- Sidenav lateral -->
    <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <!-- Dropdown -->
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                                <div><a class="dropdown-item" href="#">Ajustes</a></div>
                                <div><hr class="dropdown-divider"></div>
                                <div>
                                    <a class="dropdown-item" href="salir.php">Cerrar Sesion</a>
                                </div>
                            </div>
                        </div>
                        <div class="nav">
                             <div class="nav">
                            <a class="nav-link" href="admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Dashboard
                            </a>
                        </div>
                            <div class="sb-sidenav-menu-heading">Registros</div>
                            <a class="nav-link" href="admin-corredores.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                Corredores
                            </a>
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="admin-propiedades.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Propiedades
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="text-center my-4">Listado de Propiedades</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- Button trigger modal -->
                                <?php
                                    if (isset($_REQUEST['eliminar_modal'])){
                                        include '../../controllers/propiedadControllers/eliminar.php';
                                    }
                                ?>
                                <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Recargar tabla"><a href="admin-propiedades.php"><i class="fas fa-sync-alt"></i></a></button>
                            </div>
                            <!-- Tabla para el listado de corredores -->
                            <div class="card-body">
                                <table class="table" id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>direccion</th>
                                            <th>tipo</th>
                                            <th>Fecha de publicacion</th>
                                            <th>Precio</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Ciclo de consulta para agregar los registros a la tabla -->
                                        <?php

                                            include_once '../../config/ConexionDB.php';
                                            $conexion = new ConexionDB;

                                            $consulta = mysqli_query($conexion->conectar(), "select * from propiedad");

                                            while ($resultado = mysqli_fetch_array($consulta)){
                                        ?>
                                        <tr>
                                            <td><?php echo $resultado['codigo']; ?></td>
                                            <td><?php echo $resultado['direccion']; ?></td>
                                            <td><?php echo $resultado['tipo']; ?></td>
                                            <td><?php echo $resultado['fecha_publicacion']; ?></td>
                                            <td>$<?php echo $resultado['precio']; ?></td>
                                            <td>
                                                <!-- Boton para mostrar datos -->
                                                <button type="button" name="mostrar" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#mostrar<?php echo $resultado['codigo']; ?>">
                                                    <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                                                </button>
                                                <!-- Boton para eliminar datos -->
                                                <button type="submit" name="eliminar" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar<?php echo $resultado['codigo']; ?>">
                                                    <div class="sb-nav-link-icon"><i class="fas fa-trash-alt"></i></div>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Modals de opciones -->
                                        <?php 
                                            include 'modals-propiedad/modalmostrar.php';
                                            include 'modals-propiedad/modaleliminar.php';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </main>
                <!-- Fotter de la pagina -->
                <footer class="py-4 bg-light">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; LUP 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    <!--Script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../../assets/js/datatables-simple-demo.js"></script>
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>
