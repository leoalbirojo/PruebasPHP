<html>
<head>
<title>Modificar</title>
</head>

<body>
<?php

	include("bd.php");

    $nom = $_POST['nom'];
	$ape = $_POST['ape'];
	$cod = $_POST['modif'];
	$conexion = conectar("ejercicio");	
	
		if($_POST['Tabla'] == "profesor")
		{
			mysql_query("update profesor set Nombre = '".$nom."', Apellido = '".$ape."' where Id_Profesor = '".$cod."';", $conexion);
			print "<meta http-equiv=refresh content=\"2; url=Consultas.php\">";
			print "<center><h2>Datos actualizados correctamente</h2></center>";
		}
		else if($_POST['Tabla'] == "estudiante")
		{
			mysql_query("update estudiante set Nombre = '".$nom."', Apellido = '".$ape."' where Id_Estudiante = '".$cod."';", $conexion);
			print "<meta http-equiv=refresh content=\"2; url=Consultas.php\">";
			print "<center><h2>Datos actualizados correctamente</h2></center>";
		}
		else if($_POST['Tabla'] == "materia")
		{
			mysql_query("update materia set Nombre = '".$nom."' where Id_Materia = '".$cod."';", $conexion);
			print "<meta http-equiv=refresh content=\"2; url=Consultas.php\">";
			print "<center><h2>Datos actualizados correctamente</h2></center>";
		}
		else
		{
			echo "error";
		}


	mysql_close($conexion);
	
?>

</body>
</html>