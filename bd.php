
<?php
	function conectar($bd)
	{
		if(!$conexion=mysql_connect("localhost","root",""))
		{
			echo "Error al conectar con la base de datos";
			exit();
		}		
		if(!mysql_select_db($bd,$conexion))
		{
			echo "Base de datos no encontrada";
			exit();
		}
		return $conexion;
	}
?>
