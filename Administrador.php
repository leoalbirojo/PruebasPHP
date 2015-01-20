<html>
<head>
<title>Administrador</title>
</head>
<body>
<?php
	include("bd.php");		
	$conexion = conectar("ejercicio");
	mostrar($conexion);	
	function mostrar($conexion)
	{		
		$consult = "select*from administrador where Nombre = '".$_POST['Usu']."' and Id_Administrador = '".$_POST['Pass']."' ";
		$resultado = mysql_query($consult,$conexion);
		
		$consult1 = "select*from profesor where Nombre = '".$_POST['Usu']."' and Id_Profesor = '".$_POST['Pass']."' ";
		$resultado1 = mysql_query($consult1,$conexion);
		
		$consult2 = "select*from estudiante where Nombre = '".$_POST['Usu']."' and Id_Estudiante = '".$_POST['Pass']."' ";
		$resultado2 = mysql_query($consult2,$conexion);

			if($filas = mysql_fetch_array($resultado))
			{
				setcookie("Ckusu", $_POST['Usu']);
				setcookie("Ckpass", $_POST['Pass']);				
				print "<meta http-equiv=refresh content=\"2; url=Consultas.php\">";
				print "<center><h2>Espere por favor</h2></center>";
			}
			else if($filas = mysql_fetch_array($resultado1))
			{
				setcookie("Ckusu", $_POST['Usu']);
				setcookie("Ckpass", $_POST['Pass']);
				printf("<h1>Bienvenido(a) ".$_POST['Usu']."</h1>");				
			}
			else if($filas = mysql_fetch_array($resultado2))
			{
				setcookie("Ckusu", $_POST['Usu']);
				setcookie("Ckpass", $_POST['Pass']);
				printf("<h1>Bienvenido(a) ".$_POST['Usu']."</h1>");		
				print "<meta http-equiv=refresh content=\"2; url=Estudiante.php\">";
				print "<center><h2>Espere por favor</h2></center>"; 				
			}
			else
			{
				printf("usuario no existe");
			}			
		mysql_free_result($resultado);
		mysql_close($conexion);
	}
?>
</body>
</html>
