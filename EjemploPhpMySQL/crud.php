<?php 

!isset($_POST) ? die('Acceso denegado') : '';

require 'conexion.class.php';

$db = new Conexion();

if (isset($_POST['alta'])) {
	
	$nombre = $_POST['nombre'];
	$domicilio = $_POST['domicilio'];

	$query = "INSERT INTO `cliente`(`nombre`, `domicilio`, `fecha_alta`) VALUES ('$nombre', '$domicilio', '" .date('Y-m-d') ."')"; 

	$result = $db->query($query);

	$db->affected_rows <0 ? print 'Hubo un problema' : print "Se insertaron $db->affected_rows registros"; //muestra las filas que fueron modificadas
}


 ?>