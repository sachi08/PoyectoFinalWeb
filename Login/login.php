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
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
	<header class="container">
		<div class="row">
			<div class="col-sm-12 my-4">
				<a href="login.php">
					<img src="../img/logo.png" alt="Logo" class="logo">
				</a>
				<h1 class="display-3 text-uppercase font-weight-bold text-right mt-2">Inicia Sesión</h1>
			</div>
			<div class="col-sm-6">
				<img src="../img/prueba.jpg" alt="messi" class="messi">
			</div>
			<div class="col-sm-6 text-center">
				<p class="text-description">Ingresa tu usuario y contraseña</p>

				<form action="">
					<input type="text" class="form-control rounded-0 my-4 text-center" placeholder="Escribe tu Email o Usuario">

					<input type="text" class="form-control rounded-0 my-4 text-center" placeholder="Escribe tu Contraseña">

					<button class="btn btn-light rounded-0">
						<a href="sigin.php"> SUBSCRIBETE </a>
					</button>
				</form>

				<ul class="list-unstyled list-inline my-4">	<!-- Quita el esitlo que tiene por defecto la etiqueta ul -->
					<li class="list-inline-item"> <a href=""> <!-- El href se puede llenar con la página que se desee -->
							<i class="fab fa-facebook-f"></i>	<!-- Etiqueta i de icon -->
						</a> 
					</li>
				</ul>
			</div>
		</div>
	</header><!-- /header -->
</body>
</html>