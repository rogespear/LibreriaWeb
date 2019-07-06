<?php

include("conexion.php");
	$refejemp=$_REQUEST['refejemp'];
	$refclient= $_POST['refclient'];
	$fecha= $_POST['fecha'];
	$costo= $_POST['costo'];



	$query="UPDATE Edicion SET refclient='$refclient',fecha='$fecha',costo='$costo' WHERE refejemp='$refejemp'";

	$resultado= pg_query($conexion,$query);

	if($resultado){
		header("Location: CompraTabla.php");
	}
	else{
		echo "edicion no exitosa";
	}
 ?>