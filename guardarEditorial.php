<?php

include("conexion.php");

	$codigo= $_POST['codigo'];
	$nombre= $_POST['text'];
	$telefono= $_POST['telefono'];
    $direccion= $_POST['direccion'];
    
	$insertSQL = "INSERT INTO editorial(codigo,nombre,telefono,direccion)"
        . "values ('$codigo','$nombre','$telefono','$direccion')";

    $resultado_insertSQL = pg_query($conexion,$insertSQL);

	if($resultado_insertSQL){
		echo "insercion exitosa";
	}
	else{
		echo "insecion no exitosa";
	}
 ?>