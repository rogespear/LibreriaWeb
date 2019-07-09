<?php

include("conexion.php");
	$rut=$_REQUEST['rut'];
	$nombre= $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$direccion= $_POST['direccion'];
	$telefono= $_POST['telefono'];


	$query="UPDATE cliente SET nombre='$nombre',apellido='$apellido',direccion='$direccion',telefono='$telefono' WHERE rut='$rut'";

	$resultado= pg_query($conexion,$query);

	if($resultado){
		header("Location: ClienteTabla.php");
	}
	else{
		echo "edicion no exitosa";
	}
 ?>