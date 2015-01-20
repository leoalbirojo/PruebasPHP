<html>
<head>
<title>Proceso datos</title>
</head>
<body>
<?php
	include("bd.php");		
	$conexion = conectar("ejercicio");
	mostrar($conexion);	
	function mostrar($conexion)
	{	$consult = "insert into estudiante (Id_estudiante,Nombre,Apellido) values ('".$_POST['contra']."','".$_POST['nombre']."','".$_POST['apellido']."')";	
		$resultado = mysql_query($consult,$conexion);
		print "<center><h2>Datos registrados exitosamente</h2></center>";
		print "<meta http-equiv=refresh content=\"2; url=Inicio.php\">";
	}
?>
</body>
</html>