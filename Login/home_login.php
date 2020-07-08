<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, user, clave FROM usuario WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Copa America</title>
</head>
<body>
	
	<div class="container">
           <nav class="menuPrincipal navbar fixed-top navbar-expand-md">
                <a href="home_login.php" class="tituloPrincipal navbar-brand mt-1"><img src="../img/logo_2.png" alt="Logo" class="logo"></a>
                <div id="menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">

                        <li class="dropdown active">
                            <a href="../index.php" class="home btn btn-outline">Home</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div> <br><br>

	
  <?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['user']; ?>
      <br>You are Successfully Logged In
  <?php else: ?>
      <h1>Please Login or SignUp</h1>

      <a href="login.php">Login</a> or
      <a href="sigin.php">SignUp</a>
  <?php endif; ?>

	<br>
    <p> hola amantes del futbol </p>

</body>
</html>