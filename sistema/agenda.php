<?php

require "../sistema/conexion.php";

session_start();
if (!isset($_SESSION['id'])) {
    header("Location: index.php");
}

$nombre = $_SESSION['nombre'];
$apellido = "SELECT apellido from usuarios";
$resultadoa = mysqli_query($mysqli, $apellido);
$tipo_usuario = $_SESSION['tipo_usuario'];

if (isset($_POST['envform'])) {
    if (
        strlen($_POST['Nombre']) >= 1 &&
        strlen($_POST['Apellido']) >= 1 &&
        strlen($_POST['Cedula']) >= 1 &&
        strlen($_POST['Telefono']) >= 1 &&
        strlen($_POST['Correo']) >= 1 &&
        strlen($_POST['tipo']) >= 1 &&
        strlen($_POST['dia']) >= 1 &&
        strlen($_POST['hora']) >= 1
    ) {
        $name = trim($_POST['Nombre']);
        $apellido = trim($_POST['Apellido']);
        $correo = trim($_POST['Correo']);
        $telefono = trim($_POST['Telefono']);
        $tipo = trim($_POST['tipo']);
        $cedula = trim($_POST['Cedula']);
        $dia = trim($_POST['dia']);
        $hora = trim($_POST['hora']);
        $fecha_form = date("y/m/d");
        $consulta = $sql = "INSERT INTO agenda(nombre, apellido, id, telefono, email, tipo, dia, hora) VALUES ('$name','$apellido','$cedula','$telefono','$correo','$tipo','$dia','$hora')";
        $resultado = mysqli_query($mysqli, $consulta);

        if ($resultado) {
?>
            <h3 class="ok">¡Su cita ha sido agendada con éxito, pronto nos contactaremos!</h3>
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
    }
}



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Contacto</title>
    <link rel="icon" type="image/jpg" href="../img/Logox.png" />
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <script src="https://kit.fontawesome.com/a13612c050.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style2.css">

    <script src="../js/bootstrap.min.js"></script>
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
                        <a class="nav-link active" aria-current="page" href="index.php"><span class="fs-5 text-light fw-bold  ">Inicio</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../usuario/pag2.php"><span class="fs-5 text-light fw-bold  ">Sacramentos</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../usuario/pag3.php"><span class="fs-5 text-light fw-bold  ">Aprende</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../usuario/pag4.php"><span class="fs-5 text-light fw-bold  ">Sobre nosotros</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../usuario/contacto.php"><span class="fs-5 text-light fw-bold  ">Contáctanos</span></a>
                    </li>
                </ul>


                </ul>
                <div class="d-flex" id="barra">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $nombre; ?></a>
                    <a class="nav-link btn btn-outline" aria-current="page" href="../sistema/logout.php">Cerrar sesión</a>

                </div>

            </div>
        </div>
        </div>
    </nav>


</header>

<body>



    <main class="main">

        <section class="info">
            <div class="container text-black">

                <form method="POST" id="form" class="row g-3">

                    <div class="">
                        <p>
                        <h3>FORMULARIO DE AGENDAMIENTO</h3>
                        </p>
                    </div>

                    <div class="f1">
                        <fieldset>
                            <div class="">
                                <legend>Diligencie sus datos.</legend><br />


                            </div>
                            <br />
                            <div class="container">
                                <div class="form-group" id="user-group">
                                    <img id="userLogo" src="../img/fartificial.png" align="right" width=40%>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Nombres*</label>
                                    <input type="text" name="Nombre" id="Nombre" placeholder="Escriba sus nombres" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Apellidos*</label>
                                    <input type="text" name="Apellido" id="Apellido" placeholder="Escriba sus apellidos" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Correo electrónico*</label>
                                    <input type="email" name="Correo" id="Correo" placeholder="micorreo@example.com" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                        <label for="">Teléfono*</label>
                                        <input type="text" name="Telefono" id="Telefono" placeholder="Escriba su número de teléfono" class="form-control" required>
                                    </div>
                                <div class="col-md-3">
                                    <label for="">Cédula*</label>
                                    <input type="text" name="Cedula" id="Cedula" placeholder="Ingrese su cédula" class="form-control" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="">Tipo de evento:</label>
                                    <select class="form-select" name="tipo" id="Solicitud" required>
                                        <option>Elija una opción:</option>
                                        <option value="Bautizo">Bautizo</option>
                                        <option value="Confirmación">Confirmación</option>
                                        <option value="Matrimonio">Matrimonio</option>
                                    </select>
                                </div>




                                <div class="col-md-3">
                                    <label for="">Día para el evento:</label>
                                    <input type="date" name="dia" id="Fecha" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Hora del evento:</label>
                                    <select class="form-select" name="hora" id="Solicitud" required>
                                        <option>Elija una opción:</option>
                                        <option value="4 PM">4 PM</option>
                                        <option value="5 PM">5 PM</option>
                                        <option value="6 PM">6 PM</option>
                                        <option value="7 PM">7 PM</option>
                                        <option value="8 PM">8 PM</option>
                                    </select>
                                </div>


                        </fieldset>
                    </div>
                    <br>
                    



                    <div class="f2">
                        <fieldset>

                            <legend>Términos y condiciones</legend>

                            <input type="radio" name="Registro" required> Con el diligenciamiento de éste formulario, autorizo de
                            manera expresa el tratamiento de mis datos personales.</p>


                        </fieldset>
                    </div>

                    <div class="text-center">
                        <p><input type="submit" name="envform" value="Enviar solicitud" id="botonenviar" class="btn btn-secondary"><span> </span><input type="submit" name="button" value="Editar" id="botoneditar" class="btn btn-warning"></p>
                    </div>
                </form>





            </div>




            </article>
            </div>
        </section>
        <br>
        <hr><br>
        <section>

            <div class="container">

                <div class="table-responsive">

                    <table class="table" id="tabla">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Mensajes</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="tabla-body">

                        </tbody>
                    </table>

                </div>


            </div>

        </section>

        <footer class="footer">
            <div class="container bg-dark text-light">
                <div class="text-center">
                    <img src="../img/icono1.png " class="rounded" alt="Facebook" title="" width="5%">
                    <img src="../img/icono2.png" class="rounded" alt="Twitter" title="" width="5%">
                    <img src="../img/icono3.png" class="rounded" alt="Youtube" title="" width="5%">
                </div>


                <p class="copy text-center">&copy; COPYRIGHT © 2022 KADI - TODOS LOS DERECHOS RESERVADOS.<br> Steven
                    rizo</p>


            </div>

        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
        <script src="../js/sesion.js"></script>
        <script src="../js/contactenos.js"></script>
</body>

</html>