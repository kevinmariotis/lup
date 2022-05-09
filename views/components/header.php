<!-- Barra de navegacion -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand " href="/lup/index.php"><img src="/lup/assets/img/logo/LUP.png" width="30px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/lup/index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/lup/views/propiedades.php?w1=todo">Propiedades</a>
                </li>
            </ul>

        <?php
            if (isset($_SESSION['active'])){
        ?>
            <div class="btn-group mx-2">
                <a href="/lup/views/corredor/perfil-corredor.php" class="text-decoration-none m-0 text-light fs-4"><span><?php echo $_SESSION['name']; ?></span> <i class="fas fa-user"></i></a>
                <button type="button" class="btn btn-transparent dropdown-toggle dropdown-toggle-split text-light" data-bs-toggle="dropdown" aria-expanded="false">
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Configuracion</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/lup/views/corredor/salir.php">Cerrar Sesion</a></li>
                </ul>
            </div>
        <?php
            }else{
        ?>
                <ul class="navbar-nav p-0 m-0 ms-3">
                    <li class="nav-item mx-1">
                        <a class="btn btn-warning" href="/lup/views/corredor/login.php">Iniciar Sesion</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="btn btn-secondary" href="/lup/views/corredor/solicitar-registro.php">Registrarse</a>
                    </li>
                </ul>
        <?php
            }
        ?>
        </div>
    </div>
</nav>