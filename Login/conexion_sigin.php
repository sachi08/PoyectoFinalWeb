<?php  

$conexion = mysqli_connect("localhost", "root", "", "Proyecto_Web");
if(!$conexion){
	echo "Error al conectar a la base de datos";
	print("<br>");
}
else{
	echo "Conectado a la base de datos";
	print("<br>");
}

/*
require 'config_sigin.php'; 
class Conexion extends Mysqli
{
	public function __construct()
	{
		parent::__construct(HOST, USER_NAME, PASS, DB_NAME);
		$this->set_charset('utf8');
		$this->connect_error ? die('Error al conectar') : '';
		//var_dump($this->get_charset());
	}
}
*/

?>