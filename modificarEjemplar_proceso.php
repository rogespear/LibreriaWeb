<?php

include("conexion.php");
	$id=$_REQUEST['id'];
	$precio= $_POST['precio'];
	$estado= $_POST['estado'];
	


	$query="UPDATE Edicion SET codigotitulo='$codigotitulo',numpaginas='$numpaginas',tamaño='$tamaño',refedit='$refedit' WHERE isbn='$isbn'";

	$resultado= pg_query($conexion,$query);

	if($resultado){
		header("Location: tablaEdicion.php");
	}
	else{
		echo "insecion no exitosa";
	}
 ?>