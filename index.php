<?php /*session_start();
	if(!isset($_SESSION['auth']) || $_SESSION['auth'] == false){
		//header("Location: index.php");
	}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Copa America</title>
</head>
<body>
	
	<div class="container">
           <nav class="menuPrincipal navbar fixed-top navbar-expand-md">
                <a href="../index.php" class="tituloPrincipal navbar-brand mt-1"><img src="img/logo_2.png" alt="Logo" class="logo"></a>
                <div id="menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">

                        <li class="dropdown active">
                            <a href="../index.php" class="home btn btn-outline">Home</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div> <br><br>

	<label>Bienvenido <?php print($_SESSION['user']); ?></label>
	<br>

	
</body>
</html>