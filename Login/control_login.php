<?php 
	/*
	require 'conexion_sigin.php';

	$db = new Conexion();
	$query = "SELECT DISTINCT user, clave FROM usuario";
	$res = $db->query($query);


	//print($_POST['usuario'].":<br>");
	
	$nickName = '';
	$password = '';

	while ($Usuarios = mysqli_fetch_array($res)) {
		$nickName = "$Usuarios[user]";
		$password = "$Usuarios[clave]";
	}
	echo $nickName;
	echo $password;

	/*$Usuarios = array(
		['user'=>"juan",'pass'=>"1234"],
		['user'=>"carlos",'pass'=>"4321"],
	);*/




	/*if(isset($_SESSION['auth']) && $_SESSION['auth'] == true){
		print("Existe");
		header("Location: ../index.php");	
	}else{
		print("No existe");
		header("Location: login.php?error=true");
	}*/
?>