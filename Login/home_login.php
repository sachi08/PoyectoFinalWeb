
<!DOCTYPE html>
<html>
<head>
	<title>Copa America</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Css Style -->
    <link rel="stylesheet" href="../Css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
                            <a href="#" class="teams nav-link dropdown-toggle btn" data-toggle="dropdown">Equipos</a>
                            <div class="menuDesplegable dropdown-menu navbar-dark">
                                <a href="argentina.php" class="dropdown-item">
                                    Argentina
                                </a>    
                                <a href="australia.php" class="lista dropdown-item">
                                    Australia
                                </a>
                                 <a href="bolivia.php" class="lista dropdown-item">
                                    Bolivia
                                </a>
                                <a href="brasil.php" class="dropdown-item">
                                    Brasil
                                </a> 
                                <a href="chile.php" class="dropdown-item">
                                    Chile
                                </a>
                                <a href="colombia.php" class="dropdown-item">
                                    Colombia
                                </a>
                                <a href="ecuador.php" class="dropdown-item">
                                    Ecuador
                                </a>
                                <a href="paraguay.php" class="dropdown-item">
                                    Paraguay
                                </a>
                                <a href="peru.php" class="dropdown-item">
                                    Perú
                                </a>
                                <a href="qatar.php" class="dropdown-item">
                                    Qatar
                                </a>
                                <a href="uruguay.php" class="dropdown-item">
                                    Uruguay
                                </a>
                                <a href="venezuela.php" class="dropdown-item">
                                    Venezuela
                                </a>
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

    
        <div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/suarez.jpg" alt=""  class="fotosp img-fluid">
                <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="600" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Primer slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#2196f3"></rect><text x="45%" y="50%" fill="#eceff1" dy=".3em">Primer slide</text></svg> -->
            </div>
            <div class="carousel-item">
                <img src="../img/neymar.jpg" alt=""  class="fotosp img-fluid">
               <!--  <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="600" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Segundo slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#f50057"></rect><text x="45%" y="50%" fill="#eceff1" dy=".3em">Segundo slide</text></svg> -->
            </div>
            <div class="carousel-item">
                 <img src="../img/james.jpg" alt=""  class="fotosp img-fluid">
                <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="600" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Tercer slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#ff3d00"></rect><text x="45%" y="50%" fill="#eceff1" dy=".3em">Tercer slide</text></svg> -->
            </div>
            </div>
            
            <!--Controles NEXT y PREV-->
            <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--Controles de indicadores-->
            <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
            </ol>
            
        </div>
      
        <!--Pie de Página-->
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
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

</body>
</html>