<?php


session_start();
if (!isset($_SESSION['id'])) {
  header("Location: index.php");
}

$nombre = $_SESSION['nombre'];
$tipo_usuario = $_SESSION['tipo_usuario'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Contacto</title>
    <link rel="icon" type="image/jpg" href="../img/Logox.png" />
    <meta name="viewport"
        content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <script src="https://kit.fontawesome.com/a13612c050.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/bootstrap.css">
    

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
            <a class="nav-link active" aria-current="page" href="../sistema/pag2.php"><span class="fs-5 text-light fw-bold  ">Sacramentos</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../sistema/pag3.php"><span class="fs-5 text-light fw-bold  ">Aprende</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../sistema/pag4.php"><span class="fs-5 text-light fw-bold  ">Sobre nosotros</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../sistema/contacto.php"><span class="fs-5 text-light fw-bold  ">Cont??ctanos</span></a>
          </li>
        </ul>


        </ul>
        <div class="d-flex" id="barra">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" href="../sistema/principal.php" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $nombre;?></a>
          <a class="nav-link btn btn-outline" aria-current="page" href="../sistema/logout.php">Cerrar sesi??n</a>

        </div>

      </div>
    </div>
    </div>
  </nav>


</header>

<body>
   
  

    <div class="container">
      <div class="d-flex justify-content-center">
      <h2>Horario de atenci??n en la iglesia</h2>
    </div>
    <div class="d-flex justify-content-center">
        <table class="tablax">
        <tbody>
            <tr>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Jueves</th>
                <th>Sabado</th>
                <th>Domingo</th>
            </tr>
            <tr>
                <td>7 AM - 7 PM</td>
                <td>7 AM - 7 PM</td>
                <td>7 AM - 7 PM</td>
                <td>6:30 AM - 8 PM</td>
                <td>6:30 AM - 8 PM</td>
            </tr>
        </tbody>    
    </table>
  </div>
  <div class="text-center">
    <p>
        ??La iglesia no atiende los dias no mencionados en la tabla!
    </p><br>
  
    
    
    <h2>Eventos especiales son todos los dias de la semana</h2>

    <b><i><p style="font-family: Arial, Helvetica, sans-serif">
        ??Los eventos se actualizan cada semana!
    </p></i></b>

    <i><b><p style="font-family: Arial, Helvetica, sans-serif">
        ??Los eventos siempre son de 4 PM hasta las 8 PM!
    </p></i></b>
    <br> 
    <a href="agenda.php"><button type="button" class="btn btn-success">Agende su evento aqu??</button></a>
      </div>

  
   <br><hr><br>

    

   <footer class="footer">
    <div class="container bg-dark text-light">
        <div class="text-center">
          <img src="../img/icono1.png " class="rounded" alt="Facebook" title="" width="5%" >
          <img src="../img/icono2.png" class="rounded" alt="Twitter" title="" width="5%" >
          <img src="../img/icono3.png" class="rounded" alt="Youtube" title="" width="5%" >
        </div>
        
     
      <p class="copy text-center">&copy; Todos los derechos reservados a Iglesia LosAndes | 2022 <br> Steven rizo, Rodrigo gonzales, Jose navarro</p>
  
      
        </div>
    
    </footer>   
      <script src="../js/sesion.js"></script>
      
  </body>

</html>