<?php

include("conexion.php");

	$id= $_POST['id'];
	$precio= $_POST['precio'];
	$estado= $_POST['estado'];
	
	
	$query="INSERT INTO ejemplar(id,precio,estado) VALUES('$id','$precio','$estado')";
    $resultado= pg_query($conexion,$query);
    
	if($resultado){
		header("Location: EjemplarTabla.php");
	}
	else{
		echo "insersion no exitosa";
	}
 ?>