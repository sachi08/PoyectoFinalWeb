<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bolivia</title>
    <link rel="stylesheet" href="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/style_australia.css">
</head>
<body>
    <div class="container">
           <nav class="menuPrincipal navbar fixed-top navbar-expand-md">
                <a href="home_login.php" class="tituloPrincipal navbar-brand mt-1"><img src="../img/logo_2.png" alt="Logo" class="logo"></a>
                <div id="menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item dropdown active">
                            <a href="#" class="home nav-link btn">Inicio</a>
                        </li>

                        <li class="nav-item dropdown active">
                            <a href="home_login.php" class="nav-link dropdown-toggle btn btn-outline-success" data-toggle="dropdown">Equipos</a>
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
                    <img class="imagenBandera img-fluid" src="../img/Bolivia_rounded_200px.webp" alt="">
                </div>
                <div class="col-lg-3">
                    <p><strong class="tituloBandera"><h3>Bolivia</h3></strong></p>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
           <img class="imagenEscudo img-fluid" src="../img/escudo_bolivia.png" alt="">
        </div>
    </div>
        

    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="imagenPrincipal img-fluid" src="../img/bolivia-ca2019.webp" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <p class="texto">La actuación más importante de la historia de la “La Verde” en la Copa América fue en el año 1963, cuando la competencia se disputó por primera vez en Bolivia y en ese entonces el torneo todavía era denominado Campeonato Sudamericano de Fútbol. Además del gran fútbol desplegado y teniendo como aliada a la altura de La Paz, la selección boliviana se impuso en el torneo, un acontecimiento que hizo vibrar los cimientos del país.

        Entre tanto, Bolivia participó tres veces en una Copa Mundial de la FIFA: fue invitada en 1930 y 1950, y se clasificó para el torneo que se disputo en Estados Unidos 1994.
        </p>
        
      </div>
    
    </div>
    </div>

</body>
</html>