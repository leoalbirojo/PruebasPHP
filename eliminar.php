<html>
<head>
<title>Eliminar</title>
</head>
<body>
<?php
	include("bd.php");
	$elm = $_POST['elim'];	
	$conexion = conectar("ejercicio");	
		if($_POST['Tabla'] == "profesor")
		{
			mysql_query("delete from profesor where Id_Profesor = '".$elm."';", $conexion);
			printf("Datos eliminados correctamente");
		}
		else if($_POST['Tabla'] == "estudiante")
		{
			mysql_query("delete from estudiante where Id_Estudiante = '".$elm."';", $conexion);
			printf("Datos eliminados correctamente");
		}
		else if($_POST['Tabla'] == "materia")
		{
			mysql_query("delete from materia where Id_Materia = '".$elm."';", $conexion);
			printf("Datos eliminados correctamente");
		}
		else
		{
			echo "error";
		}
	mysql_close($conexion);	
?>

</body>
</html>
