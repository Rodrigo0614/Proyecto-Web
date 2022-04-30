<?php
require "conexion.php";
if (isset($_POST['register'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['user']) >= 4 &&
        strlen($_POST['password']) >= 8
    ) {
        $mensaje = "";
        $name = trim($_POST['name']);
        $apellido = trim($_POST['apellido']);
        $correo = trim($_POST['correo']);
        $user = trim($_POST['user']);
        $password = trim($_POST['password']);
        $fechareg = date("d/m/y");

        $validar = "SELECT * FROM usuarios WHERE correo = '$correo' || usuario = '$user'";
        $validando = mysqli_query($mysqli, $validar);
        if ($validando->num_rows > 0) {
    ?>
            <h3 class="bad">El usuario y/o Email ya se encuantran registrados</h3>
            <?php
        } else {
            // consulta para insertar los datos
            $insertar = "INSERT INTO usuarios (usuario, password, correo, nombre, apellido, fecha_reg) VALUES ('$user','$password','$correo','$name','$apellido','$fechareg')";
            $guardando = mysqli_query($mysqli, $insertar);
            if ($guardando > 0) {
            ?>

                <h3 class="ok">Tu registro se realizo con éxito</h3>
            <?php
            } else {
            ?>
                <h3 class="bad">No fue posible realizar su registro con éxito</h3>
        <?php
            }
        }
        /* if ($resultado) {
    ?>
            <h3 class="ok">¡Te has registrado correctamente!</h3>
        <?php
        } else {
        ?>
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
        <?php
        }
    } else {
        ?>
        <h3 class="bad">iPor favor complete todos los campos correctamente!</h3>
    <?php

    */
    }elseif( strlen($_POST['user']) < 4 && strlen($_POST['user']) >0){
        ?>
        <h3 class="bad">iEl usuario debe contener más de 4 caracteres!</h3>
<?php
    }elseif( strlen($_POST['password']) < 8 && strlen($_POST['password'] >0)){
        ?>
        <h3 class="bad">iLa contraseña debe contener 8 o más caracteres!</h3>
<?php
    }else{
        ?>
        <h3 class="bad">iPor favor complete todos los campos correctamente!</h3>
    <?php
    }
}



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="icon" type="image/jpg" href="../img/Logox.png" />
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style2.css">


</head><br>



<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top: -30px;">

        <img src="../img/Logox.png" width="135" height="105" class="d-inline-block align-top" alt="">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="links">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.html"><span class="fs-5 text-light fw-bold  ">Inicio</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../html/pag2.html"><span class="fs-5 text-light fw-bold  ">Sacramentos</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../html/pag3.html"><span class="fs-5 text-light fw-bold  ">Aprende</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../html/pag4.html"><span class="fs-5 text-light fw-bold  ">Sobre nosotros</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../html/pag5.html"><span class="fs-5 text-light fw-bold  ">Contáctanos</span></a>
                    </li>


                </ul>

            </div>
            <div class="d-flex" id="barra">
                <a class="nav-link btn btn-outline" aria-current="page" href="../html/registro.php">Registrarse</a>
            </div>
            <div class="d-flex" id="barra">
                <a class="nav-link btn btn-outline" aria-current="page" href="../html/login.php">Iniciar sesion</a>
            </div>
        </div>
        </div>
    </nav>


</header>

<body>
    <br><br>
    </div class="text-center"><br><br><br><br>

    <div class="container">
        <form method="POST">
            <div class="card border-primary">
                <div class="card-header">
                    <h4 class="text-center">REGISTRO</h4>
                </div>
                <div class="card-body text-primary">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 align-self-center">
                            <img src="../img/register.png" class="img-fluid">
                        </div><br>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <br>
                            <input type="text" name="name" placeholder="Nombres" class="form-control"><br>
                            <input type="text" name="apellido" placeholder="Apellidos" class="form-control"><br>
                            <input type="email" name="correo" placeholder="Correo" class="form-control"><br>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12" class="form-control"><br>
                            <input type="text" name="user" placeholder="Usuario" class="form-control"><br>
                            <input type="password" name="password" placeholder="Contraseña" class="form-control">
                            <input type="submit" id="btnnn" name="register" value="Registrar" class="btn btn-primary"><br />


                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    </div>









    <script src="js/bootstrap.min.js"></script>


</body>

</html>