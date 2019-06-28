<?php

include("conexion.php");

    $codigoEdit = $_POST('parametro');
    $deleteSQL = "DELETE FROM editorial WHERE codigo = '$codigoEdit'";
    $result_deleteSQL = pg_query($conexion,$deleteSQL);

    if($result_deleteSQL){
		echo "eliminacion exitosa";
	}
	else{
		echo "eliminacion no exitosa";
	}
 ?>