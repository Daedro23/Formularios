<?php 
session_start();
$cliente = $_POST;

		include 'conexion.php';

$id= $_REQUEST['id'];
$nombre= $_POST['nombre'];
$identificacion= $_POST['Identificacion'];
$telefono= $_POST['Telefono'];
$correo= $_POST['correo'];
$pagina= $_POST['pagina_web'];
$direccion= $_POST['direccion'];
$activo= isset($_POST['activo']) ? $_POST['activo'] : 0;

$query="UPDATE clientes SET nombre=?, Identificacion=?, Telefono=?, correo=?, pagina_web =?, direccion=?, activo=? WHERE id_cliente=?;";

if  ($stmt = mysqli_prepare($conexion, $query)) {
	
	mysqli_stmt_bind_param($stmt, "sssssssi", $nombre, $identificacion, $telefono, $correo, $pagina, $direccion, $activo, $id);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conexion);
	
	header("Location: index.php");
} else {
	echo "No se logro modificar datos";
}

$_SESSION['mensaje'] = 'Datos Actualizados';
header('Location: index.php' );
?>