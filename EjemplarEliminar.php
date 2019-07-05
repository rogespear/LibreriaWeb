<?php

include("conexion.php");

    $id = $_REQUEST['id'];
    $deleteSQL2 = "DELETE FROM ejemplar WHERE id = '$id'";
    $result_deleteSQL2 = pg_query($conexion,$deleteSQL2);

    if($result_deleteSQL2){
		header("location: EjemplarTabla.php");
	}
	else{
		echo "eliminacion no exitosa";
	}
 ?>