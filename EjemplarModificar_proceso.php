<?php

include("conexion.php");
	$id=$_REQUEST['id'];
	$precio= $_POST['precio'];
	$estado= $_POST['estado'];
	
	$query="UPDATE Ejemplar SET precio='$precio',estado='$estado' WHERE id='$id'";
	$resultado= pg_query($conexion,$query);

	if($resultado){
		header("Location: EjemplarTabla.php");
	}
	else{
		echo "insecion no exitosa";
	}
 ?>