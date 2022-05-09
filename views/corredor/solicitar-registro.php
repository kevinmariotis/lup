<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/footer.css">
</head>
<body class="bg-primary">
    <!-- Header -->
    <?php include "../components/header.php" ?>
    
        <div class="container p-4 mx-auto"> 
            <form method="POST" action="./solicitar-registro.php" class="my-5">
                <div class="bg-light p-4  w-50 mx-auto rounded">
                    <div class="d-flex justify-content-center">
                        <img src="../../assets/img/logo/LUP.png" alt="lOGO LUP" clase="ms-5">
                    </div>
                    <legend class=" mb-3 text-center bg-light fs-1">Solicitar Registro</legend>
                    <?php
                        if (isset($_REQUEST['solicitar'])){
                            include_once '../../config/ConexionDB.php';
                            include_once '../../controllers/corredorControllers/solicitud.php';
                        }
                    ?>
                    <!-- Formulario de registro -->
                <form action="solicitar-registro.php" method="post">
                    <div class="form-floating my-3">
                        <input type="text" class="form-control" name="cedula" placeholder="Cedula" required>
                        <label>Cedula</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="text" class="form-control" name="nombre" placeholder="nombre" required>
                        <label>Nombre Completo</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="number" class="form-control" name="edad" placeholder="edad" min="0" required>
                        <label>Edad</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="text" class="form-control" name="telefono" placeholder="telefono" required>
                        <label>Numero de telefono</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="number" class="form-control" name="años_experiencia" placeholder="años de experiencia" min="0" required>
                        <label>Años de experiencia</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="number" class="form-control" name="propiedades_vendidas" placeholder="propiedades vendidas" min="0" required>
                        <label>Propiedades vendidas</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="email" class="form-control" name="email" placeholder="email" required>
                        <label>Email</label>
                    </div>
                    <div class="my-3 text-center">
                        <button type="submit" class="btn btn-primary" name="solicitar">Solicitar Registro</button>
                    </div>
                </form>
                    <div class="text-center">
                    <a href="login.php">Volver</a>
                    </div>
                </div>
            </form>
        </div>
               
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
        
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>