<?php 

		$bd_host="localhost";
		$bd_nombre="formulariop";
		$bd_usuario="root";
		$bd_contra="";
		
		$conexion=mysqli_connect($bd_host,$bd_usuario,$bd_contra,$bd_nombre);

$id=$_REQUEST['id'];
$nombre=$_POST['nombre'];
$identificacion= $_POST['Identificacion'];
$telefono= $_POST['Telefono'];
$correo= $_POST['correo'];
$pagina= $_POST['pagina_web'];
$direccion= $_POST['direccion'];
$activo= $_POST['activo'];

$query="UPDATE clientes SET nombre='$nombre', identificacion='$identificacion', telefono='$telefono', correo='$correo' pagina='$pagina', direccion='$direccion', activo='$activo' WHERE id='$id' ";
$resultado= $conexion->query($query);

if ($resultado){
	header("Location: index.php");
	
} else {
	echo "No se logro modificar datos";
	
}

?>