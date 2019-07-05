<?php

include("conexion.php");
	$codigo=$_REQUEST['codigo'];
	$nombre= $_POST['nombre'];
	$telefono= $_POST['telefono'];
	$direccion= $_POST['direccion'];


	$query="UPDATE Editorial SET nombre='$nombre',telefono='$telefono',direccion='$direccion' WHERE codigo='$codigo'";
	$resultado= pg_query($conexion,$query);

	if($resultado){
		header("Location: EditorialTabla.php");
	}
	else{
		echo "insecion no exitosa";
	}
 ?>