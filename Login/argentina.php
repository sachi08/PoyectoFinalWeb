<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Argentina</title>
	<link rel="stylesheet" href="">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/style_argentina.css">
</head>
<body>
	<div class="container">
           <nav class="menuPrincipal navbar fixed-top navbar-expand-md">
                <a href="home_login.php" class="tituloPrincipal navbar-brand mt-1"><img src="../img/logo_2.png" alt="Logo" class="logo"></a>
                <div id="menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item dropdown active">
                            <a href="home_login.php" class="home nav-link btn">Inicio</a>
                        </li>

                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link dropdown-toggle btn btn-outline-success" data-toggle="dropdown">Equipos</a>
                            <div class="menuDesplegable dropdown-menu navbar-dark">
                                <a href="home_login.php" class="dropdown-item">
                                    Australia
                                </a>    
                               <!--  <a href="laptop.html" class="dropdown-item">
                                    Australia
                                </a>
                                 <a href="redes.html" class="dropdown-item">
                                    Bolivia
                                </a>
                                <a href="novedades.html" class="dropdown-item">
                                    Brasil
                                </a> 
                                <a href="contact.html" class="dropdown-item">
                                    Chile
                                </a> -->
                            </div>
                        </li>

                        <?php
                            session_start();
                            require_once "./Controllers_Login/controller_login.php";
                            if(isset($_SESSION['user_id'])){
                                $mvc = new MvcController();
                                $mvc -> NavLogout();
                            }
                            else{
                                $mvc = new MvcController();
                                $mvc -> NavLogin();
                            }
                        ?>
                    </ul>
                </div>
            </nav>
        </div> <br><br>



  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
        <div class="col-lg-6">
            <div class="row align-items-center my-5">
                <div class="col-lg-3">
                    <img class="imagenBandera img-fluid" src="../img/argentina_bandera.webp" alt="">
                </div>
                <div class="col-lg-3">
                    <p><strong class="tituloBandera"><h3>Argentina</h3></strong></p>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
           <img class="imagenEscudo img-fluid" src="../img/escudo_argentina.png" alt="">
        </div>
    </div>
        

    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="imagenPrincipal img-fluid" src="../img/Argentina-ca2019.jpg" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <p class="texto">La Selección Argentina es la segunda más ganadora en la CONMEBOL Copa América. Con 14 títulos en su historial, la albiceleste siempre pone a vibrar a sus hinchas, pues es siempre una candidata para ganar el torneo continental.

		Además de los 14 trofeos conseguidos, los argentinos tienen marcas expresivas e históricas en el torneo. Son los mayores goleadores con un total de 462 tantos marcados y tienen la mayor goleada con un 12-0 contra Ecuador, en 1942. En toda la historia del torneo, los ‘gauchos’ tienen 122 victorias, más que cualquier otro equipo, y solo 33 derrotas, la mejor selección en este apartado. El país también fue sede de la competencia en nueve oportunidades. Volver a ser sede de la competición es un gran incentivo para Messi y compañía para volver a llevar una alegría a la selección Argentina.
        </p>
        
      </div>
    
    </div>
    </div>

</body>
</html>