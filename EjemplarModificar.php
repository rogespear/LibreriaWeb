<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
</head>
<body>
	<center>
		<?php

			$id=$_REQUEST['id'];

			include("conexion.php");
			$query= "SELECT * FROM ejemplar WHERE id='$id'";
			$resultado= pg_query($conexion,$query);
			$row = pg_fetch_assoc($resultado);
		?>
		<form action="EjemplarModificar_proceso.php?id=<?php echo $row['id'];?>" method="POST">			
			<input type="text" REQUIRED name="precio" placeholder="precio..." value="<?php echo $row['precio']?>"/>
			<input type="text" REQUIRED name="estado" placeholder="estado (Vendido/Disponible)..." value="<?php echo $row['estado']?>"/>			
		<input type="submit" value="aceptar" />	

		</form>	

	</center>
</body>
</html>