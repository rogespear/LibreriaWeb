<?php

include("conexion.php");

    $isbn = $_POST('parametro');
    $deleteSQL2 = "DELETE FROM edicion WHERE isbn = '$isbn'";
    $result_deleteSQL2 = pg_query($conexion_to_pgSQL,$deleteSQL2);

    if($result_deleteSQL2){
		echo "eliminacion exitosa";
	}
	else{
		echo "eliminacion no exitosa";
	}
 ?>
