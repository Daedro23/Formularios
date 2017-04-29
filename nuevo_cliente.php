<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Nuevo Cliente</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="signin.css" rel="stylesheet">
	<script type="text/javascript" src="js/bootstrap.js" charset="UTF-8"></script></head>

	<body>
		

		<div class="container">
			

			<form id="formulario" action="conexion_cliente.php" method="post">
				<h2 class="form-signin-heading">Nuevo Cliente</h2>

				<label for="Nombre" class="sr-only">Nombre</label>
				<input type="text" name="Nombre" class="form-control" placeholder="Nombre" required>

				<label for="Identificacion" class="sr-only">Identificacion</label>
				<input type="text" name="Identificacion" class="form-control" placeholder="Identificacion" required>

				<label for="Telefono" class="sr-only">Telefono</label>
				<input type="text" name="Telefono" class="form-control" placeholder="Telefono" required>

				<label for="inputEmail" class="sr-only">Email</label>
				<input type="email" name="inputEmail" class="form-control" placeholder="Email" required autofocus>

				<label for="pagina_web" class="sr-only">Pagina Web</label>
				<input type="text" name="Pagina_Web" class="form-control" placeholder="Pagina Web">

				<label for="Direccion" class="sr-only">Direccion</label>
				<input type="text" name="Direccion" class="form-control" placeholder="Direccion">


				<label for="Activo" class="sr-only">Activo?</label>
				<select name="Activo" class="form-control">
					<option value="">Seleccion</option>
					<option value="0">No</option> 
					<option value="1">Si</option> 
				</select>
				<br><br>

				<button class="btn btn-lg btn-primary" type="submit">Enviar</button>
				<button class="btn btn-lg btn-primary" type="reset">Resetear</button> 
				<a href="index.php" class="btn btn-lg btn-primary">Lista de Clientes</a>

			</form>
		</div>

		<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
	</html>
