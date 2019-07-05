<?php

include("conexion.php");

    $codigo = $_REQUEST['codigo'];
    $deleteSQL2 = "DELETE FROM editorial WHERE codigo = '$codigo'";
    $result_deleteSQL2 = pg_query($conexion,$deleteSQL2);

    if($result_deleteSQL2){
		header("location: EditorialTabla.php");
	}
	else{
		echo "eliminacion no exitosa";
	}
 ?>
