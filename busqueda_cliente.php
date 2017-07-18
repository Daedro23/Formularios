<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Busqueda Cliente</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="signin.css" rel="stylesheet">
	<script type="text/javascript" src="js/bootstrap.js" charset="UTF-8"></script>
	</head>

	<body>
		<br>
		<center>
	<div class="container">	
	<table class="table table-inverse" border="1">	
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
	</div>

	<?php	
		$busqueda=$_GET["buscar"];
		include 'conexion.php';

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
	
	</center>	
	</tbody>	
	</table>
	<br>

	<center><a href="index.php" class="btn btn-md btn-info">Volver a la lista</a></center>
	</body>
</html>