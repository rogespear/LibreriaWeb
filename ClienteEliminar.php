<?php

include("conexion.php");

    $rut = $_REQUEST['rut'];
    $deleteSQL2 = "DELETE FROM cliente WHERE rut = '$rut'";
    $result_deleteSQL2 = pg_query($conexion,$deleteSQL2);

    if($result_deleteSQL2){
		header("location: ClienteTabla.php");
	}
	else{
		echo "eliminacion no exitosa";
	}
 ?>
