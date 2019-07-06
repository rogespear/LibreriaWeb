<?php

include("conexion.php");

    $refejemp = $_REQUEST['refejemp'];
    $deleteSQL2 = "DELETE FROM compra WHERE refejemp = '$refejemp'";
    $result_deleteSQL2 = pg_query($conexion,$deleteSQL2);

    if($result_deleteSQL2){
		header("location: CompraTabla.php");
	}
	else{
		echo "eliminacion no exitosa";
	}
 ?>
