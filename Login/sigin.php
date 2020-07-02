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
    <link rel="stylesheet" href="style_sigin.css">
    <script src="validar_sigin.js"></script>
</head>

<body>
	<header class="container">
		<div class="container">
           <nav class="menuPrincipal navbar fixed-top navbar-expand-md">
                <a href="../index.php" class="tituloPrincipal navbar-brand mt-1"><img src="../img/logo_2.png" alt="Logo" class="logo"></a>
                <div id="menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">

                        <li class="dropdown active">
                            <a href="../index.php" class="home">Home</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div> <br><br>


		<div class="row">
			<div class="col-sm-12 my-4">
				<h1 class="titulo_1 display-3 text-uppercase font-weight-bold text-right mt-5">Registrate</h1>
			</div>
			<div class="col-sm-6">
				<img src="../img/messi_login.jpg" alt="messi" class="messi">
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
					<input type="text" id="usuario" class="form-control rounded-0 my-4 text-center" name="usuario" placeholder="Escribe tu Usuario" required>
					<p class="text-description">Contraseña</p>
					<input type="password" id="contrasena" class="form-control rounded-0 my-4 text-center" name="contrasena" placeholder="Escribe tu Contraseña" required>
					<p class="text-description">Confirmar Contraseña</p>
					<input type="password" id="confirmar_contrasena" class="form-control rounded-0 my-4 text-center" name="confirmar_contrasena" placeholder="Confirma tu contraseña" required><br>
					<input type="submit" value="Registrar" class="btn-enviar">
					
				</form>

				<ul class="list-unstyled list-inline my-4">	<!-- Quita el esitlo que tiene por defecto la etiqueta ul -->
					<li class="list-inline-item"> <a href="https://www.facebook.com/Pollas3P/"> <!-- El href se puede llenar con la página que se desee -->
							<i class="fcbk fab fa-facebook-f"></i>	<!-- Etiqueta i de icon -->
						</a> 
					</li>
					<li class="list-inline-item"> <a href="https://api.whatsapp.com/send?phone=3148136859&text=%C2%BFEn%20que%20puedo%20ayudarte"> <!-- El href se puede llenar con la página que se desee -->
							<i class="wht fab fa-whatsapp"></i>	<!-- Etiqueta i de icon -->
						</a> 
					</li>
				</ul>
			</div>
		</div>
	</header><!-- /header -->
</body>
</html>