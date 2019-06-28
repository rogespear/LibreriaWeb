<?php

include("conexion.php");

    
    $consultaSQL6 = "SELECT Cliente.nombre, compra.costo, compra.fecha, ejemplar.id"
    . " FROM cliente INNER JOIN compra ON cliente.rut = compra.refclient "
    . "INNER JOIN ejemplar ON ejemplar.id = compra.refejemp";
    $res_consultaSQL6 = pg_query($conexion,$consultaSQL6);

    if($res_consultaSQL6){
		echo "insercion exitosa";
	}
	else{
		echo "insecion no exitosa";
	}
 ?>