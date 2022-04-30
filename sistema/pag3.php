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
    <title>Conócenos</title>
    <link rel="icon" type="image/jpg" href="../img/Logoxmoney.png" />
    <meta name="viewport"
        content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <script src="https://kit.fontawesome.com/a13612c050.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">

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
            <a class="nav-link active" aria-current="page" href="../sistema/contacto.php"><span class="fs-5 text-light fw-bold  ">Contáctanos</span></a>
          </li>
        </ul>


        </ul>
        <div class="d-flex" id="barra">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" href="../sistema/principal.php" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $nombre;?></a>
          <a class="nav-link btn btn-outline" aria-current="page" href="../sistema/logout.php">Cerrar sesión</a>

        </div>

      </div>
    </div>
    </div>
  </nav>


</header>

<body>
    <div class="container">
      <center><h1>¡Aprendamos sobre la Biblia!</h1></center><br> 
      <h2>¿Qué, cuando y quién escribio la Biblia?</h2>
       <p>
           La Biblia, tal y como la conocemos, fue recopilada por primera vez en la historia en el siglo III antes de Cristo, cuando setenta sabios judíos fueron invitados por el rey Ptolomeo II a acudir a Alejandría para aportar a la famosa biblioteca la historia del pueblo de Israel (lo que hoy llamamos el Antiguo Testamento).
   
           Sin embargo, ¿cuál es el origen de la Biblia?
           
           La Biblia es una recopilación de textos que en un principio eran documentos separados (llamados «libros»), escritos primero en hebreo, arameo y griego durante un periodo muy dilatado y después reunidos para formar el Tanaj y la Septuaginta (Antiguo Testamento para los cristianos) y luego el Nuevo Testamento.
           
           En cualquier caso, ¿cuándo se escribió la Biblia?
           
           En sí, los textos que componen la Biblia fueron escritos a lo largo de aproximadamente 1000 años (entre el 900 a. C. y el 100 d. C.).
           
           Sabiendo esto, ¿quién es el autor de la Biblia y quién la escribió?
           
           De acuerdo con la tradición y los padres de la iglesia primitiva, el autor es Marcos el Evangelista el compañero del Apóstol Pedro.
       </p><br>
       <h2>¿Cuáles son los libros más importantes de la Biblia?</h2>
       <p>
           A grandes rasgos los libros más importantes de la Biblia son:
           
           libro del Génesis que habla sobre el origen y la creación del mundo,
           
           libro de la Apocalipsis que trata sobre como se llevará a cabo el día del juicio final,
           
           libro del Éxodo que relata las labores de Moisés para liberar al pueblo hebreo de Egipto,
           
           libro de los Salmos el cual es el libro de las alabanzas,
           
           deuteronomio que dice quien rescató la historia de Moisés.
           
           los Cuatro Evangelios los cuales son los libros de Mateo, Marcos, Lucas y Juan. 
       </p><br>
   
       <h2>Importancia de la Biblia en el ser humano</h2>
       <p>
           La Biblia consiste en un libro de escrituras sagradas que, a través de metáforas, hace alusión al modo de vivir cristiano. Pero entonces, ¿Para qué sirve la biblia? ¿Cuál es su sentido o importancia? Por empezar, la Biblia representa la palabra de Dios por escrito y, por lo tanto, es la base de la fe y la religión cristiana.
   
           La Biblia resulta una guía en la vida de la fe cristiana y, además, es la puerta de acceso a un crecimiento fundamental en la gracia de Jesucristo. Contiene información compleja y profunda que, de ser comprendida y puesta en práctica, conlleva a un crecimiento como persona y como cristiano. Permite conocer la obra y gracia del Señor, sumergirse en su vida y en lo que él pretende que sea nuestra vida aquí en la Tierra para lograr la felicidad y la plenitud.
   
           <!-- Ahi estan los 4 parrafos de texto pero divididos en temas diferentes -->
   
       </p><br>
       <ul>
         <li>Jesús</li>
         <li>Issac</li>
         <li>Elias</li>
         <li>Moisés</li>
         <li>Adán</li>
       </ul>
       <br>
  
  
  </div>
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
  
  </body>

</html>