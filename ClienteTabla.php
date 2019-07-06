<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
</head>
<body>
	<center>
		<table border="3">
			<thead>
				<tr>
					<th colspan="1"> <a href="ClienteFormulario.php">Nuevo<a/></th>
					<th colspan="7">Lista de Clientes</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td>rut</td>
				<td>nombre</td>
				<td>apellido</td>
				<td>telefono</td>
				<td>direccion</td>
				
				</tr>

			<?php
				include("conexion.php");
				$query= "SELECT * FROM Cliente";
				$resultado= pg_query($conexion,$query);
				while($row = pg_fetch_assoc($resultado)){
			?>
				<tr>
					<td><?php echo $row['rut']?></td>
					<td><?php echo $row['nombre']?></td>
					<td><?php echo $row['apellido']?></td>
					<td><?php echo $row['telefono']?></td>
					<td><?php echo $row['direccion']?></td>
					<td><a href="ClienteModificar.php?rut=<?php echo $row['rut']; ?>">modificar<a/></td>
					<td><a href="ClienteEliminar.php?rut=<?php echo $row['rut']; ?>">eliminar<a/></td>
				</tr>

			<?php 
				}
			 ?>
				
			
				

			</tbody>
		</table>
	</center>

</body>
</html>