

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Juega</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Css Style -->    
    <link rel="stylesheet" href="../Css/style_game.css">
</head>
<body>
	
	<div class="container">
           <nav class="menuPrincipal navbar fixed-top navbar-expand-md">
                <a href="../Login/home_login.php" class="tituloPrincipal navbar-brand mt-1"><img src="../img/logo_2.png" alt="Logo" class="logo"></a>
                <div id="menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item dropdown active">
                            <a href="../Login/home_login.php" class="home nav-link btn">Inicio</a>
                        </li>

                        <li class="nav-item dropdown active">
                            <a href="#" class="teams nav-link dropdown-toggle btn" data-toggle="dropdown">Equipos</a>
                            <div class="menuDesplegable dropdown-menu navbar-dark">
                                <a href="../Login/argentina.php" class="dropdown-item">
                                    Argentina
                                </a>    
                                <a href="../Login/australia.php" class="lista dropdown-item">
                                    Australia
                                </a>
                                 <a href="../Login/bolivia.php" class="lista dropdown-item">
                                    Bolivia
                                </a>
                                <a href="../Login/brasil.php" class="dropdown-item">
                                    Brasil
                                </a> 
                                <a href="../Login/chile.php" class="dropdown-item">
                                    Chile
                                </a>
                                <a href="../Login/colombia.php" class="dropdown-item">
                                    Colombia
                                </a>
                                <a href="../Login/ecuador.php" class="dropdown-item">
                                    Ecuador
                                </a>
                                <a href="../Login/paraguay.php" class="dropdown-item">
                                    Paraguay
                                </a>
                                <a href="../Login/peru.php" class="dropdown-item">
                                    Perú
                                </a>
                                <a href="../Login/qatar.php" class="dropdown-item">
                                    Qatar
                                </a>
                                <a href="../Login/uruguay.php" class="dropdown-item">
                                    Uruguay
                                </a>
                                <a href="venezuela.php" class="dropdown-item">
                                    Venezuela
                                </a>
                            </div>
                        </li>

                        <?php
                            session_start();
                            require_once "Controllers/controller.php";
                            if(isset($_SESSION['user_id'])){
                                $mvc = new MvcController2();
                                $mvc -> NavLogout_game();
                            }
                            else{
                                $mvc = new MvcController2();
                                $mvc -> NavLogin_game();
                            }
                        ?>
                    </ul>
                </div>
            </nav>
        </div> <br><br><br>

	<?php

require_once "Controllers/controller.php";

if(true){
    $mvc = new MvcController2();
    $mvc -> juego();
}
else{
    $mvc = new MvcController2();
    $mvc -> SinAcceso();
}
?>
</body>
</html>