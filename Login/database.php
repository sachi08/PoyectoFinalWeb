<?php

/*try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}*/

function conexionSQL(){
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'proyecto_web';

	$link = new mysqli($server,$username,$password,$database);
	if($link->connect_error) {
		$error = "Error de conexion: ".$link->connect_errno
				."Mensaje: ".$link->connect_error;
		die($error);
	}else{
		$q = "SET CHARACTER SET UTF8";
		$link->query($q);
		return $link;
	}
}
?>