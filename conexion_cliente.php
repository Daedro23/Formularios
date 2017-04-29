<?php
session_start();
$cliente = $_POST;



$bd_host="localhost";
	$bd_nombre="formulariop";
	$bd_usuario="root";
	$bd_contra="";


	$conexion=mysqli_connect($bd_host,$bd_usuario,$bd_contra,$bd_nombre);

$sql_insert = 'INSERT INTO clientes (nombre, Identificacion, Telefono, correo, pagina_web, direccion, activo) VALUES (?, ?, ?, ?, ?, ?, ?);';

$stmt = mysqli_prepare($conexion, $sql_insert);

mysqli_stmt_bind_param($stmt, "ssssssi", $cliente['Nombre'] ,$cliente['Identificacion'] ,$cliente['Telefono'] ,$cliente['inputEmail'] ,
	$cliente['Pagina_Web'] ,$cliente['Direccion'] ,$cliente['Activo']);

mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($conexion);

$_SESSION['mensaje'] = 'Cliente creado exitosamente';
header('Location: index.php' ); // esto hace un redirect a la pagina index.php de nuevo
?>

	