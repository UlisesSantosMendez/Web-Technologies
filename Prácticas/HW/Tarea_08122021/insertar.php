<html>
	<head>
		<title>insertar campos con php a MySQL</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
			//se manda a llamar el archivo donde se realiza la conexion a la base de datos
			include("conexion.php");
		?>
		<form action="" method="POST">
			id: <input type="text" name="id"><br/>
			usuario: <input type="text" name="user"><br/>
			contraseña: <input type="text" name="password"><br/>
			puesto: <input type="text" name="role"><br/>
			<input type="submit" name="enviar" value="enviar">
		</form>
		<?php
			if($_POST) //si se presiona el boton enviar
			{
				$id=$_POST['id'];
				$nombre=$_POST['user'];
				$contraseña=$_POST['password'];
				$puesto=$_POST['role'];
				mysql_query("INSERT INTO usuario(id,user,password,role) VALUES('$id','$nombre','$contraseña','$puesto')") or die(mysql_error());
				echo "<h2>dato guardado</h2>";
			}
		?>
	</body>
</html>