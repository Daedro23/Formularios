<?php 
session_start();
?>
<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Lista de Clientes</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="signin.css" rel="stylesheet">
	<script type="text/javascript" src="js/bootstrap.js" charset="UTF-8"></script>
	</head>
	<body>
		
		
		<strong><center><h2>Lista de Clientes</h2></center></strong>
		<th><center><a href="nuevo_cliente.php" class="btn btn-sm btn-primary">Nuevo Cliente</a></center></th>
		<br>
		<div class="container">
			<?php if (isset($_SESSION['mensaje'])): ?>
				<div class="alert alert-success" role="alert">
					<strong>Notificacion!</strong> <?= $_SESSION['mensaje'] ?>
				</div><br><br>

				<?php unset( $_SESSION['mensaje'] ); ?>
			<?php endif; ?>
	<center>

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
			<td>Acciones</td>
			
		</tr>	
	<?php	
		
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
		
	$consulta="SELECT * FROM clientes";
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
			<td><a href="editar_cliente.php?id=<?php echo $row['id_cliente']; ?>">Editar</a></td>
			<td><a href="Eliminar_datos.php".php?id=<?php echo $row['id_cliente']; ?>">Borrar</a></td>
		
		</tr>
		
		<?php
		}
	?>
	
	
	</tbody>	
	</table>	
	
	</center>
		<form action="busqueda_cliente.php" method="get">
		<label>Buscar: <input type="text" name="buscar"></label>
		<input type="submit" name="enviando" value="Buscar">
		</form>	
		
		
	</body>
</html>