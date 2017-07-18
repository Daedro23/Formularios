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

			<title>Editar Cliente</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">

		<link href="signin.css" rel="stylesheet">
		<script type="text/javascript" src="js/bootstrap.js" charset="UTF-8"></script>
	</head>
<body>

		<br>
		<div class="container">
			<?php if (isset($_SESSION['mensaje'])): ?>
				<div class="alert alert-success" role="alert">
					<strong>Notificacion!</strong> <?= $_SESSION['mensaje'] ?>
				</div><br><br>

				<?php unset( $_SESSION['mensaje'] ); ?>
			<?php endif; ?>
			
			<div class="container">
			<?php	
		$id=$_REQUEST['id'];
			
		include 'conexion.php';

	if(mysqli_connect_errno()) {
		
		echo "Fallo al conectar con la Base de Datos";
		exit();
	}	
	
	mysqli_set_charset($conexion, "utf8");	
		
	$consulta="SELECT * FROM clientes WHERE id_cliente='$id'";
	$resultados=mysqli_query($conexion, $consulta);
	
	($row = $resultados->fetch_assoc());
	?>	

			<form id="formulario" action="modificar.php?id=<?php echo $row['id_cliente']; ?>" method="post">
				<h2 class="form-signin-heading">Editar datos del cliente</h2>
				<br>

				<label for="Nombre" class="sr-only">Nombre</label>
					<input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>" placeholder="Nombre" required>

				<label for="Identificacion" class="sr-only">Identificacion</label>
					<input type="text" name="Identificacion" class="form-control" value="<?php echo $row['Identificacion']; ?>" placeholder="Identificacion" required>

				<label for="Telefono" class="sr-only">Telefono</label>
					<input type="text" name="Telefono" class="form-control" value="<?php echo $row['Telefono']; ?>" placeholder="Telefono" required>

				<label for="correo" class="sr-only">Email</label>
					<input type="text" name="correo" class="form-control" value="<?php echo $row['correo']; ?>" placeholder="Email" required autofocus>

				<label for="pagina_web" class="sr-only">Pagina Web</label>
					<input type="text" name="pagina_web" class="form-control" value="<?php echo $row['pagina_web']; ?>" placeholder="Pagina Web">

				<label for="Direccion" class="sr-only">Direccion</label>
					<input type="text" name="direccion" class="form-control" value="<?php echo $row['direccion']; ?>" placeholder="Direccion">

				<select name="activo" class="form-control">
					<option value="">¿Cliente contaste?</option>
					<option value="0">No</option> 
					<option value="1">Si</option> 
				</select>
				<br><br>

				<center>
					<button class="btn btn-lg btn-primary" type="submit">Actualizar Datos</button>
					<button class="btn btn-lg btn-warning" type="reset">Resetear</button> 
					<a href="index.php" class="btn btn-lg btn-info">Lista de Clientes</a>
				</center>
			</form>
		</div>

		<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
	</html>