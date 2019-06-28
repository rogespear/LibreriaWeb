<?php

include("conexion.php");

	$isbn= $_POST['isbn'];
	$codigotitulo= $_POST['codigotitulo'];
	$numpaginas= $_POST['numpaginas'];
	$tamaño= $_POST['tamaño'];
	$refedit= $_POST['refedit'];


	$query="INSERT INTO edicion(isbn,codigotitulo,numpaginas,tamaño,refedit) VALUES('$isbn','$codigotitulo','$numpaginas','$tamaño','$refedit')";

	$resultado= pg_query($conexion,$query);

	if($resultado){
		echo "insercion exitosa";
	}
	else{
		echo "insecion no exitosa";
	}
 ?>