<?php 

		$bd_host="dev";
		$bd_nombre="formulariop";
		$bd_usuario="root";
		$bd_contra="desarroll0";
		
		$conexion=mysqli_connect($bd_host,$bd_usuario,$bd_contra,$bd_nombre);

$id=$_REQUEST['id'];
$nombre=$_POST['nombre'];
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
?>