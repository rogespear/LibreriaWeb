<?php

include("conexion.php");

	$codigo= $_POST['codigo'];
	$nombre= $_POST['nombre'];
	$telefono= $_POST['telefono'];
	$direccion= $_POST['direccion'];
	
	$query="INSERT INTO editorial(codigo,nombre,telefono,direccion) VALUES('$codigo','$nombre','$telefono','$direccion')";
    $resultado= pg_query($conexion,$query);
    
	if($resultado){
		header("Location: EditorialTabla.php");
	}
	else{
		echo "insersion no exitosa";
	}
 ?>