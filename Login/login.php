<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: home_login.php');
  }
  require 'database.php';
  echo "usuario:".$_POST['user'];
  if (!empty($_POST['user']) && !empty($_POST['clave'])) {
    $conn = conexionSQL();
    $q = "SELECT id, user, clave FROM usuario WHERE user = '".$_POST['user']."'";
    $var = $conn->query($q);
    $results = $var->fetch_assoc();
    $message = '';
    //$p = password_hash($_POST['clave'],PASSWORD_DEFAULT);
    if (count($results) > 0 && password_verify($_POST['clave'], $results['clave'])) {
	  $_SESSION['user_id'] = $results['id'];
	  $_SESSION['user'] = $_POST['user'];
      header("Location: home_login.php");
    } else {
      $message = 'Lo sentimos, su usuario y contraseña no coincide';
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Iniciar Sesión</title>
	<!-- Bootstrap 4 CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Css Style -->    
    <link rel="stylesheet" href="../Css/style_login.css">
</head>

<body>
	<header class="container">
		<div class="container">
           <nav class="menuPrincipal navbar fixed-top navbar-expand-md">
                <a href="home_login.php" class="tituloPrincipal navbar-brand mt-1"><img src="../img/logo_2.png" alt="Logo" class="logo"></a>
                <div id="menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">

                        <li class="dropdown active">
                            <a href="home_login.php" class="home btn btn-outline">Inicio</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div> <br><br>


		<div class="row">
			<div class="col-sm-12 my-4">
				<h1 class="titulo_1 display-3 text-uppercase font-weight-bold text-right mt-5">Inicia Sesión</h1>
			</div>
			<div class="col-sm-6">
				<img src="../img/messi.png" alt="messi" class="messi">
			</div>
			<div class="col-sm-6 text-center">
				<p class="p1 text-description">Ingresa tu usuario y contraseña</p>
				
				 <?php if(!empty($message)): ?>
      				<p> <?= $message ?></p>
    			<?php endif; ?>

				<form action="login.php" method="POST">
					 
						<!-- if(isset($_GET['error']) && $_GET['error']==true){
						print("<h4>Error: Nombre de usuario o contraseña invalidos</h4>");
						}  -->
					
					<input type="text" class="ingreso_datos form-control rounded-0 my-4 text-cente" name="user" placeholder="Escribe tu Usuario">

					<input type="password" class="ingreso_datos form-control rounded-0 my-4 text-center" name="clave" placeholder="Escribe tu Contraseña">
					
					 <input type="submit" value="Ingresar" class="btn-ingresar"><br><br>
				</form>

				<button class="btn btn-light rounded-0">
						<a href="sigin.php"> SUBSCRIBETE </a>
				</button>

				<ul class="list-unstyled list-inline my-4">	<!-- Quita el esitlo que tiene por defecto la etiqueta ul -->
					<li class="list-inline-item"> <a href="https://www.facebook.com/Pollas3P/" target="blank"> <!-- El href se puede llenar con la página que se desee -->
							<i class="auxiliar fcbk fab fa-facebook-f"></i>	<!-- Etiqueta i de icon -->
						</a> 
					</li>
					<li class="list-inline-item"> <a href="https://api.whatsapp.com/send?phone=3148136859&text=%C2%BFEn%20que%20puedo%20ayudarte" target="blank"> <!-- El href se puede llenar con la página que se desee -->
							<i class="auxiliar wht fab fa-whatsapp"></i>	<!-- Etiqueta i de icon -->
						</a> 
					</li>
				</ul>
			</div>
		</div>
	</header><!-- /header -->
	<footer>
            <div id="footer">

                <div class="row align-items-center my-5">
                    <div class="col-lg-4">
                        <p class="torneos"><b>Torneos masculinos</b></p>
                        <p><a href="http://www.conmebol.com/es/copa-libertadores-2020" target="blank">CONMEBOL Libertadores</a></p>
                        <p><a href="http://www.conmebol.com/es/copa-sudamericana-2020" target="blank">CONMEBOL Sudamericana</a></p><br>

                        <p class="torneos"><b>Torneos femeninos</b></p>
                        <p><a href="http://www.conmebol.com/es/libertadores-femenina-brasil-2018" target="blank">Copa Libertadores Femenina</a></p>
                        <p><a href="http://www.conmebol.com/es/copa-america-femenina-chile2018" target="blank">Copa América Femenina</a></p>
                    </div>
                    <div class="col-lg-4">
                        <p class="torneos"><b>Desarrollo</b></p>
                        <p><a href="http://www.conmebol.com/es/desarrollo/estrategia" target="blank">Dirección</a></p>
                        <p><a href="http://www.conmebol.com/es/desarrollo/ligas" target="blank">Ligas</a></p>
                        <p><a href="http://www.conmebol.com/es/desarrollo/publicaciones" target="blank">Publicaciones</a></p>
                        <p><a href="http://www.conmebol.com/es/desarrollo/noticias2" target="blank">Noticias</a></p>
                    </div>
                    <div class="col-lg-4">
                        <p class="torneos"><b>La Conmebol</b></p>
                        <p><a href="http://www.conmebol.com/es/laconmebol/asociaciones" target="blank">Asociaciones</a></p>
                        <p><a href="http://www.conmebol.com/es/laconmebol/el-congreso" target="blank">El congreso</a></p>
                        <p><a href="http://www.conmebol.com/es/laconmebol/el-comite-ejecutivo" target="blank">El Consejo</a></p>
                        <p><a href="http://www.conmebol.com/es/laconmebol/comisiones" target="blank">Comisiones</a></p>
                        
                    </div>
                </div>

                <div class="row align-items-center my-5">
                    <div class="col-lg-6">
                        <p style="color: white">Copyright © 2020. Todos los derechos reservados.
                                Santiago Garcia Vanegas y Sergio Uribe Adarve - Medellín - Colombia
                        </p>
                    </div>

                    <div class="col-lg-6">
                        <ul class="list-unstyled list-inline my-4"> <!-- Quita el esitlo que tiene por defecto la etiqueta ul -->
                            <li class="list-inline-item"> <a href="https://www.facebook.com/Pollas3P/" target="blank"> <!-- El href se puede llenar con la página que se desee -->
                                <i class="fcbk fab fa-facebook-f"></i>  <!-- Etiqueta i de icon -->
                            </a> 
                            </li>
                            <li class="list-inline-item"> <a href="https://api.whatsapp.com/send?phone=3148136859&text=%C2%BFEn%20que%20puedo%20ayudarte" target="blank"> <!-- El href se puede llenar con la página que se desee -->
                                <i class="wht fab fa-whatsapp"></i> <!-- Etiqueta i de icon -->
                            </a> 
                            </li>
                        </ul>
                    </div>
                </div>

               <!--  <p>Sergio Uribe Adarve</p> 
                <p>Estudiante de Pregrado de Ingeniería Electrónica, Departamento de Ingeniería Electrónica y de Telecomunicaciones, Universidad de Antioquia.</p> 
                <p>Recepción de Correspondencia: Calle 22 # 71A-21, Medellín Colombia.</p>
                <p>E-mail: sergio.uribe1@udea.edu.co</p>   -->     
            </div>
        </footer>
</body>
</html>