<?php 

		$bd_host="localhost";
		$bd_nombre="formulariop";
		$bd_usuario="root";
		$bd_contra="";
		
		$conexion=mysqli_connect($bd_host,$bd_usuario,$bd_contra,$bd_nombre);

	$id=$_REQUEST['id_cliente'];


	$query="DELETE FROM clientes WHERE id='$id' ";
	$resultado= $conexion->query($query);

if ($resultado){
	header("Location: index.php");
	
} else {
	echo "No se logro modificar datos";
	
}

?>