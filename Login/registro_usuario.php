<?php 
require 'conexion_sigin.php';
//$db = conexionSQL();
$num = '0';
$name = 'hola';
session_start();
if(isset($_SESSION['user_id'])){
	$num=($_SESSION['user_id']);
	//$name=($_SESSION['user']);
	}

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$celular = $_POST["celular"];
$contrasena = password_hash($_POST["clave"], PASSWORD_DEFAULT);
//actualizar datos

$actualizar = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', celular='$celular', clave='$contrasena' WHERE id='$num'";
//echo $actualizar;
$resultado = mysqli_query($conexion, $actualizar);
 

 if($resultado){
 	echo '<script>
			alert("Se ha actualizado exitosamente");
		 </script>';
	header("Location: home_login.php");
 }

 else{
 	echo '<script>
			alert("No se pudieron actualizar los datos");
			window.history.go(-1);
		 </script>';
 }
 ?>
