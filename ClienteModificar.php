<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
</head>
<body>
	<center>
		<?php

			$rut=$_REQUEST['rut'];


			include("conexion.php");
			$query= "SELECT * FROM Cliente WHERE rut='$rut'";
			$resultado= pg_query($conexion,$query);
			$row = pg_fetch_assoc($resultado);
		?>
		<form action="ClienteModificar_proceso.php?rut=<?php echo $row['rut'];?>" method="POST">			
			<input type="text" REQUIRED name="nombre" placeholder="nombre..." value="<?php echo $row['nombre']?>"/>
			<input type="text" REQUIRED name="apellido" placeholder="apellido..." value="<?php echo $row['apellido']?>"/>
			<input type="text" REQUIRED name="telefono" placeholder="telefono..." value="<?php echo $row['telefono']?>"/>
			<input type="text" REQUIRED name="direccion" placeholder="direccion..." value="<?php echo $row['direccion']?>"/>
		<input type="submit" value="aceptar" />
			
		</form>
		
		
	</center>
</body>
</html>