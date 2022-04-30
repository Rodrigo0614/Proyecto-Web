<?php
	
	require "conexion.php";
	
	session_start();
	
	if($_POST){
		
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];
		
		$sql = "SELECT id, password, nombre, tipo_usuario FROM usuarios WHERE usuario='$usuario'";
		//echo $sql;
		$resultado = $mysqli->query($sql);
		$num = $resultado->num_rows;
		
		if($num>0){
			$row = $resultado->fetch_assoc();
			$password_bd = $row['password'];
			
			$pass_c = ($password);
			
			if($password_bd == $pass_c){
				
				$_SESSION['id'] = $row['id'];
				$_SESSION['nombre'] = $row['nombre'];
				$_SESSION['tipo_usuario'] = $row['tipo_usuario'];
			if($_SESSION['tipo_usuario'] == 1){
                header("Location: ../sistema/principal.php");
            }else{
                header("Location: ../usuario/index.php"); 
            }
				
				
			} else {
			?>
			<h3 class="bad">Contraseña incorrecta!</h3>
			<?php
			}
			
			
			} else {
                ?>
                <h3 class="bad">No existe usuario o contraseña</h3>
                <?php
		}
		
		
		
	}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesion</title>
    
    <link rel="icon" type="image/jpg" href="../img/Logoxlogin.png"/>
    <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style2.css">
  
    <style>

        body{
            background: #626262;  
            background: -webkit-linear-gradient(to right, #ffffff  ,#54595F  );  
            background: linear-gradient(to right, #54595F  , #000000  ); 

        }
        .bg{
            background-image: url(../img/IL.png);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
   
    
    
</head>
<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top: -5px;">
      <img src="../img/Logox.png" width="135" height="105" class="d-inline-block align-top" alt="">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
  </header><br>
<body class="bg-dark">
    <div class="container w-75 bg-primary mt-5 rounded shadow" >
        <div class="row align-items-center align-items-stretch"> 
            <div class="col d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded bg">
                
            </div>
    
            <div class="col bg-white p-5 col-lg-7 col-xl-6 rounded-end">
                <div class="text-end">
                    <img src="img/logoo.png" alt="" style="width:25px">
                </div>
                <h2 class="fw-bold text-center pt-5 mb-5">Iniciar sesión</h2>

                

               
                <form method="POST" id="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                            <div class="form-group"><label class="small mb-1" id="usuario" for="inputEmailAddress"></label><input class="form-control py-4" id="inputEmailAddress" name="usuario" type="text" placeholder="Usuario" /></div>
                                            <div class="form-group"><label class="small mb-1" id="contraseña" for="inputPassword"></label><input class="form-control py-4" id="inputPassword" name="password" type="password" placeholder="Contraseña" /></div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Recordar contraseña</label></div>
											</div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="../html/registro.php">Necesitas una cuenta? Registrate ahora!</a>
											<button type="submit" class="btn btn-primary">Iniciar sesión</button></div>
										</form>
                <div>
                    
                </div>
                <div class="container w-100 my-5">
                    <div class="row my-3 text-center">
                        <div class="col-12">Iniciar sesion con</div>
                    </div>
                    <div class="row" >
                        <div class="col">
                            <button class="btn btn-outline-primary w-100 my-1" type="button">
                                <div class="row align-items-center">
                                    <div class="d-none d-md-block col-3 col-lg-4 col-xl-4 col-xxl-3 text-center">
                                        <img src="../img/fb.png" width="100%" alt="">
                                    </div>
                                    <div class="col-12 col-md-9 col-lg-8 col-xl-8 col-xxl-9 text-center">
                                        Facebook
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-danger w-100 my-1" type="button">
                                <div class="row align-items-center">
                                    <div class="d-none d-md-block col-3 col-lg-4 col-xl-4 col-xxl-3 text-center">
                                        <img src="../img/google.png" width="100%" alt="">
                                    </div>
                                    <div class="col-12 col-md-9 col-lg-8 col-xl-8 col-xxl-9 text-center">
                                        Google
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

                <!--

                -->
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.min.js"></script>
    
</body>
</html>