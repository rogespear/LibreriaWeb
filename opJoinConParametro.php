<?php

include("conexion.php");

    $name = $_POST['parametro'];
    $consultaSQL7 = "SELECT Cliente.nombre, compra.costo, compra.fecha, ejemplar.id "
        . "FROM cliente INNER JOIN compra on cliente.rut = compra.refclient "
        . "INNER JOIN ejemplar ON ejemplar.id = compra.refejemp WHERE nombre = '$name'";
    $res_consultaSQL7 = pg_query($conexion,$consultaSQL7);


	if($res_consultaSQL7){
		echo "insercion exitosa";
	}
	else{
		echo "insecion no exitosa";
	}
 ?>