<?php

include("conexion.php");

    $isbn = $_REQUEST['isbn'];
    $deleteSQL2 = "DELETE FROM edicion WHERE isbn = '$isbn'";
    $result_deleteSQL2 = pg_query($conexion,$deleteSQL2);

    if($result_deleteSQL2){
		header("location: tablaEdicion.php");
	}
	else{
		echo "eliminacion no exitosa";
	}
 ?>
