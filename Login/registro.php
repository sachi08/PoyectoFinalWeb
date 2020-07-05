<?php 

require 'conexion_sigin.php';
//Recibir los datos y almacenarlos en variables
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$celular = $_POST["celular"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];
$confirmar_contrasena = $_POST["confirmar_contrasena"];

//Consulta para insertar 
$insertar = "INSERT INTO `usuario`( `nombre`, `apellido`, `celular`, `correo`, `user`, `clave`, `confirmarc`) VALUES ('$nombre', '$apellido', '$celular', '$correo', '$usuario', '$contrasena', '$confirmar_contrasena')"; 

//Ejecutar Consulta
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
	echo 'Error al registrarse';
} else{
	echo 'Usuario registrado exitosamente';
}
//Cerrar Conexion
mysqli_close($conexion);



/*
!isset($_POST) ? die('Acceso denegado') : '';

require 'conexion_sigin.php';

$db = new Conexion();

if (isset($_POST['alta'])) {
	
	$nombre = $_POST['nombre'];
	$apellido = $_POST["apellido"];
	$celular = $_POST["celular"];
	$correo = $_POST["correo"];
	$usuario = $_POST["usuario"];
	$contrasena = $_POST["contrasena"];
	$confirmar_contrasena = $_POST["confirmar_contrasena"];

	$query = "INSERT INTO `usuario`(`nombre`, `apellido`, `celular`, `correo`, `user`, `clave`, `confirmarc`) VALUES ('$nombre', '$apellido', '$celular', '$correo', '$usuario', '$contrasena', '$confirmar_contrasena')"; 

	$result = $db->query($query);

	$db->affected_rows <0 ? print 'Hubo un problema' : print "Se insertaron $db->affected_rows registros"; //muestra las filas que fueron modificadas
}
*/
 
 ?>
