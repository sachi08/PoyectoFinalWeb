<?php 
	/*
	require 'conexion_sigin.php';

	$db = new Conexion();
	$query = "SELECT DISTINCT user, clave FROM usuario";
	$res = $db->query($query);

	
	$nickName = '';
	$password = '';

	while ($Usuarios = mysqli_fetch_array($res)) {
		$nickName = "$Usuarios[user]";
		$password = "$Usuarios[clave]";
	}
	echo $nickName;
	echo $password;*/

	//require 'conexion_sigin.php';
	print($_POST['usuario'].":<br>");

	$Usuarios = array(
		['user'=>"juan",'pass'=>"1234"],
		['user'=>"carlos",'pass'=>"4321"],
	);

		$i = 0;
	while ($i < sizeof($Usuarios)) {
		print(" *".$Usuarios[$i]['user']." - ".$Usuarios[$i]['pass']."<br>");
		#print(" *".$Usuarios[$i]['user']." - ".$Usuarios[$i]['pass']."<br>");
		if($Usuarios[$i]['user'] == $_POST['usuario'] && $Usuarios[$i]['pass'] == $_POST['contrasena']){
			session_start();
			$_SESSION['user'] = $_POST['usuario'];
			$_SESSION['auth'] = true;
			break;
		}
		$i = $i + 1;
	}
	if(isset($_SESSION['auth']) && $_SESSION['auth'] == true){
		print("Existe");
		header("Location: ../index.php");	
	}else{
		print("No existe");
		header("Location: login.php?error=true");
	}
		header("Location: login.php?error=true");
	

?>