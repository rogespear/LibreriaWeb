<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
</head>
<body>
	<center>
		<?php

			$isbn=$_REQUEST['isbn'];


			include("conexion.php");
			$query= "SELECT * FROM Edicion WHERE isbn='$isbn'";
			$resultado= pg_query($conexion,$query);
			$row = pg_fetch_assoc($resultado);
		?>
		<form action="modificarEdicion_proceso.php?isbn=<?php echo $row['isbn'];?>" method="POST">			
			<input type="text" REQUIRED name="codigotitulo" placeholder="codigo titulo..." value="<?php echo $row['codigotitulo']?>"/>
			<input type="text" REQUIRED name="numpaginas" placeholder="numpaginas..." value="<?php echo $row['numpaginas']?>"/>
			<input type="text" REQUIRED name="tamaño" placeholder="tamaño..." value="<?php echo $row['tamaño']?>"/>
			<input type="text" REQUIRED name="refedit" placeholder="ref edit..." value="<?php echo $row['refedit']?>"/>
		<input type="submit" value="aceptar" />
			
		</form>
		
		
	</center>
</body>
</html>