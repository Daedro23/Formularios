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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">	
		
	</head>
	<body>
		
		
		<strong><center><h1>Lista de Clientes</h1></center></strong>
		
		<br>
		<div class="container">
			<?php if (isset($_SESSION['mensaje'])): ?>
				<div class="alert alert-success" role="alert">
					<strong>Notificacion!</strong> <?= $_SESSION['mensaje'] ?>
				</div><br><br>

				<?php unset( $_SESSION['mensaje'] ); ?>
			<?php endif; ?>
	
	<div class="container">
		
	<th><a href="nuevo_cliente.php" class="btn btn-md btn-primary" P align="left">Nuevo Cliente</a></th>	
		
	<form action="busqueda_cliente.php" method="get" P align="right">
		<label><input type="text" class="form-control" name="buscar"></label>
		<input type="submit" class="btn btn-md btn-primary" name="enviando" value="Buscar cliente">
		</form>	
	
			
	<table class="table table-striped table-inverse">
	<thead>
			
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
		</thead>
		<tbody>
			
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
			<td><a href="Eliminar_datos.php?id=<?php echo $row['id_cliente']; ?>">Borrar</a></td>
		
		</tr>
		
		<?php
		}
	?>
	
	
	</tbody>
		
	</table>	
				
	</div>
		
		
	</body>
</html>