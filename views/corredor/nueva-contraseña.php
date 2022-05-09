<?php

    $cedula = $_REQUEST['cedula'];
    $contraseña = $_REQUEST['contraseña'];
    include 'conexion.php';

    $sql = "SELECT * FROM corredor WHERE cedula = '$cedula' and contrasena = '$contraseña'";

    $consulta = mysqli_query($conexion,$sql);

    if ($cedula){
        if ($consulta = mysqli_fetch_array($consulta)){
            //exito
        }else{
            header('location: login.php');
        }
    }else{
        header('location: login.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUP | Cambiar contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body class="bg-primary">
    <!-- Header -->
    <?php include "../components/header.php" ?>

        <div class="container p-4 mx-auto">
            <form method="POST" action="nueva-contraseña.php">
                <div class="bg-light p-4  w-50 mx-auto rounded">
                    <div class="d-flex justify-content-center">
                        <img src="../img/logo/LUP.png" alt="lOGO LUP" clase="ms-5">
                    </div>
                    <h2 class=" mb-3 text-center bg-light fs-1">Recuperar contraseña</h2>
                    <?php
                        if (isset($_REQUEST['cambiar'])){
                            include 'crud-propiedad/cambiar_contraseña.php';
                        }
                    ?>
                    <input type="hidden" name="cedula" value="<?php echo $cedula ?>">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="contraseña" placeholder="Password" required>
                        <label for="floatingInput">Nueva contraseña</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="confirmar" placeholder="Password" required>
                        <label for="floatingInput">Confirmar contraseña</label>
                    </div>
                    <div class="my-3 text-center ">
                        <input type="submit" value="Cambiar contraseña" name="cambiar" class="btn btn-primary ">
                    </div>
                    <div class="text-center">
                        <a href="login.php">Cancelar</a>
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