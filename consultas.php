<html>
<head>
<title>Ingreso</title>
</head>
<body>
<?php
	include("bd.php");
	//$nom = $_POST['nom'];
	//	$ape = $_POST['ape'];	
	$conexion = conectar("ejercicio");
	printf("<h1>Bienvenido(a) ".$_COOKIE['Ckusu']."</h1>");
	mostrar($conexion);	
	function mostrar($conexion)
	{	
		$consult = "select * from profesor;";
		$resultado = mysql_query($consult,$conexion);
		
		$consult1 = "select * from estudiante;";
		$resultado1 = mysql_query($consult1,$conexion);
		
		$consult2 = "select * from materia;";
		$resultado2 = mysql_query($consult2,$conexion);
		
		echo "Profesores";
		echo "<table border='3'>";
		echo "<tr> <td>Codigo</td> <td>Nombre</td> <td>Apellido</td> </tr>";	
			while($filas = mysql_fetch_array($resultado))
			{
				printf("<tr> <td>".$filas["Id_Profesor"]."</td> <td><form action='modificar.php' method='POST'><input type='hidden' name='Tabla' value='profesor' /><input type='text' name='nom' value='". $filas["Nombre"]. "'/></td><td><input type='text' name='ape' value='". $filas["Apellido"] ."'/></td><td><input type='hidden' name='modif' value='".$filas["Id_Profesor"]."' /><input type='submit' value='Modificar'></form><form action='eliminar.php' method='POST'><input  type='hidden' name='elim' value='".$filas["Id_Profesor"]."' /><input type='hidden' name='Tabla' value='profesor' /><input type='submit' value='Eliminar'></td></tr>");
			}
		echo "</table>";
		
		echo "Estudiantes";
		echo "<table border='3'>";
		echo "<tr> <td>Codigo</td> <td>Nombre</td> <td>Apellido</td> </tr>";	
			while($filas = mysql_fetch_array($resultado1))
			{
				printf("<tr> <td>".$filas["Id_Estudiante"]."</td> <td><form action='modificar.php' method='POST'><input type='hidden' name='Tabla' value='estudiante' /><input type='text' name='nom' value='". $filas["Nombre"]. "'/></td><td><input type='text' name='ape' value='". $filas["Apellido"] ."'/></td><td><input type='hidden' name='modif' value='".$filas["Id_Estudiante"]."' /><input type='submit' value='Modificar'></form><form action='eliminar.php' method='POST'><input  type='hidden' name='elim' value='".$filas["Id_Estudiante"]."' /><input type='hidden' name='Tabla' value='estudiante' /><input type='submit' value='Eliminar'></td></tr>");
			}
		echo "</table>";
	
		echo "Materias";
		echo "<table border='3'>";
		echo "<tr> <td>Codigo</td> <td>Nombre</td> </tr>";	
			while($filas = mysql_fetch_array($resultado2))
			{
				printf("<tr> <td>".$filas["Id_Materia"]."</td> <td><form action='modificar.php' method='POST'><input type='hidden' name='Tabla' value='materia' /><input type='text' name='nom' value='". $filas["Nombre"]. "'/></td><td><input type='hidden' name='modif' value='".$filas["Id_Materia"]."' /><input type='submit' value='Modificar'></form><form action='eliminar.php' method='POST'><input type='hidden' name='elim' value='".$filas["Id_Materia"]."' /><input type='hidden' name='Tabla' value='materia' /><input type='submit' value='Eliminar'></td></tr></form>");
			}
		echo "</table>";
		mysql_free_result($resultado);
		mysql_free_result($resultado1);
		mysql_free_result($resultado2);
		mysql_close($conexion);	
	}
	echo"
	<form action='Inicio.php' method='POST'>
	<input type='submit' value ='Cerrar Sesión' size='15'>
	</form>";
?>
</body>
</html>