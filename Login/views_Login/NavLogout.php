<?php 

//session_start();
if(isset($_SESSION['user_id'])){
	$name = $_SESSION['user'];
}



 ?>
<li class="nav-item dropdown active">
	<a href="../Game/index.php" class="juega nav-link btn">Juega</a> 
</li>
<!-- <li class="nav-item dropdown active">
    <a href="../Login/usuario.php" class="home nav-link btn">Usuario</a>
</li>
 -->
<li class="nav-item dropdown active">
    <a href="../Login/usuario.php" class="nombre_usuario nav-link btn"> <?php  echo $name;?></a>
</li>

<li>
	<img class="foto_usuario" src="../img/user.png" alt="">
</li>

<!-- <span class="user">$_POST['user']</span>
<img class="photouser" src="../../img/user.png" alt="">
 -->
<li class="nav-item dropdown active">
    <a href="Logout.php" class="cerrar nav-link btn">cerrar sesión</a>
</li>