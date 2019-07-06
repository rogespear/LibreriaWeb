<?php

include("conexion.php");

	$refejemp= $_POST['refejemp'];
	$refclient= $_POST['refclient'];
	$fecha $_POST['fecha'];
	$costo= $_POST['costo'];
	


	$query="INSERT INTO compra(refejemp,refclient,fecha,costo) VALUES('$refejemp','$refclient','$fecha','$costo')";

	$resultado= pg_query($conexion,$query);

	if($resultado){
		header("Location: CompraTabla.php");
	}
	else{
		echo "insersion no exitosa";
	}
 ?>