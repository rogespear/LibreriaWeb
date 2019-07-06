<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
</head>
<body>
	<center>
		<?php

			$refejemp=$_REQUEST['refejemp'];


			include("conexion.php");
			$query= "SELECT * FROM Compra WHERE refejemp='$refejemp'";
			$resultado= pg_query($conexion,$query);
			$row = pg_fetch_assoc($resultado);
		?>
		<form action="CompraModificar_proceso.php?refejemp=<?php echo $row['refejemp'];?>" method="POST">			
			<input type="text" REQUIRED name="refclient" placeholder="refclient..." value="<?php echo $row['refclient']?>"/>
			<input type="text" REQUIRED name="fecha" placeholder="fecha..." value="<?php echo $row['fecha']?>"/>
			<input type="text" REQUIRED name="costo" placeholder="costo..." value="<?php echo $row['costo']?>"/>
			
		<input type="submit" value="aceptar" />
			
		</form>
		
		
	</center>
</body>
</html>