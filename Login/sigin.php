<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registro</title>
	<!-- Bootstrap 4 CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Css Style -->    
    <link rel="stylesheet" href="../Css/style_sigin.css">
    <script src="validar_sigin.js"></script>
</head>

<body>
	<header class="container">
		<div class="container">
           <nav class="menuPrincipal navbar fixed-top navbar-expand-md">
                <a href="../home_sigin.php" class="tituloPrincipal navbar-brand mt-1"><img src="../img/logo_2.png" alt="Logo" class="logo"></a>
                <div id="menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">

                        <li class="dropdown active">
                            <a href="home_login.php" class="home">Inicio</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div> <br><br>


		<div class="row">
			<div class="col-sm-12 my-4">
				<h1 class="titulo_1 display-3 text-uppercase font-weight-bold mt-5">Registrate</h1>
				<h3><span class="oIniciaSesion">ó <a href="login.php">Inicia Sesión</a></span></h3>
			</div>
			<div class="col-sm-6">
				<img src="../img/falcao.png" alt="falcao" class="falcao">
			</div>

			<div class="col-sm-6 text-center">

				<form action="registro.php" method="post" class="form-register" onsubmit="return validar();">
					
					<p class="text-description">Nombre</p>
					<input type="text" id="nombre" class="form-control rounded-0 my-4 text-center" name="nombre" placeholder="Escribe tu Nombre" required>
					<p class="text-description">Apellido</p>
					<input type="text" id="apellido" class="form-control rounded-0 my-4 text-center" name="apellido" placeholder="Escribe tu Apellido" required>
					<p class="text-description">Celphone</p>
					<input type="text" id="celular" class="form-control rounded-0 my-4 text-center" name="celular" placeholder="Escribe # de Celular" required>
					<p class="text-description">Email</p>
					<input type="email" id="correo" class="form-control rounded-0 my-4 text-center" name="correo" placeholder="Escribe tu Email" required>
					<p class="text-description">Usuario</p>
					<input type="text" id="usuario" class="form-control rounded-0 my-4 text-center" name="user" placeholder="Escribe tu Usuario" required>
					<p class="text-description">Contraseña</p>
					<input type="password" id="contrasena" class="form-control rounded-0 my-4 text-center" name="clave" placeholder="Escribe tu Contraseña" required>
					<p class="text-description">Confirmar Contraseña</p>
					<input type="password" id="confirmar_contrasena" class="form-control rounded-0 my-4 text-center" name="confirmar_contrasena" placeholder="Confirma tu contraseña" required><br>
					<input type="submit" value="Registrar" class="btn-enviar" name="alta">
					
				</form>

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