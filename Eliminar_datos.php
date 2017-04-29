<?php
session_start();
$cliente = $_POST;

try{
	$base=new PDO ('mysql:host=localhost; dbname=formulariop', 'root', '');
	
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET UTF8");
	
}catch(exception $e){
		die('Error' . $e->getMessage());
		echo "Linea del error" . $e->getLine();
		
}
	
	$id=$_GET["id"];
	
	$base->query("DELETE FROM clientes WHERE id_cliente='$id'");
	

$_SESSION['mensaje'] = 'Datos eliminados';
header('Location: index.php' );
?>