<!doctype html>

<html>
	<head>
		<title>Busqueda Cliente</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>

	<table border="1">
	<thead>
		<tr>
			
		</tr>	
	</thead>	
	<tbody>
		<tr>
			<td>ID</td>
			<td>Nombre</td>
			<td>Identificacion</td>
			<td>Telefono</td>
			<td>Correo</td>
			<td>Pagina Web</td>
			<td>Direccion</td>
			<td>Activo</td>
		</tr>	
	<?php	
		$busqueda=$_GET["buscar"];
		$bd_host="localhost";
		$bd_nombre="formulariop";
		$bd_usuario="root";
		$bd_contra="";
		
		$conexion=mysqli_connect($bd_host,$bd_usuario,$bd_contra,$bd_nombre);

	if(mysqli_connect_errno()) {
		
		echo "Fallo al conectar con la Base de Datos";
		exit();
	}	
	
	mysqli_set_charset($conexion, "utf8");	
		
	$consulta="SELECT * FROM clientes WHERE nombre LIKE '%$busqueda%'";
	$resultados=mysqli_query($conexion, $consulta);
		
	while ($row = $resultados->fetch_assoc()) {
	?>		
			
	
		
		<tr>
			<td><?php echo $row['id_cliente'];?></td>
			<td><?php echo $row['nombre'];?></td>
			<td><?php echo $row['Identificacion'];?></td>
			<td><?php echo $row['Telefono'];?></td>
			<td><?php echo $row['correo'];?></td>
			<td><?php echo $row['pagina_web'];?></td>
			<td><?php echo $row['direccion'];?></td>
			<td><?php echo $row['activo'];?></td>
		
		</tr>
		
		<?php
		}
		mysqli_close($conexion);
	?>
	
	
	</tbody>	
	</table>
	</body>
</html>