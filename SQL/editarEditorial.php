<?php

include("conexion.php");

	$codigo= $_POST['codigo'];
	$nombre= $_POST['nombre'];
	$telefono= $_POST['telefono'];
    $direccion= $_POST['direccion'];
    
	$updateSQL = "UPDATE editorial SET (nombre,telefono,direccion) = "
        . "('$nombre','$telefono','$direccion') "
        . "WHERE codigo = '$codigo'";
    $result_updateSQL = pg_query($conexion,$updateSQL);

	if($result_updateSQL){
		echo "Modificacion exitosa";
	}
	else{
		echo "Modificacion no exitosa";
	}
 ?>