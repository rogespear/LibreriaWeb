<?php

include("conexion.php");
	$isbn=$_REQUEST['isbn'];
	$codigotitulo= $_POST['codigotitulo'];
	$numpaginas= $_POST['numpaginas'];
	$tamaño= $_POST['tamaño'];
	$refedit= $_POST['refedit'];


	$query="UPDATE Edicion SET codigotitulo='$codigotitulo',numpaginas='$numpaginas',tamaño='$tamaño',refedit='$refedit' WHERE isbn='$isbn'";

	$resultado= pg_query($conexion,$query);

	if($resultado){
		header("Location: tablaEdicion.php");
	}
	else{
		echo "insecion no exitosa";
	}
 ?>