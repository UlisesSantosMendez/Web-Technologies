<html>
	<head>
		<title>Conexion a BD PHP y MySQL</title>
	</head>
	<body>
		<?php
			//conexion a la base de datos
			$conexion=mysql_connect('localhost','root','root');
			mysql_select_db("ejemplo1",$conexion) or die("no se pudo conectar a la base de datos");
		?>
		<table border="1">
			<tr>
				<td colspan="4">MySQL PHP SELECT QUERY</td>
			</tr>
			<tr>
				<td>id</td>
				<td>user</td>
				<td>password</td>
				<td>role</td>
			</tr>
		<?php
			//primer linea de consulta a la base de datos mostrando con el asterico todos los datos que contenga la tabla usuario
			$result=mysql_query("select * from usuario");
			//se debe almacenar esos datos en forma de arreglo, loa datos que tenga resultado se vuelvan visibles
			//se crea una estructura de control
			while($row = mysql_fetch_array($result)) //mientras que la variable row tenga datos haga lo que voy a escribir
			{
				//se cierra php porque se volvera escribir codigo html
				?>
					<tr>
						<td><?php echo $row["id"]; ?></td>
						<td><?php echo $row["user"]; ?></td>
						<td><?php echo $row["password"]; ?></td>
						<td><?php echo $row["role"]; ?></td>
					</tr>
			<?php
			}
			?>
		</table>
	</body>
</html>