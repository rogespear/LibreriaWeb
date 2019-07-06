<?php

include("conexion.php");

	$rut= $_POST['rut'];
	$nombre= $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$telefono= $_POST['telefono'];
	$direccion= $_POST['direccion'];


	$query="INSERT INTO cliente(rut,nombre,apellido,telefono,direccion) VALUES('$rut','$nombre','$apellido','$telefono','$direccion')";

	$resultado= pg_query($conexion,$query);

	if($resultado){
		header("Location: ClienteTabla.php");
	}
	else{
		echo "insersion no exitosa";
	}
 ?>